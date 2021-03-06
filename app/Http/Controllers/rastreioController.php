<?php

namespace App\Http\Controllers;

use App\Models\projeto;
use Illuminate\Http\Request;

class rastreioController extends Controller
{
   
    public function index(){
        return view('rastreio.index');
    }



    public function buscar(Request $request){

        $codigo = $request->get('codigo');
        $status = projeto::where('id', $codigo)->first();
        if($status != null){
            return view('rastreio.exibe',['status'=>$status]); 
        }else{
            return redirect()->route('rastreio-index');
        }
    }





}
