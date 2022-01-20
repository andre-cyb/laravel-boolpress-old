<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Post;


class HomeController extends Controller
{
    function index(){
        $user = User::all();
        $posts = Post::all();
        return view("admin.home", [
            'user'=>$user,
            'posts'=>$posts
        ]);
    }
}
