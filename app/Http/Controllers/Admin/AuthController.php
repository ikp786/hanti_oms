<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function loginView(){
        $title = 'Admin Login';
        $data = compact('title');
        return view('admin.login',$data);
    }
}
