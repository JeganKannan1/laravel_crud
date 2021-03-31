<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(Users $user)
    {
       $this->users = $user;
    }

    /*
    route-add
    *@return {form}
    *
    */
    public function add(){
        return view('form');
    }
    /*
    route-add
    * @param {request} post values from add form
    *@return {form} 
    */
    public function submit(Request $request){
       
        $user = $this->users->create($request->all());
        $getCustomers = $this->users->get();
        return view('form',compact('getCustomers'));
    }
    /*
    route-list
    * @param {} list values from database
    *@return {form}
    */
    public function list()
    {
        $getCustomers = $this->users->get();
        return view('form',compact('getCustomers'));
    }
    /*
    * @param {id} users edits records
    *@return {update}
    */
    public function edit($id)
    {
        $getCustomers = $this->users->where('id',$id)->first();

        return view('update',compact('getCustomers'));
    }
      /*
    * @param {request} updates user records in database
    *@return {form}
    */
    public function update(Request $request){
       
        $this->users->where('id',$request->id)->update($request->except(['_token']));
        return redirect('/list')->with('success','Customer Updated Successfully');
    }
      /*
    * @param {id} delete user records in database
    *@return {form}
    */
    public function delete($id)
    {
        $this->users->where('id',$id)->delete();
        return redirect('/list');

     }
}
    

 ?> 