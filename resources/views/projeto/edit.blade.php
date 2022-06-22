@extends('layouts.app')

@section('title', 'Cadastro projeto')
@section('content')
<div class="container">
    <h1 class="mt-5">Novo Projeto</h1>
    <hr>
    <form action="{{route('projeto-update', ['id'=> $projeto->id]) }}" method="POST">
      @csrf
        @method('PUT')
          <div class="form-group">
            <label for="cliente_id">Selecione o cliente: </label>
            <select class="form-control" name="cliente_id" readonly>
                <option value="{{  $projeto->cliente_id }}">{{$projeto->cliente->nome}}</option>
            </select>
          </div>
            <div class="form-group">
              <label>Data Inicial do Projeto: </label>
              <input class="form-control"type="text" name="DataInicialDoProjeto" placeholder="00/00/0000" 
              aria-label="DataInicialDoProjet" onkeypress="$(this).mask('00/00/0000');"  readonly required value="{{ $projeto->DataInicialDoProjeto}}">
            </div>

            <div class="form-group">
              <label>Data de Entrega: </label>
              <input class="form-control"type="text" name="DataDeEntrega" placeholder="00/00/0000" 
              aria-label="DataDeEntregao" onkeypress="$(this).mask('00/00/0000');" required value="{{ $projeto->DataDeEntrega}}">
            </div>

            <div class="form-group">
              <label for="statusProducao">Status de produção: </label>
              <select class="form-control" value="{{ $projeto->statusDeProdução }}" name="statusDeProdução">
                  <option value="2">Em Produção</option>
                  <option value="3">A Caminho</option>
                  <option value="4">Entregue</option>
                  <option value="1">Pedido Feito</option>
              </select>
            </div>

            <div class="form-group">
                <label>Cidade:</label>
                <input class="form-control"type="text" name="cidade" placeholder="Digite a cidade.."required value="{{ $projeto->cidade }}">
            </div>
            <div class="form-group">
                <label>Rua:</label>
                <input class="form-control"type="text" name="rua" placeholder="Digite a rua." required value="{{ $projeto->rua }}">
            </div>
            <div class="form-group">
                <label>Numero:</label>
                <input class="form-control"type="text" name="numero" placeholder="Digite o número da casa.."required value="{{ $projeto->numero }}">
            </div>
            <div class="form-group">
                <label for="uf">Status de produção: </label>
                <select class="form-control" value="{{ $projeto->uf }}"  name="uf" required>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                </select>
            </div>
              <br>  
            <div class="form-group">
                <button type="submit" name="Salvar" class="btn btn-primary btn-lg">Enviar</button>
            </div>
        </div>
    </form>
</div>


@endsection