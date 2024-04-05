<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string'
        ]);

        $category = Category::where('id', $id)->first();
        $category->title = $data['title'];
        $category->update();

        return redirect()->route('admin.category.index');
    }
}
