<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class AuthorPost extends Controller
{
    public function index($author_id)
    {

        $posts = Post::where('author_id', $author_id)
            ->with(['user', 'category']) // relasi yang dibutuhkan
            ->get();
        // dd($posts->first()->user); // Use 'user' if 'author' relationship does not exist
        return view('posts.authorPost', compact('posts'));
    }
}
