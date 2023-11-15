<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request){
        $category_info = $request->all();
        Category::create([
            "title"=>$category_info['title']
        ]);
        return redirect()->back();
    }
    
}
