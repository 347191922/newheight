<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    // 公司资讯
    public function icons()
    {
        return view('home.information.icons',['nav'=>'4']);
    }
    // 行业资讯
    public function typography()
    {
        return view('home.information.typography',['nav'=>'4']);
    }
}
