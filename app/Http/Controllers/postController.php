<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class postController extends Controller
{
    // Create a new post
    public function createPost(Request $request)
    {
        $rules = [
            'title' => 'required',
            'content' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->created_at = now(); 
        $post->save();

        return response()->json($post, 201);
    }
}
