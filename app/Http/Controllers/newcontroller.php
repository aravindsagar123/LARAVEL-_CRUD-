<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class newcontroller extends Controller
{
  public function createregister(request $request)
  {
    $request->validate([
      'name'=>'required',
      'email'=>'required',
      'phone_no'=>'required|max:10',

    ]);
    $name=$request->name;
    $email=$request->email;
    $phone_no=$request->phone_no;
    Admin::create([
    'name'=>$name,
    'email'=>$email,
    'phone_no'=>$phone_no,

    ]);
    return redirect()->route('form')->with('success','registered');
  }
  public function form()
    {
        return view('form');
    }
   public function view()
   {
    $data=Admin::all();
    return view('view',compact('data'));
   }
   public function edit($id)
   {
      $edit=Admin::find($id);
      return view('edit',compact('edit'));
   }
   public function update($id,Request $request)
   {
      $up=Admin::find($id);
      $request->validate([
        'email'=>'email',
        'phone_no'=>'max:10',
      ]);
    $up=Admin::find($id);
    $up->name=$request->input('name');
    $up->email=$request->input('email');
    $up->phone_no=$request->input('phone_no');
    $up->update();
    return redirect()->route('view')->with('success','updated successfully');
   }
   public function delete($id)
   {
     Admin::find($id)->delete();
     return redirect()->route('view')->with('success','deleted successfully');
   }
}
