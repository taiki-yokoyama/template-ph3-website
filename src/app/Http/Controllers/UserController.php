<?php

namespace App\Http\Controllers;
use App\Models\User; // ← これがないとエラー
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userAll()
    {
        $users = User::all(); // 全ユーザー取得
        return view('userAll', compact('users')); // ビューに渡す
    }
}
