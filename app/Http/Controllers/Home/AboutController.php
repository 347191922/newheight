<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //关于我们
    public function contact()
    {
        return view('home.contact.contact',['nav'=>'5']);
    }
}
