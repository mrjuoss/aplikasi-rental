<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($title)
    {
        $posts = [
            'my-first-post' => 'Hello, this is my first blog post',
            'my-second-post' => 'Now I am getting the hang of thus blogging thing'
        ];
        if (! array_key_exists($title, $posts))
        {
            abort(404, 'Sorry, that post was not found');
        }
        return view ('post', [
           'post' => $posts[$title] /** OR add Ternry -> ?? 'Nothing here yet' */
        ]);
    }
}
