<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Settings\CustomerRegisterInsurance;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CustomerRegisterController extends Controller
{
    //
    public function index(Request $request)
    {
        $list = CustomerRegisterInsurance::latest()->get();
        if ($request->ajax()) {
            $data = CustomerRegisterInsurance::latest()->get();
            return \Yajra\DataTables\DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    if ($row->status == 0) {
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editProperty">Xác nhận</a>';
                    }
                    else{
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editProperty" style="display: none">Sửa</a>';
                    }
                    return $btn;
                })
                ->editColumn('status', function ($row) {
                    if ($row->status == 0) {
                        return 'Chưa xử lý';
                    } elseif ($row->status == 1) {
                        return 'Đã xử lý đơn';
                    }
                    else {
                        return ``;
                    }
                })
                ->addColumn('created_at', function ($row) {
                    $createTime = Carbon::parse($row->created_at)->format('H:i d/m/Y');
                    return $createTime;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Admin/customer-register/index',compact('list'));
    }
    public function edit($id)
    {
        $build = CustomerRegisterInsurance::find($id);
        return response()->json($build);
    }
    public function store(Request $request)
    {
        CustomerRegisterInsurance::updateOrCreate(['id' => $request->property_id],
            [
                'status' => $request->status,
            ]);
        return back()->with('message', 'Cập nhật  trạng thái thành công');

    }
}
