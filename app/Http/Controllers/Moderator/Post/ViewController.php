<?php

namespace App\Http\Controllers\Moderator\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __invoke($id)
    {
        $post = Post::where('id', $id)->first();
        return view('moderator.post.view', compact('post'));
    }
}
