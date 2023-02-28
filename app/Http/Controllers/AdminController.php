<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;

class AdminController extends Controller
{
    public function dashboard(){
        $book = Book::get();
        $user = User::get();
        $category = Category::get();
        return view('admin.dashboard', compact('book', 'user', 'category'));
    }
    public function books(){
        $book = Book::get();
        return view('admin.books.books', compact('book'));
    }
    public function categories(){
        $category = Category::get();
        return view('admin.categories.categories', compact('category'));
    }

    public function deleteCategory(Request  $request, $id)
    {
        Category::where('id', $id)->delete();
        return redirect(route('categories'));
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
