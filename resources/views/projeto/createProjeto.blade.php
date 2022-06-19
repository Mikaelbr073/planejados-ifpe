@extends('layouts.app')

@section('title', 'Cadastro projeto')
@section('content')
<div class="container">
    <h1 class="mt-5">Novo Projeto</h1>
    <hr>
    <form action="{{route('projeto-store')}}" method="POST">
      @csrf
        <div class="form-grup">

            <div class="form-group">
              <label for="cliente">Selecione o cliente: </label>
                <select class="form-control" name="cliente_id">
                <option>--Selecione o cliente--</option>
                  @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                  @endforeach
                </select>
            </div>
                
            <div class="form-group">
              <label for="telefone">Data Inicial do Projeto: </label>
              <input class="form-control" type="text" name="DataInicialDoProjeto" placeholder="00/00/0000" 
              aria-label="DataInicialDoProjeto" onkeypress="$(this).mask('00/00/0000');"required>
            </div>

            <div class="form-group">
              <label for="email">Data de Entrega: </label>
              <input class="form-control" type="text" name="DataDeEntrega" placeholder="00/00/0000" 
              aria-label="DataDeEntregao" onkeypress="$(this).mask('00/00/0000');"required>
            </div>

            <div class="form-group">
              <label for="statusProducao">Status de produção: </label>
              <select class="form-control" readonly name="statusDeProdução">
                <option value="1">Pedido Feito</option>
              </select>
            </div>
            <div class="form-group">
                <label for="cpf">Cidade:</label>
                <input class="form-control"type="text" name="cidade" placeholder="Nome da cidade.."required>
            </div>
            <div class="form-group">
                <label for="cpf">Rua:</label>
                <input class="form-control"type="text" name="rua" placeholder="Nome da rua.."required>
            </div>
            <div class="form-group">
                <label for="cpf">Numero:</label>
                <input class="form-control"type="num" name="numero" placeholder="Número da casa.."required>
            </div>
            <div class="form-group">
            <label for="statusProducao">Estado: </label>
                <select class="form-control" name="uf" required>
                    <option>--Selecione o Estado--</option>
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
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Enviar</button>
            </div>
        </div>
    </form>
</div>
@endsection