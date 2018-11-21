<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //后台等页
    public function login()
    {
        return view('admin.login.index');
    }
    // 登陆信息验证
    public function login_vil(Request $request)
    {
        $credentials = $this->validate($request,[
            'admin_name'=>'required|max:50',
            'admin_pwd'=>'required'
        ]);
    }
}
