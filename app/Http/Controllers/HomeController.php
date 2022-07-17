<?php

namespace App\Http\Controllers;

use App\Models\Cms\FAQ;
use App\Models\Cms\ImpressiveNumber;
use App\Models\Cms\InsurancePackage;
use App\Models\Cms\ListGolferWinHIO;
use App\Models\Settings\ConfigModel;
use App\Models\Settings\PromotionModel;
use App\Models\Settings\SlideHomeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        $promotions = PromotionModel::query()->where('status','=',1)->where('is_especially','=',1)->orderBy('created_at','DESC')->take(3)->get();
        $endows = ConfigModel::query()->where('type','=','become_agent')->take(5)->get();
        $faqs = FAQ::query()->where('is_show','=',1)->take(5)->orderBy('created_at','DESC')->get();
        $slideImage = SlideHomeModel::getList(['*'], [], ['column' => 'is_show', 'value' => 1]);
        $insurancePackage = InsurancePackage::getList(['*'], [], [['column' => 'is_show_home_page', 'value' => 1], ['column' => 'is_show', 'value' => 1]]);
        $impressiveNumber = ImpressiveNumber::query()->take(3)->latest()->get();
        $golferHios = ListGolferWinHIO::query()->take(9)->latest()->get();
        return view('frontend.pages.home', compact('slideImage', 'insurancePackage', 'impressiveNumber','promotions','endows','faqs','golferHios'));
    }

    public function insurancePackageDetail($slug = null)
    {
        $listInsurancePackage = InsurancePackage::getList(['*'], [], ['column' => 'is_show', 'value' => 1]);
        if ($slug != null) {
            $insurancePackage = InsurancePackage::getFirstByWhere('slug', '=', $slug);
            return view('frontend.pages.product', compact('insurancePackage', 'listInsurancePackage'));
        } else {
            return view('frontend.pages.product', compact('listInsurancePackage'));
        }
    }

    public function listGolferWinHIO()
    {
        $listGolfer = ListGolferWinHIO::getList(['*'], [], ['column' => 'is_show', 'value' => 1], '', ['column' => 'created_at', 'type' => 'desc'], 9);
        return view('frontend.pages.hio.list-hio', compact('listGolfer'));
    }

    public function golferWinHIODetail($image)
    {
        $golfer = ListGolferWinHIO::getFirstByWhere('slug', '=', $image);
        if ($golfer == null){
            return back()->with('errors', 'Not Found!');
        }
        $golferRelate = ListGolferWinHIO::query()->take(4)->latest()->get();
        return view('frontend.pages.hio.detail-hio', compact('golfer', 'golferRelate'));
    }
}
