@extends('principal')

@section('titulo', 'Inserir Aparelhos')

@section('conteudo')

<h1 class="mx-auto"><img src="https://img.icons8.com/color/48/000000/sledgehammer.png">Cômodos</h1>

@foreach ($comodos as $c)
<table class="table table-hover table-striped">
 <thead class="thead-dark">
   <tr>
     <th>Código</th>
     <th>Nome</th>
     <th><img width="30px" height="30px" src="https://img.icons8.com/dusk/64/000000/edit-link.png">Editar</th>
     <th>Delete</th>
   </tr>

 </thead>
 <tbody>

   <tr>
     <td>{{ $c->id }}</td>
     <td>{{  $c->nome}}</td>
     <td><a class="btn btn-outline-primary" href="{{ route('comodos.edit', $c->id) }}">Atualizar</a></td>
     <td>
      <!-- Excluir o comodo corrente //-->
      <form method="post" action="{{ route('comodos.destroy', $c->id) }}" onsubmit="return confirm('Tem certeza que deseja excluir o Cômodo?');" >

        @csrf
        @method('DELETE')

        <input class="btn btn-outline-danger" type="submit" value="Excluir">

      </form></td>

   </tr>
   <tr>
    <td  colspan="4"><h2>Aparelhos do(a) {{ $c->nome }}</h2></td>
    </tr>
  <tr>

    <table class="table table-hover table-striped">
      <thead>
        <th>Código</th>
        <th>Comodo</th>
        <th>Nome</th>
        <th>Potência</th>
        <th>Tempo de Uso (h/dia)</th>
        <th>Consumo Kw/h</th>
        <th><img width="30px" height="30px" src="https://img.icons8.com/dusk/64/000000/edit-link.png">Editar</th>
        <th>Delete</th>
      </thead>
      @foreach ($c->aparelhos as $a)
      @if($a->comodo_id == $c->id)
      <tr>
        <td>{{ $a->id }}</td>
        <td>{{ $a->comodo->nome }}</td>
        <td>{{ $a->nome }}</a></td>
        <td>{{ $a->potencia }}</td>
        <td>{{ $a->hora }}</td>
        <td>{{ $a->consumo }}</td>
        <td><a class="btn btn-outline-primary" href="{{ route('aparelhos.edit', $a->id) }}">Atualizar</a></td>
        <td>
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
          <td  class="table-borderless" colspan="8">
            <p class="font-weight-bold">Consumo {{ $c->nome }}: {{$c->aparelhos->sum("consumo")}} Kw/h
            </p><br>
          </td>
        </tr>
    @endforeach

   </tbody>
   </table>
   </div>

@endsection
