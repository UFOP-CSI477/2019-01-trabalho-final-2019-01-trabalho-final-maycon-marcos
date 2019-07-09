@extends('principal')

@section('titulo', 'Inserir Aparelhos')

@section('conteudo')

<h1 class="mx-auto"><img src="https://img.icons8.com/color/48/000000/sledgehammer.png">Cômodos</h1>

@foreach ($comodos as $c)
<table class="table table-bordered table-hover table-striped">
 <thead>
   <tr>
     <th>Código</th>
     <th>Nome</th>
     <th>Editar</th>
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
    <td  colspan="4"><h2>Aparelhos do Cômodo</h2></td>
    </tr>
  <tr>

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
    @endforeach

   </tbody>
   </table>
   </div>

@endsection
