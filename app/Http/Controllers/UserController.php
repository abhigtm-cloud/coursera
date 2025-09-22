<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getuser(Request $request){
        // Get the first user from the database
        
        $user = User::first();
             
        return view("user", ["user"=> $user]);
    }
}
