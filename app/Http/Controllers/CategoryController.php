<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.categories.create');
    }

    public function createCategory(Request $request){
        $category = $request->validate([
            'name_genre' => 'required'
        ]);

        Category::create($category);    

        return redirect('categories');
    }
}
