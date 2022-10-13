<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Wrong login data');
    }

    public function register(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dash")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'type' => '0'
      ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return redirect('/');
    }

    public function grant(Request $request) {
        $data=explode(":",$request->input('grant'));
        switch($data[0]) {
            case 'GM': {
                User::where('id', $data[1])->update(['type'=>'1']);
                break;
            }
            case 'RM': { 
                User::where('id', $data[1])->update(['type'=>'0']);
                break;
            }
        }
    return redirect("permissions")->withSuccess('Success');
    }
}
