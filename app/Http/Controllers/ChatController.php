<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index() {
        return view('chat');    /* 基本機能作成用のビュー */
    }
}
