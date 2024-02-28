<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class LoginController extends Controller
{
    public function login(Request $request){

        $password = $request->input("password");
        // ユーザー名を画面上に表示する形式に書き換えよう

        return view("index", [
            'password' =>   $password
        ]);
    }
}
