<?php

namespace App\Http\Controllers\Cms;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TraitController\BaseController;
use App\Http\Requests\Cms\SlideHomeRequest;
use App\Models\Settings\SlideHomeModel;
use App\Traits\HasAjaxRequest;
use Illuminate\Http\Request;
use Illuminate\Http\ResponseTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class SlideHomeController extends Controller
{
    use ResponseTrait, HasAjaxRequest, BaseController;

    protected $model, $slug;

    public function __construct(SlideHomeModel $model)
    {
        $this->slug = Constant::SLIDE_HOME;
        $this->model = $model;
    }

    public function getDataTable(Request $request)
    {
        $data = $this->model::query()->get();
        return DataTables::of($data)
            ->escapeColumns([])
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<a class="btn btn-success btn-sm" href="' . route('cms.' . $this->slug . '.create-edit', $row->id) . '">Edit</button> <a href="javascript:void(0)" data-route="' . route('cms.' . $this->slug . '.delete', $row->id) . '" data-id="' . $row->id . '" class="delete btn btn-danger btn-sm delete-item-datatable" data-bs-toggle="modal" data-bs-target="#modal-confirm-delete">Delete</a>';
                return $actionBtn;
            })
            ->editColumn('is_show', function ($row) {
                if ($row->is_show == 1) {
                    $switch = '<div class="form-check form-switch"><input checked class="form-check-input is_show" type="checkbox" role="switch" data-route="' . route('cms.' . $this->slug . '.change-show', $row->id) . '"></div>';
                } else {
                    $switch = '<div class="form-check form-switch"><input class="form-check-input is_show" type="checkbox" role="switch" data-route="' . route('cms.' . $this->slug . '.change-show', $row->id) . '"></div>';
                }
                return $switch;
            })
            ->editColumn('link_image', function ($row) {
                return '<img class="w-100" src="' . asset($row->link_image) . '">';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(SlideHomeRequest $request)
    {
        $request->validate([
            'image' => 'required|max:3072'
        ]);

        $this->helperStore($request);
        return back()->with('message', 'Create Success!');
    }

    public function update(SlideHomeRequest $request, $id)
    {
        $this->helperUpdate($request, $id);
        return back()->with('success', 'Update Success!');
    }
}
