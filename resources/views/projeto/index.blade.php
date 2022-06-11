@extends('layouts.app')

@section('title', 'Projetos')
@section('content')
<div>
 <a href="{{route('projeto-create')}}" class="btn btn-success btn-lg mt-3 mr-3 mb-3 float-right">Novo projeto</a>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome do cliente</th>
      <th scope="col">Data de Inicio</th>
      <th scope="col">Data de Entrega</th>
      <th scope="col">Status de Produção</th>
      <th scope="col">Cidade</th>
      <th scope="col">Rua</th>
      <th scope="col">Número</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    @foreach($projetos as $projeto)
    <tr>
      <th>{{$projeto->id}}</th>
      <td>{{$projeto->cliente_id}}</td>
      <td>{{$projeto->DataInicialDoProjeto}}</td>
      <td>{{$projeto->DataDeEntrega}}</td>
      <td>{{$projeto->statusDeProdução}}</td>
      <td>{{$projeto->cidade}}</td>
      <td>{{$projeto->rua}}</td>
      <td>{{$projeto->numero}}</td>
      <td>{{$projeto->uf}}</td>
    @endforeach
  </tbody>
</table>

@endsection