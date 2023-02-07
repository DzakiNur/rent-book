<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard(){
        $data = User::get();
        return view('admin.dashboard', compact('data'));
    }
    public function books(){
        return view('admin.books');
    }
    public function categories(){
        return view('admin.categories');
    }
    public function rentLogs(){
        return view('admin.rent-logs');
    }
    public function users(){
        $user = User::get();
        return view('admin.users', compact('user'));
    }

    public function deleteUser(Request  $request, $id)
    {
        User::where('id', $id)->delete();
        return redirect(route('users'));
    }

    public function editUser($id){
        $user = User::where('id', $id)->first();
        return view('admin.edit-user', compact('user'));
    }
    public function updateUser(Request $request, $id){
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $user = User::where('id', $id)->first();

        $user->update([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect(route('users'))->with('edit', 'Berhasil edit data user');
    }
}
