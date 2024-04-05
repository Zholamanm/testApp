<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __invoke($id)
    {
        $category = Category::where('id', $id)->first();
        return view('admin.category.view', compact('category'));
    }
}
