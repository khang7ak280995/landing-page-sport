<?php

namespace App\Http\Controllers\Cms;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TraitController\BaseController;
use App\Http\Requests\Cms\FAQRequest;
use App\Models\Cms\FAQ;
use App\Traits\HasAjaxRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\ResponseTrait;
use Yajra\DataTables\DataTables;

class FAQController extends Controller
{
    use HasAjaxRequest, ResponseTrait, BaseController;

    protected $slug, $model, $tableName;

    public function __construct(FAQ $model)
    {
        $this->model = $model;
        $this->slug = Constant::FAQ;
        $this->tableName = 'faq';
    }

    public function getDataTable(Request $request)
    {
        $data = $this->model::query()->get();
        return DataTables::of($data)
            ->escapeColumns([])
            ->addIndexColumn()
            ->editColumn('is_show', function ($row) {
                if ($row->is_show == 1) {
                    $switch = '<div class="form-check form-switch"><input checked class="form-check-input is_show" type="checkbox" role="switch" data-route="' . route('cms.' . $this->slug . '.change-show', $row->id) . '"></div>';
                } else {
                    $switch = '<div class="form-check form-switch"><input class="form-check-input is_show" type="checkbox" role="switch" data-route="' . route('cms.' . $this->slug . '.change-show', $row->id) . '"></div>';
                }
                return $switch;
            })
            ->addColumn('action', function ($row) {
                return '<a class="btn btn-success btn-sm" href="' . route('cms.' . $this->slug . '.create-edit', $row->id) . '">Edit</button> <a href="javascript:void(0)" data-route="' . route('cms.' . $this->slug . '.delete', $row->id) . '" data-id="' . $row->id . '" class="delete btn btn-danger btn-sm delete-item-datatable" data-bs-toggle="modal" data-bs-target="#modal-confirm-delete">Delete</a>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(FAQRequest $request)
    {
        $params = $request->all();
        $faq = $this->model::storeOrUpdate($params);
        return back()->with('success', 'Create Success!');
    }

    public function update(FAQRequest $request, $id)
    {
        $faq = $this->model::getDetail($id);
        if ($faq == null) {
            return back()->with('errors', 'Not Found!');
        }

        $params = $request->all();
        $params['id'] = $id;
        $faq = $this->model::storeOrUpdate($params);
        return back()->with('success', 'Update Success!');
    }
}
