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
}
