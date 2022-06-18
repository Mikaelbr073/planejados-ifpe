@extends('layouts.app')

@section('title', 'Cadastro')
@section('content')
<div class="container">
    <h1 class="mt-5">Novo Cliente</h1>
    <hr>
    <form action="{{route('cliente-store')}}" method="POST">
      @csrf
        <div class="form-grup">
            <div class="form-group">
              <label for="nome">Nome: </label>
              <input class="form-control"type="text" name="nome" placeholder="Digite seu nome.." required>
            </div>

            <div class="form-group">
              <label for="telefone">Telefone: </label>
              <input class="form-control"type="text" name="telefone" placeholder="(00) 0.0000-0000" 
              aria-label="cpf" onkeypress="$(this).mask('(00) 0.0000-0000');"  required>
            </div>

            <div class="form-group">
              <label for="email">E-mail: </label>
              <input class="form-control"type="email" name="email" placeholder="Digite seu E-mail.." required>
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input class="form-control"type="text" name="cpf" placeholder="000.000.000-00" 
                aria-label="cpf" onkeypress="$(this).mask('000.000.000-00');" required>
            </div>
              <br>  
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Enviar</button>
            </div>
        </div>
    </form>
</div>
@endsection