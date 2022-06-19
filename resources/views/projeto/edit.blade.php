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
            <select class="form-control" name="cliente_id">
                <option value="{{  $projeto->cliente_id }}">{{$projeto->cliente->nome}}</option>
            </select>
          </div>
            <div class="form-group">
              <label>Data Inicial do Projeto: </label>
              <input class="form-control"type="text" name="DataInicialDoProjeto" placeholder="00/00/0000" 
              aria-label="DataInicialDoProjet" onkeypress="$(this).mask('00/00/0000');" required value="{{ $projeto->DataInicialDoProjeto}}">
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
                <select class="form-control" name="uf" required>
                <?php $estadosBrasileiros = array(
                'AC'=>'Acre',
                'AL'=>'Alagoas',
                'AP'=>'Amapá',
                'AM'=>'Amazonas',
                'BA'=>'Bahia',
                'CE'=>'Ceará',
                'DF'=>'Distrito Federal',
                'ES'=>'Espírito Santo',
                'GO'=>'Goiás',
                'MA'=>'Maranhão',
                'MT'=>'Mato Grosso',
                'MS'=>'Mato Grosso do Sul',
                'MG'=>'Minas Gerais',
                'PA'=>'Pará',
                'PB'=>'Paraíba',
                'PR'=>'Paraná',
                'PE'=>'Pernambuco',
                'PI'=>'Piauí',
                'RJ'=>'Rio de Janeiro',
                'RN'=>'Rio Grande do Norte',
                'RS'=>'Rio Grande do Sul',
                'RO'=>'Rondônia',
                'RR'=>'Roraima',
                'SC'=>'Santa Catarina',
                'SP'=>'São Paulo',
                'SE'=>'Sergipe',
                'TO'=>'Tocantins'
                );
                ?>
                @foreach($estadosBrasileiros as $uf): ?>
                  <option <?= $projeto->uf == 'Pará' ?? 'selected'?> >
                      <?= $uf ?>
                  </option>
                @endforeach
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