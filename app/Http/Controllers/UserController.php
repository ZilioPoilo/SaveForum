<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function logout()
    {
        session()->forget('login');
        return view('user.login');
    }

    public function registrate(Request $request)
    {
        $user = new User;
        $request->validate([
            'nickname' => 'required|min:4|max:30',
            'login' => 'required|min:6|max:20',
            'password' => 'required|min:6|max:20'
        ]);

        $user->login = $request->login;
        $user->password = $request->password;
        $user->nickname = $request->nickname;
        $user->save();
        session(['login' => $request->login]);
        return view('user.posts');
    }

    public function loginpost(Request $request)
    {
        $users = User::all();
        foreach($users as $user)
        {
            if($user->login == $request->login)
            {
                if($user->password == $request->password)
                {
                    session(['login' => $request->login]);
                    return view('user.posts');
                }
            }
        }
        session()->flash('error', 'Invalid login');
        return redirect()->back();
    }

    public function showsomeprofile($id)
    {
        $user = User::where('id', $id)->firstOrFail();
        return view('user.someprofile', ['user' => $user]);
    }

    public function editlogin(Request $request)
    {
        User::where('login', session('login'))->update(['login' => $request->login]);
        session(['login' => $request->login]);
        return view('user.edit');
    }
    public function editnickname(Request $request)
    {
        User::where('login', session('login'))->update(['nickname' => $request->nickname]);
        return view('user.edit');
    }
    public function editpassword(Request $request)
    {
        User::where('login', session('login'))->update(['password' => $request->password]);
        return view('user.edit');
    }

}
