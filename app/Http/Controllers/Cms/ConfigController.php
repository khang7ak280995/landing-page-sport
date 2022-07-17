<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Settings\ConfigModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ConfigController extends Controller
{
    //

    public function index(Request $request)
    {
        $configs = ConfigModel::where('type','config')->latest()->get();
        if ($request->ajax()) {
            $data = ConfigModel::where('type','config')->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProperty">Sửa</a>';

                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProperty">Xóa</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.config-info.index',compact('configs'));
    }

    public function store(Request  $request)
    {
        ConfigModel::updateOrCreate(['id' => $request->property_id],
            ['title' => $request->title, 'type' => 'config','content' => $request['content']]);

        return back()->with('message', 'Tạo bản ghi thành công');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $property = ConfigModel::find($id);
        return response()->json($property);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        //
        $config = ConfigModel::find($request->id);
        $config->title = $request->title;
        $config->type = $request->type;
        $config->content = $request['content'];

        $config->save();

        return response()->json(['message'=>'Cập nhật bản ghi thành công.']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        ConfigModel::find($id)->delete();

        return back()->with('message', 'Xóa bản ghi thành công');
    }
}
