<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function category(){
        $data['categories'] = Category::all();
        return view('admin.category',$data);
    }
    public function storeCategory(Request $request){
        $request->validate([
            'cat_title' => 'required',
            'cat_description' => 'required',
        ]);

        $slug = Str::slug($request->cat_title, '-');

        $category = new Category;
        $category->cat_title = $request->cat_title;
        $category->cat_description = $request->cat_description;
        $category->slug = $slug;
        $category->save();

        return redirect()->back();
    }
}
