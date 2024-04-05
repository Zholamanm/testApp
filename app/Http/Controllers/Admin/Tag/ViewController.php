<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __invoke($id)
    {
        $tag = Tag::where('id', $id)->first();
        return view('admin.tag.view', compact('tag'));
    }
}
