<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function show()
    {
        $subjects = Subject::all();
        return view('home.subjects', compact('subjects'));
    }

/*    public function index()
    {
        $subjects = Subject::all();
        return view("home.subjects", compact('subjects'));
    }*/
}