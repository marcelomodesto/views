<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class ProdutosController extends Controller
{
  private $produtos = array (
    array('nome'=>'Laranja','descricao'=>'Laranja Lima','preco'=>'6.50'),
    array('nome'=>'Batata','descricao'=>'Batata lavada','preco'=>'3.90'),
    array('nome'=>'Uva','descricao'=>'Uva sem semente','preco'=>'12.00'),
  );
  public function index()
   {
     $produtos = $this->produtos;
     return view('produtos.index', compact('produtos'));
   }
  public function show($index) {
      $produto = $this->produtos[$index];
      return view('produtos.show', compact('produto'));
    }
}
