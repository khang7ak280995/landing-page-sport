<?php

namespace App\Http\Controllers\Cms;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TraitController\BaseController;
use App\Http\Requests\Cms\ImpressNumberRequest;
use App\Models\Cms\ImpressiveNumber;
use App\Traits\HasAjaxRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\ResponseTrait;
use Yajra\DataTables\DataTables;

class ImpressiveNumberController extends Controller
{
    use ResponseTrait, HasAjaxRequest, BaseController;

    protected $model, $slug, $tableName;

    public function __construct(ImpressiveNumber $model)
    {
        $this->model = $model;
        $this->slug = Constant::IMPRESSIVE_NUMBER;
        $this->tableName = 'impressive_number';
    }

    public function getDataTable(Request $request)
    {
        $data = $this->model::query()->get();
        return DataTables::of($data)
            ->escapeColumns([])
            ->addIndexColumn()
            ->editColumn('date_post', function ($row) {
                return Carbon::parse($row->date_post)->format('d-m-Y');
            })
            ->editColumn('is_show', function ($row) {
                if ($row->is_show == 1) {
                    $switch = '<div class="form-check form-switch"><input checked class="form-check-input is_show" type="checkbox" role="switch" data-route="' . route('cms.' . $this->slug . '.change-show', $row->id) . '"></div>';
                } else {
                    $switch = '<div class="form-check form-switch"><input class="form-check-input is_show" type="checkbox" role="switch" data-route="' . route('cms.' . $this->slug . '.change-show', $row->id) . '"></div>';
                }
                return $switch;
            })
            ->editColumn('icon', function ($row) {
                return '<img width="55px" height="61px" class="w-100" src="' . asset($row->icon) . '">';
            })
            ->addColumn('action', function ($row) {
                $actionBtn = '<a class="btn btn-success btn-sm" href="' . route('cms.' . $this->slug . '.create-edit', $row->id) . '">Edit</button> <a href="javascript:void(0)" data-route="' . route('cms.' . $this->slug . '.delete', $row->id) . '" data-id="' . $row->id . '" class="delete btn btn-danger btn-sm delete-item-datatable" data-bs-toggle="modal" data-bs-target="#modal-confirm-delete">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(ImpressNumberRequest $request)
    {
        $request->validate([
            'icon' => 'required|max:2048'
        ]);

        $this->helperStore($request);
        return back()->with('message', 'Create Success!');
    }

    public function update(ImpressNumberRequest $request, $id)
    {
        $this->helperUpdate($request, $id);
        return back()->with('success', 'Update Success!');
    }
}
