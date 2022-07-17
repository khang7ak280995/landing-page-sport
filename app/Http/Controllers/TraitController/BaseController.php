<?php

namespace App\Http\Controllers\TraitController;

use App\Http\Requests\Cms\SlideHomeRequest;
use Illuminate\Support\Facades\Auth;
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
        $url = $this->helperSaveImage($request);

        $params['link_image'] = $url;
        return $this->model::storeOrUpdate($params);
    }

    public function helperUpdate($request, $id)
    {
        $params = $request->all();
        $params['id'] = $id;
        if ($request->hasFile('image')) {
            $url = $this->helperSaveImage($request);
            $params['link_image'] = $url;
        }
        return $this->model::storeOrUpdate($params);
    }

    public function helperSaveImage($request)
    {
        $image = $request['image'];
        $extension = $image->extension();

        $name = time() . '-' . Auth::id() . '.' . $extension;

        Storage::disk('public')->putFileAs($this->slug . '/', $image, $name);
        return Storage::url('public/' . $this->slug . '/' . $name);
    }
}