<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Student;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function show($class_id)
    {
        $classe = Classe::find($class_id);
        return view('classe', [
            'classe'    => $classe,
            'students'  => $classe->students,
        ]);
    }
}
