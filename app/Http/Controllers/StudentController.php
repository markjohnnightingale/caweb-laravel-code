<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {

        return view('students', [
            'students'  => Student::all()
        ]);
    }
}
