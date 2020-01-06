<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\messageDB;

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
    public function emailread(Request $request, $message_id)
    {
        $email_unread = DB::table('messages')
            ->select('messages.*')
            ->where('messages.status', '=', 'unread')
            ->orderBy('messages.created_at', 'DESC')
            ->get();

        $email = \App\messageDB::find($message_id);
        $email->status = 'readed';
        $email->save();
        return view('dashII.emailread', ['$email' => $email, 'email_unread' => $email_unread]);
    }
}
