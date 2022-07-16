<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\SlideHomeRequest;
use App\Models\Settings\SlideHomeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class SlideHomeController extends Controller
{
    protected $model;

    public function __construct(SlideHomeModel $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return view('admin/slide-home/index');
    }

    public function getDataTable(Request $request)
    {
        $data = $this->model::query()->get();
        return DataTables::of($data)->make(true);
    }

    public function createOrEdit($id = null)
    {
        if ($id != null) {
            $slide = $this->model::getDetail($id);
            if ($slide == null) {
                return back()->with('errors', 'Not Found!');
            }
            return view('admin/slide-home/create-edit', compact('slide'));
        }
        return view('admin/slide-home/create-edit');
    }

    public function store(SlideHomeRequest $request)
    {
        $request->validate([
            'image' => 'required|max:2048'
        ]);

        $image = $request['image'];
        $extension = $image->extension();

        $name = time() . '-' . Auth::id() . '.' . $extension;

        Storage::disk('public')->putFileAs('slide-home/', $image, $name);
        $url = Storage::url('public/slide-home/' . $name);

        $params = [
            'title' => $request['title'],
            'description' => $request['description'],
            'link_image' => $url
        ];
        $data = $this->model::storeOrUpdate($params);
        return back()->with('message', 'Create Success!');
    }

    public function update(SlideHomeRequest $request, $id)
    {
        $params = $request->all();
        $params['id'] = $id;
        if ($request->hasFile('image')) {
            $image = $request['image'];
            $extension = $image->extension();

            $name = time() . '-' . Auth::id() . '.' . $extension;

            Storage::disk('public')->putFileAs('slide-home/', $image, $name);
            $url = Storage::url('public/slide-home/' . $name);
            $params['link_image'] = $url;
        }
        $data = $this->model::storeOrUpdate($params);

        return back()->with('success', 'Update Success!');
    }

    public function delete($id)
    {
        $data = $this->model::query()->find($id)->delete();
        return back()->with('success', 'Delete Success!');
    }
}
