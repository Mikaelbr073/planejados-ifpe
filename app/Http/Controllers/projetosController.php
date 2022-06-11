<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\projeto;
use Illuminate\Http\Request;

class projetosController extends Controller
{
    public function index(){

        $projeto = projeto::all();
        return view('projeto.index', ['projetos'=>$projeto]);   
    }

    public function create(){
        $clientes = cliente::all();
        return view('projeto.createProjeto',  ['clientes'=>$clientes]);  

    }
      public function store(Request $request){
        //dd($request->all());
        //projeto::create($request->all());
        //return redirect()->route('projeto-index');
      

    }
}
