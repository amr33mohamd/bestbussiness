<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;

class UserController extends Controller
{
    public function adduser(Request $request){
      $validatedDat = $request->validate([

          'name' => 'required|max:255',
          'email' => 'required|unique:users',
          'phone'=>'required|min:6|unique:users']
      );
      $create = User::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'company'=>$request->company,
          'phone'=>$request->phone,
          'type'=>'0',
          'password'=>'123456',
      ]);
      if($request->lang == 'ar'){
        return Redirect('ar/return/1');
      }
      else {
        return Redirect('/return/1');
      }
    }
    public function contact(Request $request){

      $create = Contact::create([
          'email'=>$request->email,
          'messgae'=>$request->message,
          'name'=>'a'
      ]);
      return Redirect('/return/1');
    }
    public function adddesigner(Request $request){
      // $validatedDat = $request->validate([
      //
      //     'name' => 'required|max:255',
      //     'email' => 'required|unique:users',
      //     'phone'=>'required|min:6|unique:users']
      // );
      $file = $request->file('file');
      $filename = time() . '.' . $request->file('file')->extension();
      $filePath = public_path() . '/files';
      $file->move($filePath, $filename);


      $create = User::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'phone'=>$request->phone,
          'company'=>$request->company,
          'password'=>'123456',
          'file'=>'/files/'.$filename
      ]);

      if($request->lang == 'ar'){
        return Redirect('ar/return/1');
      }
      else {
        return Redirect('/return/1');
      }
        }
}
