<?php

namespace App\Http\Controllers\Cms;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TraitController\BaseController;
use App\Http\Requests\Cms\UserRequest;
use App\Models\User;
use App\Traits\HasAjaxRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\ResponseTrait;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    use HasAjaxRequest, ResponseTrait, BaseController;

    protected $model, $slug, $tableName;

    public function __construct(User $model)
    {
        $this->model = $model;
        $this->slug = Constant::USER;
        $this->tableName = 'users';
    }

    public function getDataTable(Request $request)
    {
        $data = $this->model::query()->get();
        return DataTables::of($data)
            ->escapeColumns([])
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '<a class="btn btn-success btn-sm" href="' . route('cms.' . $this->slug . '.create-edit', $row->id) . '">Edit</button> <a href="javascript:void(0)" data-route="' . route('cms.' . $this->slug . '.delete', $row->id) . '" data-id="' . $row->id . '" class="delete btn btn-danger btn-sm delete-item-datatable" data-bs-toggle="modal" data-bs-target="#modal-confirm-delete">Delete</a>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function createOrEdit($id = null)
    {
        if ($id != null) {
            $query = $this->model::query()->find($id);
            if ($query == null) {
                return back()->with('errors', 'Not Found!');
            }
            return view('admin/' . $this->slug . '/create-edit', compact('query'));
        }
        return view('admin/' . $this->slug . '/create-edit');
    }

    public function store(UserRequest $request)
    {
        $params = $request->all();
        $params['password'] = Hash::make($params['password']);
        $user = $this->model::query()->where('email', $params['email'])->first();
        if ($user != null) {
            return back()->with('errors', 'Email Exists!');
        }
        $user = $this->model::query()->create($params);
        return back()->with('success', 'Create Success!');
    }

    public function update(Request $request, $id)
    {
        $params = $request->all();

        $user = $this->model::query()
            ->where('email', $params['email'])
            ->where('id', '!=', $id)
            ->first();

        if ($user != null){
            return back()->with('errors', 'Email Exists!');
        }
        if ($request['password'] != null){
            $params['password'] = Hash::make($params['password']);
        } else {
            unset($params['password']);
        }
        $user = $this->model::query()->find($id)->fill($params)->save();
        return back()->with('success', 'Update Success!');
    }
}
