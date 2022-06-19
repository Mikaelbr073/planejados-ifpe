@extends('layouts.app')

@section('title', 'Editar Cliente')
@section('content')
<div class="container">
    <h1 class="mt-5">Editar cliente</h1>
    <hr>
    <form action="{{route('cliente-update', ['id'=> $cliente->id]) }}" method="POST">
      @csrf
      @method('PUT')
        <div class="form-grup">
            <div class="form-group">
              <label for="nome">Nome: </label>
              <input class="form-control"type="text" name="nome" placeholder="Digite seu nome.." value="{{ $cliente->nome}}" >
            </div>

            <div class="form-group">
              <label for="telefone">Telefone: </label>
              <input class="form-control"type="text" name="telefone" placeholder="Digite seu telefone.." value="{{ $cliente->telefone}}">
            </div>

            <div class="form-group">
              <label for="email">E-mail: </label>
              <input class="form-control"type="text" name="email" placeholder="Digite seu E-mail.." value="{{ $cliente->email}}">
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input class="form-control"type="text" name="cpf" placeholder="Digite seu cpf.." value="{{ $cliente->cpf}}">
            </div>
              <br>  
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-success btn-lg">Atulizar</button>
            </div>
        </div>
    </form>
</div>
@endsection