<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'nullable|array',
            'preview_image' => 'nullable|image|max:2048',
            'status' => 'nullable'
        ]);

        if ($request->hasFile('preview_image')) {
            $imagePath = $request->file('preview_image')->store('/posts');
            $post->preview_image = $imagePath;
        }

        $post->title = $data['title'];
        $post->description = $data['description'];
        $post->category_id = $data['category_id'];
        if (isset($request->status)) {
            $post->status = $data['status'];
        } else {
            $post->status = 'off';
        }
        $post->save();

        if (!empty($data['tags'])) {
            $post->tags()->sync($data['tags']);
        }

        return redirect()->route('admin.post.index');
    }
}
