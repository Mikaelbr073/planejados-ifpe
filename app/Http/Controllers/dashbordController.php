<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\projeto;
use Illuminate\Http\Request;

class dashbordController extends Controller
{
    public function index(){
       
       $quantidaDeDeCliente = cliente::count('id');
       $pedidoFeito = projeto::where('statusDeProdução', 1)->count();
       $emProducao = projeto::where('statusDeProdução', 2)->count();
       $aCaminho = projeto::where('statusDeProdução', 3)->count();
       $entregue = projeto::where('statusDeProdução', 4)->count();
       $status = [$pedidoFeito, $emProducao, $aCaminho, $entregue];
       return view('dashbord.dashbord',['status'=>$status]); 
    }
}
