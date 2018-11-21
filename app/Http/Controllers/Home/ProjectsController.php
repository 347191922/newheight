<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    // 客户案例
    public function projects()
    {
        return view('home.projects.projects',['nav'=>'3']);
    }
}
