<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{   
    public function listado(){
        $alumnos = Alumno::all();
        return view('alumno.listado', compact('alumnos')); 
    }
}
