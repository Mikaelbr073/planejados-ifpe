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
        projeto::create($request->all());
        return redirect()->route('projeto-index');
    }

    public function delete($id){
        projeto::where('id',$id)->delete();
        return redirect()->route('projeto-index');
    }

    public function edit($id){

        $projeto = projeto::where('id', $id)->first();

        if(!empty($projeto)){
            return view('projeto.edit', ['projeto'=>$projeto]);

        }else{
            return redirect()->route('projeto-index');
        }
        


    }
    public function update(Request $request, $id){
        $data = [
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'cpf' => $request->cpf,
        ];

        projeto::where('id',$id)->update($data);
        return redirect()->route('projeto-index');


    }

}
