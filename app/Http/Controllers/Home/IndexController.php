<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //前台首页
    public function index()
    {
        return view('home.index.index',['nav'=> '1']);
    }
}
