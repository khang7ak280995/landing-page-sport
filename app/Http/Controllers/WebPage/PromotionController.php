<?php

namespace App\Http\Controllers\WebPage;

use App\Http\Controllers\Controller;
use App\Models\Settings\PromotionModel;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    //
    public function index()
    {
        $promotions =  PromotionModel::query()->paginate(10);
        return view('frontend.pages.promotion.list-promotion',compact('promotions'));
    }
    public function view($slug = null)
    {
        $promotions =  PromotionModel::query()->where('status','=',1)->orderBy('created_at','DESC')->take(5)->get();
        $listInsurancePackage = PromotionModel::getList(['*'], [], ['column' => 'status', 'value' => 1]);
        if ($slug != null) {
            $promotion = PromotionModel::getFirstByWhere('slug', '=', $slug);
            return view('frontend.pages.promotion.detail-promotion',compact('promotion','promotions'));
        } else {
            return view('frontend.pages.promotion.detail-promotion', compact('listInsurancePackage'));
        }
    }
}
