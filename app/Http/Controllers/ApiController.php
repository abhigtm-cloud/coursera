<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //making of the post,get and other methods
        public function getcser(Request $request){
        // Get the first user from the database
        
        $user = Course::first();
             
        return view("user", ["user"=> $user]);
    }
}
