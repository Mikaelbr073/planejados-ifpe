@extends('layouts.app')

@section('title', 'Cadastro projeto')
@section('content')
<div class="container">
    <h1 class="mt-5">Novo Projeto</h1>
    <hr>
    <form action="{{route('projeto-store')}}" method="POST">
      @csrf
        <div class="form-grup">
            <div>
              <h6>Nome do Cliente: </h6>
            </div>
            <div class="form-group">
              <select name="cliente_id">
                <option>--Selecione o cliente--</option>
                @foreach($clientes as $cliente)
                  <option>{{ $cliente->nome }}</option>
                @endforeach
              </select>
            </div>
            
            <div class="form-group">
              <label for="telefone">Data Inicial do Projeto: </label>
              <input class="form-control"type="text" name="DataInicialDoProjeto" placeholder="Digite uma data.." required>
            </div>

            <div class="form-group">
              <label for="email">Data de Entrega: </label>
              <input class="form-control"type="text" name="DataDeEntrega" placeholder="Digite seu E-mail.." required>
            </div>

            <div class="form-group">
                <label for="cpf">Status de Produção:</label>
                <input class="form-control"type="text" name="statusDeProdução" placeholder="Digite seu cpf.."required>
            </div>
            <div class="form-group">
                <label for="cpf">Cidade:</label>
                <input class="form-control"type="text" name="cidade" placeholder="Digite seu cpf.."required>
            </div>
            <div class="form-group">
                <label for="cpf">Rua:</label>
                <input class="form-control"type="text" name="rua" placeholder="Digite seu cpf.."required>
            </div>
            <div class="form-group">
                <label for="cpf">Numero:</label>
                <input class="form-control"type="text" name="numero" placeholder="Digite seu cpf.."required>
            </div>
            <div class="form-group">
                <label for="cpf">Estado:</label>
                <input class="form-control"type="text" name="uf" placeholder="Digite seu cpf.."required>
            </div>
              <br>  
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Enviar</button>
            </div>
        </div>
    </form>
</div>
@endsection