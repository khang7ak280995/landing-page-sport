<?php

namespace App\Http\Controllers\TraitController;

use App\Http\Requests\Cms\SlideHomeRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

trait BaseController
{
    public function index()
    {
        return view('admin/' . $this->slug . '/index');
    }

    public function createOrEdit($id = null)
    {
        if ($id != null) {
            $query = $this->model::getDetail($id);
            if ($query == null) {
                return back()->with('errors', 'Not Found!');
            }
            return view('admin/' . $this->slug . '/create-edit', compact('query'));
        }
        return view('admin/' . $this->slug . '/create-edit');
    }

    public function delete($id)
    {
        $data = $this->model::query()->find($id)->delete();
        return back()->with('success', 'Delete Success!');
    }

    public function changeShow($id)
    {
        $query = $this->model::getDetail($id);
        if ($query == null) {
            return $this->ajaxErrorResponse(1, 'Not found!');
        }

        $params = [
            'id' => $id,
            'is_show' => $query->is_show == 0 ? 1 : 0
        ];
        $query = $this->model::storeOrUpdate($params);
        return $this->ajaxSuccessResponse($query, 'Change Success!');
    }

    public function helperStore($request)
    {
        $params = $request->all();
        $column = DB::getSchemaBuilder()->getColumnListing($this->tableName);
        if ($request->hasFile('image')) {
            $urlImage = $this->helperSaveImage($request['image']);
            $params['link_image'] = $urlImage;
        }

        if ($request->hasFile('icon')) {
            $urlIcon = $this->helperSaveImage($request['icon']);
            $params['icon'] = $urlIcon;
        }

        if ($request->has('title')) {
            $params['slug'] = create_slug($params['title']);
        } elseif ($request->has('name')) {
            $params['slug'] = create_slug($params['name']);
        }
        if (in_array('slug', $column)){
            if ($this->model::getFirstByWhere('slug', '=', $params['slug']) != null) {
                $params['slug'] = $params['slug'] . time();
            }
        }

        return $this->model::storeOrUpdate($params);
    }

    public function helperUpdate($request, $id)
    {
        $params = $request->all();
        $params['id'] = $id;
        $column = DB::getSchemaBuilder()->getColumnListing($this->tableName);

        if ($request->hasFile('image')) {
            $url = $this->helperSaveImage($request['image']);
            $params['link_image'] = $url;
        }
        if ($request->hasFile('icon')) {
            $url = $this->helperSaveImage($request['icon']);
            $params['icon'] = $url;
        }

        if ($request->has('title')) {
            $params['slug'] = create_slug($params['title']);
        } elseif ($request->has('name')) {
            $params['slug'] = create_slug($params['name']);
        }
        if (in_array('slug', $column)){
            if (!$this->model::getList(['*'], [], [['column' => 'slug', 'value' => $params['slug']], ['column' => 'id', 'operator' => '!=', 'value' => $id]])->isEmpty()) {
                $params['slug'] = $params['slug'] . time();
            }
        }

        return $this->model::storeOrUpdate($params);
    }

    public function helperSaveImage($image)
    {
        $extension = $image->extension();

        $name = time() . '-' . Auth::id() . '.' . $extension;

        Storage::disk('public')->putFileAs($this->slug . '/', $image, $name);
        return Storage::url('public/' . $this->slug . '/' . $name);
    }
}