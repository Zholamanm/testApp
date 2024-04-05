<?php

namespace App\Http\Controllers\Moderator\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke($id)
    {
        $post = Post::where('id', $id)->first();
        $tags = Tag::all();
        $categories = Category::all();
        return view('moderator.post.edit', compact('post', 'categories', 'tags'));
    }
}
