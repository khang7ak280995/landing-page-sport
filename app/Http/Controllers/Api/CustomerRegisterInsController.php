<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\CustomerRegisterInsuranceRequest;
use App\Models\Settings\CustomerRegisterInsurance;
use Illuminate\Http\Request;

class CustomerRegisterInsController extends Controller
{
    //
    public function store(CustomerRegisterInsuranceRequest $request)
    {
        $data_create = CustomerRegisterInsurance::query()->create([
            "name" => $request->post("name"),
            "phone" => $request->post("phone"),
            "note" => $request->post("note"),
            "vga_code" => $request->post("vga_code"),
            "package_buy" => $request->post("package_buy")
        ]);
        if ($data_create)
        {
            return response()->json([
                'status'=> 'Success',
                'message' => 'Đăng kí thành công',
                'data' => $data_create
            ], 200);
        }
      else{
          return response()->json([
              'status'=>'Error',
              'message' => 'co loi xay ra',
              'data' => null
          ], 200);
      }
    }
}
