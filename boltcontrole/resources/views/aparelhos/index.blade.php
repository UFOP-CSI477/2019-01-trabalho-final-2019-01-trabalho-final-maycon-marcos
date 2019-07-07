@extends('principal')

@section('titulo', 'Aparelhos')

@section('conteudo')


  <a class="btn btn-primary" href="{{ route('aparelhos.create') }}">Inserir</a>

  <table class="table table-striped mt-2">
    <tr>
      <th>Código</th>
      <th>Comodo</th>
      <th>Nome</th>
      <th>Potência</th>
      <th>Tempo de Uso (h/dia)</th>
      <th>Consumo Kw/h</th>
      <th>Editar</th>
    </tr>
  @foreach ($aparelhos as $a)
    <tr>
      <td>{{ $a->id }}</td>
      <td>{{ $a->comodo->nome }}</td>
      <td>{{ $a->nome }}</a></td>
      <td>{{ $a->potencia }}</td>
      <td>{{ $a->hora }}</td>
      <td>{{ $a->consumo }}</td>
      <td><a href="{{ route('aparelhos.edit', $a->id) }}">Exibir</a></td>
    </tr>
  @endforeach
  </table>

@endsection
