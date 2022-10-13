<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PagesController extends Controller
{
    function listAllPosts() {
        $data = Post::all();
        return view('list_posts',compact('data'));
    }
    function showPost($id) {
        $data = Post::find($id);
        return view('post',compact('data'));
    }
    function showEditPost($id) {
        $data = Post::find($id);
        return view('edit',compact('data'));
    }
    function listAllUsers() {
        $data = User::all();
        return view('permissions',compact('data'));
    }
}
