<?php

namespace App\Http\Controllers\WebPage;

use App\Http\Controllers\Controller;
use App\Models\Settings\ConfigModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $endows = ConfigModel::query()->where('type','=','become_agent')->take(5)->get();
        return view('frontend.pages.home',compact('endows'));
    }
}
