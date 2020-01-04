<?php

namespace App\Http\Controllers;

// use App\User;

class UsersControllers extends Controller
{
    //
    public function index()
    {
        // $users = User::all();
        // return view('users.index', compact('users'));
        // Mengambil data dari table users
        // $users = DB::tabel('users')->get();
        // mengirim data pegawai ke view index
        return view('user');
    }

    // public function create()
    // {
    //     return view('users.create');
    // }

    // public function edit($id)
    // {
    //     $users = User::findOrFail($id);
    //     return view('users.edit', compact('users'));
    // }

    // public function store(Request $request)
    // {
    //     User::create($request->all());
    //     \Session::flash('notifikasi', 'users berhasil ditambah.');
    //     return redirect('users');
    // }

    // public function update(Request $request, $id)
    // {
    //     $users = User::findOrFail($id);
    //     $users->update($request->all());
    //     \Session::flash('notifikasi', 'users berhasil diubah.');
    //     return redirect('users');
    // }

    // public function destroy($id)
    // {
    //     User::destroy($id);
    //     \Session::flash('notifikasi', 'users berhasil dihapus.');
    //     return redirect('users');
    // }

}
