<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * ユーザーをログアウトする
     *
     * @return \Illuminate\Http\Response
     */   
    public function store() {
        auth()->logout();

        return redirect()->route('home')->with('message', 'ログアウトしました');
    }
}
