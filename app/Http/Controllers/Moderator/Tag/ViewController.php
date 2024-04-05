<?php

namespace App\Http\Controllers\Moderator\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __invoke($id)
    {
        $tag = Tag::where('id', $id)->first();
        return view('moderator.tag.view', compact('tag'));
    }
}
