<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'banner_url' => 'required|url',
            'participants_count' => 'required|integer',
        ]);

        $course = Course::create($validatet);
        return response()->json($course, 201);
    }

    public function index()
    {
        return Course::all();
    }
}