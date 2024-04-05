<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke($id)
    {
        $category = Category::where('id', $id)->first();
        if ($category) {
            $category->delete();
        }
        return redirect()->route('admin.category.index');
    }
}
