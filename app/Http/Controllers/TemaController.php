<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Tema;

class TemaController extends Controller
{
    public function formularioInserirTema(){
      if (Auth::check()){ //verifica se tem usuario logado
        return view('inserirTema');
      } else{
        $this->middleware('auth');
        return redirect('home');
      }
    }

    public function verTemas(){
      $temas = Tema::orderBy('created_at', 'desc')->get();
      return view('verTemas', ['temas' => $temas]);
    }

    public function verTemasOrderBy(Request $request, $order, $for){
      try {
        $temas = Tema::orderBy($order, $for)->get();
      } catch (\Exception $e) {
        $temas = Tema::orderBy('created_at', 'desc')->get();
      }

      return view('verTemas', ['temas' => $temas]);
    }

    public function verTemasNivel(Request $request, $nivel){
      try {
        $temas = Tema::where('nivel', $nivel)->orderBy('created_at', 'desc')->get();
      } catch (\Exception $e) {
        $temas = Tema::orderBy('created_at', 'desc')->get();
      }

      return view('verTemas', ['temas' => $temas]);
    }

    public function verTemasInstituicao(Request $request, $instituicao){
      try {
        $temas = Tema::where('instituicao', $instituicao)->orderBy('created_at', 'desc')->get();
      } catch (\Exception $e) {
        $temas = Tema::orderBy('created_at', 'desc')->get();
      }

      return view('verTemas', ['temas' => $temas]);
    }


    public function inserirTema(Request $request)
    {
        /*
        $table->increments('id');
        $table->integer('user_id');
        $table->string('titulo');
        $table->text('corpo');
        $table->string('area');
        $table->string('tempo');
        $table->string('data_inicio');
        $table->enum('interesse', ['sim','nao','outro']);
        $table->enum('nivel', ['pesquisa', 'graduacao', 'mestrado', 'doutorado', 'especializacao']);
        */
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|string|max:255|unique:temas',
            'corpo' => 'required|max:65535',
            'area' => 'required|string|max:255',
            'tempo' => 'required|string|max:255',
            'data_inicio' => 'required|string|max:255',
            'interesse' => '',
            'nivel' => '',
        ]);
        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }
        else if (Auth::check()){ //verifica se tem usuario logado
            $tema = new Tema;
            $tema->user_id = Auth::user()->id;
            $tema->titulo = $request->titulo;
            $tema->corpo = $request->corpo;
            $tema->area = $request->area;
            $tema->instituicao = $request->instituicao;
            $tema->tempo = $request->tempo;
            $tema->data_inicio = $request->data_inicio;
            $tema->interesse = $request->interesse;
            $tema->nivel = $request->nivel;
            $tema->save();

            return redirect(route('home'))->with('status', 'Tema Inserido com sucesso!');
        }
        else{
            $this->middleware('auth');
        }
    }
}
