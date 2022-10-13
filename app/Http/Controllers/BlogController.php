<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Post;
use Auth;

class BlogController extends Controller
{
    function edit(Request $request) {
        switch($request->input('btn')) {
            case 'save': { 
                Post::where('id', $request->id)->update(['title'=>$request->title, 'content'=>$request->text]);
                return redirect("edit/".$request->id)->withSuccess('> Saved');
                break; 
            }
            case 'remove': { 
                Post::where('id', $request->id)->delete();
                return redirect("/");
                break;
            }
        }

    }

    function new() {
        Post::create(['title'=>'Title here...', 'content'=>'Put content here...', 'user_id'=>Auth::user()->id]);
        return redirect('/');
    }
}
