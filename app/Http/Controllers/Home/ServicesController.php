<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    // 服务范围首页
    public function services()
    {
        return view('home.services.services',['nav'=>'2']);
    }
}
