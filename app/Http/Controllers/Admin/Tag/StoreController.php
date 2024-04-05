<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
        ]);

        $tag = new Tag;

        $tag->title = $data['title'];
        $tag->save();

        return redirect()->route('admin.tag.index');
    }
}
