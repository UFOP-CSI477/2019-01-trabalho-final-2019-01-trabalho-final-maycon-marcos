@extends('principal')

@section('titulo', 'Inserir Aparelhos')

@section('conteudo')

<h1 style="text-align: center;"><img class="mr-1" width="70px" height="70px" src="https://img.icons8.com/dusk/64/000000/home.png">Cômodos</h1>

@foreach ($comodos as $c)
<table class="table table-hover table-striped">
 <thead class="thead-dark">
   <tr>
     <th><img class="mr-1" width="40px" height="40px" src="https://img.icons8.com/dusk/64/000000/home.png">Nome do Cômodo</th>
     <th style="text-align: center;"><img class="mr-1" width="40px" height="40px" src="https://img.icons8.com/dusk/64/000000/edit.png">Editar</th>
     <th style="text-align: center;"><img class="mr-1" width="40px" height="40px" src="https://img.icons8.com/dusk/64/000000/toggle-off.png">Delete</th>
   </tr>

 </thead>
 <tbody>

   <tr>
     <td>{{  $c->nome}}</td>
     <td style="text-align: center;"><a class="btn btn-outline-primary" href="{{ route('comodos.edit', $c->id) }}">Atualizar</a></td>
     <td style="text-align: center;">
      <!-- Excluir o comodo corrente //-->
      <form method="post" action="{{ route('comodos.destroy', $c->id) }}" onsubmit="return confirm('Tem certeza que deseja excluir o Cômodo?');" >

        @csrf
        @method('DELETE')

        <input class="btn btn-outline-danger" type="submit" value="Excluir">

      </form></td>

   </tr>
   <thead>
    <td  colspan="4"><h2 style="text-align: center;">Aparelhos do(a) {{ $c->nome }}</h2>
    </td>
    </thead>
  <tr>

    <table class="table table-hover table-striped">
      <thead>
        <th style="text-align: center;"><img class="mr-1" width="40px" height="40px" src="https://img.icons8.com/cute-clipart/64/000000/charge-battery.png">Nome</th>
        <th style="text-align: center;"><img class="mr-1" width="40px" height="40px" src="https://img.icons8.com/dusk/64/000000/cloudshot.png">Potência (W)</th>
        <th style="text-align: center;"><img class="mr-1" width="40px" height="40px" src="https://img.icons8.com/cotton/64/000000/time.png">Tempo de Uso (h/dia)</th>
        <th style="text-align: center;"><img class="mr-1" width="40px" height="40px" src="https://img.icons8.com/dusk/64/000000/plug.png">Consumo (Kw/h)</th>
        <th style="text-align: center;"><img class="mr-1" width="40px" height="40px" src="https://img.icons8.com/dusk/64/000000/edit.png">Editar</th>
        <th style="text-align: center;"><img class="mr-1" width="40px" height="40px" src="https://img.icons8.com/dusk/64/000000/toggle-off.png">Delete</th>
      </thead>
      @foreach ($c->aparelhos as $a)
      @if($a->comodo_id == $c->id)
      <tr>
        <td style="text-align: center;">{{ $a->nome }}</a></td>
        <td style="text-align: center;">{{ $a->potencia }}</td>
        <td style="text-align: center;">{{ $a->hora }}</td>
        <td style="text-align: center;">{{ $a->consumo }}</td>
        <td style="text-align: center;"><a class="btn btn-outline-primary" href="{{ route('aparelhos.edit', $a->id) }}">Atualizar</a></td>
        <td style="text-align: center;">
          <!-- Excluir o procedimento corrente //-->
          <form method="post" action="{{ route('aparelhos.destroy', $a->id) }}" onsubmit="return confirm('Tem certeza que deseja excluir o Aparelho?');" >

            @csrf
            @method('DELETE')

            <input class="btn btn-outline-danger" type="submit" value="Excluir">

          </form></td>
        </tr>

        @endif
        @endforeach
      </table>
    </tr>
    <!-- Calcula consumo do cômodo -->
        <tr>
          <td colspan="8">
            <h4 class="font-weight-bold" style="text-align: center;" >Consumo do(a) {{ $c->nome }}: {{$c->aparelhos->sum("consumo")}} Kw/h
            </h4><br>
          </td>
        </tr>
    @endforeach

   </tbody>
   </table>
   </div>

@endsection
