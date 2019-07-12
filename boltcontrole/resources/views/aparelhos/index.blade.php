@extends('principal')

@section('titulo', 'Aparelhos')

@section('conteudo')

  <h1 style="text-align: center;"><img src="https://img.icons8.com/dusk/64/000000/plug.png">Aparelhos</h1>

  <table class="table table-hover table-striped">
    <thead class="thead-dark">
        <th style="text-align: center;"><img class="mr-1" width="40px" height="40px" src="https://img.icons8.com/cute-clipart/64/000000/charge-battery.png">Nome</th>
        <th style="text-align: center;"><img class="mr-1" width="40px" height="40px" src="https://img.icons8.com/dusk/64/000000/cloudshot.png">Potência (W)</th>
        <th style="text-align: center;"><img class="mr-1" width="40px" height="40px" src="https://img.icons8.com/cotton/64/000000/time.png">Tempo de Uso (h/dia)</th>
        <th style="text-align: center;"><img class="mr-1" width="40px" height="40px" src="https://img.icons8.com/dusk/64/000000/plug.png">Consumo (Kw/h)</th>
        <th style="text-align: center;"><img class="mr-1" width="40px" height="40px" src="https://img.icons8.com/dusk/64/000000/edit.png">Editar</th>
        <th style="text-align: center;"><img class="mr-1" width="40px" height="40px" src="https://img.icons8.com/dusk/64/000000/toggle-off.png">Delete</th>
        <th style="text-align: center;"><img class="mr-1" width="40px" height="40px" src="https://img.icons8.com/dusk/64/000000/home.png">Comodo</th>
    </thead>
  @foreach ($aparelhos as $a)
    <tr>
      <td style="text-align: center;">{{ $a->nome }}</a></td>
      <td style="text-align: center;">{{ $a->potencia }}</td>
      <td style="text-align: center;">{{ $a->hora }}</td>
      <td style="text-align: center;">{{ $a->consumo }}</td>
      <td style="text-align: center;"><a class="btn btn-outline-primary" href="{{ route('aparelhos.edit', $a->id) }}">Atualizar</a></td>
      <td style="text-align: center;">
      <!-- Excluir o aparelho corrente //-->
      <form method="post" action="{{ route('aparelhos.destroy', $a->id) }}" onsubmit="return confirm('Tem certeza que deseja excluir o Aparelho?');" >

        @csrf
        @method('DELETE')

        <input class="btn btn-outline-danger" type="submit" value="Excluir">

      </form></td>
      <td style="text-align: center;">{{ $a->comodo->nome }}</td>
    </tr>
  @endforeach
  </table>

  <br>

  <div class="form-inline">
        <a class="btn btn-dark ml-auto mr-2" style="color: #FF4000;" href="{{ route('aparelhos.create') }}">Inserir</a>
    </div>


@endsection
