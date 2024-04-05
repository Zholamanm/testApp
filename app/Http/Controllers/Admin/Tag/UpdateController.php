<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string'
        ]);

        $tag = Tag::where('id', $id)->first();
        $tag->title = $data['title'];
        $tag->update();

        return redirect()->route('admin.tag.index');
    }
}
