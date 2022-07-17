<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Settings\CustomerRegisterInsurance;
use Illuminate\Http\Request;

class CustomerRegisterInsController extends Controller
{
    //
    public function store(Request $request)
    {
        $data_create = CustomerRegisterInsurance::query()->create([
            "name" => $request->post("name"),
            "phone" => $request->post("phone"),
            "note" => $request->post("note"),
            "vga_code" => $request->post("vga_code"),
            "package_buy" => $request->post("package_buy")
        ]);
        return response()->json($data_create,200);
    }
}
