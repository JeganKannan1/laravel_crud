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
       
        $user = $this->users->create($request->all());
        $getCustomers = $this->users->get();
        return view('form',compact('getCustomers'));
    }
    public function list()
    {
        $getCustomers = $this->users->get();
        return view('form',compact('getCustomers'));
    }
    public function edit($id)
    {
        $getCustomers = $this->users->where('id',$id)->first();

        return view('update',compact('getCustomers'));
    }
    public function update(Request $request){
       
        $this->users->where('id',$request->id)->update($request->except(['_token']));
        return redirect('/list')->with('success','Customer Updated Successfully');
    }
    public function delete($id)
    {
        $this->users->where('id',$id)->delete();
        return redirect('/list');

     }
}
    

 ?> 