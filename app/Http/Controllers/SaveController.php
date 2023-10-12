<?php

namespace App\Http\Controllers;
use App\Models\Save;
use App\Models\User;
use Illuminate\Http\Request;

class SaveController extends Controller
{
    public function add(){
        return view('save.add');
    }

    public function addpost(Request $request)
    {
        $userlogin =  session('login');
        $user = User::where('login', $userlogin)->firstOrFail();
        $fileName = $request->file('savefile')->getClientOriginalName();
        $request->file('savefile')->move(public_path().'/saves',$fileName);
        $save = new Save;
        $save->userid = $user->id;
        $save->gametitle = $request->game;
        $save->descrition = $request->description;
        $save->filepath = $fileName;
        $save->save();
        return redirect('/');
    }
}
