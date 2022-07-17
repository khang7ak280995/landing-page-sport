<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\PromotionRequest;
use App\Models\Settings\CustomerRegisterInsurance;
use App\Models\Settings\PromotionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class PromotionController extends Controller
{
    protected $model;

    public function __construct(PromotionModel $model)
    {
        $this->model = $model;
    }

    public function index(Request $request)
    {
        $list = PromotionModel::latest()->get();
        if ($request->ajax()) {
            $data = PromotionModel::latest()->get();
            return \Yajra\DataTables\DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a data-id="' . $row->id . '" href="' . route('cms.promotion.create-edit', $row->id) . '" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Sửa">Sửa</a>';


                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProperty">Xóa</a>';

                    return $btn;
                })
                ->editColumn('status', function ($row) {
                    if ($row->status == 0) {
                        return 'Ẩn';
                    } elseif ($row->status == 1) {
                        return 'Show';
                    } else {
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
        return view('admin/promotion/index',compact('list'));
    }

    public function getDataTable(Request $request)
    {
        $data = $this->model::query()->get();
        return DataTables::of($data)->make(true);
    }

    public function createOrEdit($id = null)
    {
        if ($id != null) {
            $promotion = $this->model::getDetail($id);
            if ($promotion == null) {
                return back()->with('errors', 'Not Found!');
            }
            return view('admin/promotion/store-update', compact('promotion'));
        }
        return view('admin/promotion/store-update');
    }


    public function store(PromotionRequest $request)
    {
        //
        $request->validate([
            'image' => 'required|max:2048'
        ]);

        $image = $request['image'];
        $extension = $image->extension();

        $name = time() . '-' . Auth::id() . '.' . $extension;

        Storage::disk('public')->putFileAs('promotion/', $image, $name);
        $url = Storage::url('public/promotion/' . $name);

        $params = [
            'title' => $request['title'],
            'description' => $request['description'],
            'image' => $url,
            'content'=>$request['content'],
            'is_especially'=>$request['is_especially'],
            'slug' => Str::slug($request->get('title') . '-' . time()),
        ];
        $data = PromotionModel::storeOrUpdate($params);
        return back()->with('message', 'Tạo khuyến mãi thành công!');
    }

    public function update(PromotionRequest $request, $id)
    {
        //
        $params = $request->all();
        $params['id'] = $id;
        if ($request->hasFile('image')) {
            $image = $request['image'];
            $extension = $image->extension();

            $name = time() . '-' . Auth::id() . '.' . $extension;

            Storage::disk('public')->putFileAs('promotion/', $image, $name);
            $url = Storage::url('public/promotion/' . $name);
            $params['image'] = $url;
        }
        $data = $this->model::storeOrUpdate($params);

        return back()->with('message', 'Cập nhật khuyến mãi thành công!');
    }


    public function delete($id)
    {
        //
        $data = $this->model::query()->find($id)->delete();
        return back()->with('success', 'Xóa khuyến mãi thành công!');
    }
}
