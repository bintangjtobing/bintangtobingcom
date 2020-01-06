<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function postemail(Request $request)
    {
        $message = new \App\messageDB;
        $message->nama = $request->name;
        $message->subject = $request->subject;
        $message->status = 'unread';
        $message->email = $request->email;
        $message->pesan = $request->pesan;
        $message->save();
        return back()->with('sukses', 'sukses');
    }
}
