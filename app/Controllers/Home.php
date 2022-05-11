<?php

namespace App\Controllers;


class Home extends BaseController
{
  public function Principal()
  {
    return view('app');
  }

  public function Estoque()
  {

    return view('estoque');
  }
  public function Financeiro()
  {

    return view('financeiro');
  }
  public function Caixa()
  {

    return view('caixa');
  }
  public function AdicionarProdutos()
  {

    return view('AdicionarProdutos');
  }
}
