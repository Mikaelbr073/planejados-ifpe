<?php

namespace App\Http\Controllers;

use App\Models\cliente;
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







}
