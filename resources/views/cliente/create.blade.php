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
              <input class="form-control"type="text" name="telefone" placeholder="Digite seu telefone.." required>
            </div>

            <div class="form-group">
              <label for="email">E-mail: </label>
              <input class="form-control"type="text" name="email" placeholder="Digite seu E-mail.." required>
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input class="form-control"type="text" name="cpf" placeholder="Digite seu cpf.."required>
            </div>
              <br>  
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Enviar</button>
            </div>
        </div>
    </form>
</div>
@endsection