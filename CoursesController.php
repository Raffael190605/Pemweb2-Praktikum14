<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(){
        return view('admin.contents.courses.index');
    }
}
