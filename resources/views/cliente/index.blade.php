@extends('layouts.app')

@section('title', 'Listagem')
@section('content')
 <a href="{{route('cliente-create')}}" class="btn btn-success btn-lg mt-3 mr-3 mb-3 float-right">Novo Cliente</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">CPF</th>
      <th scope="col">E-mail</th>

    </tr>
  </thead>
  <tbody>
    @foreach($clientes as $cliente)
    <tr>
      <th>{{$cliente->id}}</th>
      <td>{{$cliente->nome}}</td>
      <td>{{$cliente->telefone}}</td>
      <td>{{$cliente->cpf}}</td>
      <td>{{$cliente->email}}</td>
      <td class="btn btn-primary mr-3 btn-sm mt-2 mb-2">Editar</td>
      <td class="btn btn-danger btn-sm mt-2 mb-2 ">Deletar</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection