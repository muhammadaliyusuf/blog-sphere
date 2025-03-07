<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use PharIo\Manifest\Author;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts $title",
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString() // baca: cari data di dalam model Post lalu urutkan berdasarkan yg paling baru kemudian lakukan query berdasarkan data search, category, dan author yg kemudian dikirim ke method scopeFilter yg berada pada model Post  
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
