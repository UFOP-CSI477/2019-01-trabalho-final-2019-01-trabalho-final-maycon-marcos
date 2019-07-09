@extends('principal')

@section('titulo', 'Aparelhos')

@section('conteudo')

  <h1 class="mx-auto"><img src="https://img.icons8.com/color/48/000000/sledgehammer.png">Aparelhos</h1>

  <table class="table table-bordered table-hover table-striped">
    <tr>
      <th>Código</th>
      <th>Comodo</th>
      <th>Nome</th>
      <th>Potência</th>
      <th>Tempo de Uso (h/dia)</th>
      <th>Consumo Kw/h</th>
      <th>Editar</th>
      <th>Delete</th>
    </tr>
  @foreach ($aparelhos as $a)
    <tr>
      <td>{{ $a->id }}</td>
      <td>{{ $a->comodo->nome }}</td>
      <td>{{ $a->nome }}</a></td>
      <td>{{ $a->potencia }}</td>
      <td>{{ $a->hora }}</td>
      <td>{{ $a->consumo }}</td>
      <td><a class="btn btn-outline-primary" href="{{ route('aparelhos.edit', $a->id) }}">Atualizar</a></td>
      <td>
      <!-- Excluir o aparelho corrente //-->
      <form method="post" action="{{ route('aparelhos.destroy', $a->id) }}" onsubmit="return confirm('Tem certeza que deseja excluir o Aparelho?');" >

        @csrf
        @method('DELETE')

        <input class="btn btn-outline-danger" type="submit" value="Excluir">

      </form></td>
    </tr>
  @endforeach
  </table>

  <br>
  

  <div class="form-inline">
        <a class="btn btn-primary ml-auto mr-2" href="{{ route('aparelhos.create') }}">Inserir</a>
    </div>


@endsection
