<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{



  public $cursos = [
   'Lógica de programação',
   'Desenvolvimento Web com PHP',
   'Algoritmos e estrutura de dados',
   'Test Driven Development'
  ];



  public function index()
    {
      $cursos = $this->cursos;
      return view('cursos.index', compact('cursos'));
    }

    public function show($index) {
      $cursos = $this->cursos;
      $curso = $cursos[$index];
      return view('cursos.show', compact('curso'));
    }
}
