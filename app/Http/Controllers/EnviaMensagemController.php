<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnviaMensagemController extends Controller
{
  public function contato()
  {
    return view('contato');
  }

  public function enviarMensagem(Request $request)
  {
    //return back()->with('status', 'Mensagem Enviada com Sucesso');
    return back()->withErrors('Mensagem não enviada, por favor envie um email para canova@ufpr.br!');
  }

}
