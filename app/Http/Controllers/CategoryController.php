<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.create.category');
    }

    public function store(CategoryRequest $request){
        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('admin.category.create')->with('success', '情報が投稿されました！');
    }
}
