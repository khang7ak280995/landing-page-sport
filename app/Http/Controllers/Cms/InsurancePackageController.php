<?php

namespace App\Http\Controllers\Cms;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TraitController\BaseController;
use App\Http\Requests\Cms\InsurancePackageRequest;
use App\Models\Cms\InsurancePackage;
use App\Traits\HasAjaxRequest;
use Illuminate\Http\Request;
use Illuminate\Http\ResponseTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class InsurancePackageController extends Controller
{
    use ResponseTrait, HasAjaxRequest, BaseController;

    protected $slug, $model;

    public function __construct(InsurancePackage $model)
    {
        $this->slug = Constant::INSURANCE_PACKAGE;
        $this->model = $model;
    }

    public function getDataTable(Request $request)
    {
        $data = InsurancePackage::query()->get();
        return DataTables::of($data)
            ->escapeColumns([])
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '<a class="btn btn-success btn-sm" href="' . route('cms.' . $this->slug . '.create-edit', $row->id) . '">Edit</button> <a href="javascript:void(0)" data-route="' . route('cms.' . $this->slug . '.delete', $row->id) . '" data-id="' . $row->id . '" class="delete btn btn-danger btn-sm delete-item-datatable" data-bs-toggle="modal" data-bs-target="#modal-confirm-delete">Delete</a>';
            })
            ->editColumn('link_image', function ($row) {
                return '<img class="w-100" src="' . asset($row->link_image) . '">';
            })
            ->editColumn('is_show', function ($row) {
                if ($row->is_show == 1) {
                    $switch = '<div class="form-check form-switch"><input checked class="form-check-input is_show" type="checkbox" role="switch" data-route="' . route('cms.' . $this->slug . '.change-show', $row->id) . '"></div>';
                } else {
                    $switch = '<div class="form-check form-switch"><input class="form-check-input is_show" type="checkbox" role="switch" data-route="' . route('cms.' . $this->slug . '.change-show', $row->id) . '"></div>';
                }
                return $switch;
            })
            ->editColumn('is_show_home_page ', function ($row) {
                if ($row->is_show_home_page == 1) {
                    $switch = '<div class="form-check form-switch"><input checked class="form-check-input is_show_home_page" type="checkbox" role="switch" data-route="' . route('cms.' . $this->slug . '.change-show-home-page', $row->id) . '"></div>';
                } else {
                    $switch = '<div class="form-check form-switch"><input class="form-check-input is_show_home_page" type="checkbox" role="switch" data-route="' . route('cms.' . $this->slug . '.change-show-home-page', $row->id) . '"></div>';
                }
                return $switch;
            })
            ->rawColumns(['action', 'is_show_home_page'])
            ->make(true);
    }

    public function store(InsurancePackageRequest $request)
    {
        $request->validate([
            'image' => 'required|max:2048'
        ]);

        $this->helperStore($request);
        return back()->with('message', 'Create Success!');
    }

    public function update(InsurancePackageRequest $request, $id)
    {
        $this->helperUpdate($request, $id);
        return back()->with('success', 'Update Success!');
    }

    public function changeShowHomePage($id)
    {
        $query = $this->model::getDetail($id);
        if ($query == null) {
            return $this->ajaxErrorResponse(1, 'Not found!');
        }

        $params = [
            'id' => $id,
            'is_show' => $query->is_show_home_page == 0 ? 1 : 0
        ];
        $query = $this->model::storeOrUpdate($params);
        return $this->ajaxSuccessResponse($query, 'Change Success!');
    }
}
