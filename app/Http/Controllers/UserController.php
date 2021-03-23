<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function __construct(Users $user)
    {
       $this->users = $user;
    }


    public function add(){
        return view('form');
    }
    public function submit(Request $request){
        // dd($request);
        $user = $this->users->create($request->all());
        dd("commming");
        
    }
}

