<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Traits\HasAjaxRequest;
use Illuminate\Http\Request;
use Illuminate\Http\ResponseTrait;

class HomeController extends Controller
{
    use HasAjaxRequest, ResponseTrait;

    public function index()
    {
        return view('admin/layout/default');
    }
}
