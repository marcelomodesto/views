<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{

public $cursos;

  public function index()
    {
          $this->cursos = array(
            'Lógica de programação', 'Desenvolvimento Web com PHP',
            'Algoritmos e estrutura de dados', 'Test Driven Development'
          );


  /*    $cursos = array(
        'Lógica de programação', 'Desenvolvimento Web com PHP',
        'Algoritmos e estrutura de dados', 'Test Driven Development'
      );
*/
      $cursos = $this->cursos;
      return view('cursos.index', compact('cursos'));

    }


    public function show($index) {
/*
      $cursos = array(
        'Lógica de programação', 'Desenvolvimento Web com PHP',
        'Algoritmos e estrutura de dados', 'Test Driven Development'
      );
*/
      $cursos = $this->cursos;
    //  $curso = $this->cursos[$index];
      $curso = $cursos[$index];
      return view('cursos.show', compact('curso'));
    }
}
