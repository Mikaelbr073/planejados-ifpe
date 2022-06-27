<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\projeto;
use Illuminate\Http\Request;

class clientesController extends Controller
{
    public function index(){

        $clientes = cliente::all();
        //dd($clientes);
        return view('cliente.index', ['clientes'=>$clientes]);   
    }

    public function create(){
        return view('cliente.create');  
    }

    public function store(Request $request){

        cliente::create($request->all());
        return redirect()->route('cliente-index');
      

    }

    public function edit($id){

        $cliente = cliente::where('id', $id)->first();

        if(!empty($cliente)){
            return view('cliente.edit', ['cliente'=>$cliente]);

        }else{
            return redirect()->route('cliente-index');
        }
        


    }


    public function update(Request $request, $id){
        $data = [
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'cpf' => $request->cpf,
        ];

        cliente::where('id',$id)->update($data);
        return redirect()->route('cliente-index');


    }

    public function delete($id){
        $verificacao = projeto::where('cliente_id', $id)->count();
        if($verificacao == 0){
            cliente::where('id',$id)->delete();
        }
        return redirect()->route('cliente-index');
    }







}
