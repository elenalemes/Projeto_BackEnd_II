<?php

 namespace App\Http\Controllers\WEB;

use App\Models\User;
 use Illuminate\Http\Request;

 class UserController extends Controller
 {
     public function index(){
         $usersList = User::all();
         return view('users.index', ['listUsers' => $usersList]);
     }

     public function show($id){
        dd(User::find($id));

        return view('users.showUsers',[
            'user'=>User::find($id)
        ]);
    }
 }
