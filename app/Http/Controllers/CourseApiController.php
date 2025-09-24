<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $CourseValidate = $request->validate([
            "name"=> "required|string|max:255",
        ]);
        $Course = new Course(); 
        $Course->name = $CourseValidate["name"];
        $Course->save();
        return response()->json(["message"=>"Course Created successfuly","Caourse Name"=>$Course->name],201);
    }
    public function getcser(Request $request)
    {
        // Get the first user from the database

        $user = Course::first();

        return view("user", ["user" => $user]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
