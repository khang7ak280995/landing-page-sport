<?php

namespace App\Http\Controllers\WebPage;

use App\Http\Controllers\Controller;
use App\Models\Cms\FAQ;
use App\Models\Settings\ConfigModel;
use App\Models\Settings\PromotionModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $promotions = PromotionModel::query()->where('status','=',1)->where('is_especially','=',1)->orderBy('created_at','DESC')->take(3)->get();
        $endows = ConfigModel::query()->where('type','=','become_agent')->take(5)->get();
        $faqs = FAQ::query()->where('is_show','=',1)->take(5)->orderBy('created_at','DESC')->get();
        return view('frontend.pages.home',compact('endows','promotions','faqs'));
    }
}
