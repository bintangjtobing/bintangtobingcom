<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SignController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function email()
    {
        $email = DB::table('messages')
            ->select('messages.*')
            ->orderBy('messages.created_at', 'DESC')
            ->get();
        $email_unread = DB::table('messages')
            ->select('messages.*')
            ->where('messages.status', '=', 'unread')
            ->orderBy('messages.created_at', 'DESC')
            ->get();
        return view('dashII.email', ['email_unread' => $email_unread, 'email' => $email]);
    }
}
