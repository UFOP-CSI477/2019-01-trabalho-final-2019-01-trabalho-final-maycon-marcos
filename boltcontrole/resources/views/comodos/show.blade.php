@extends('principal')

@section('titulo', 'Exibir Comodo')

@section('conteudo')

  <h1>Comodo: {{ $comodo->nome }}</h1>

  <p>Id: {{ $comodo->id }}</p>



  <a href="{{ route('comodos.index') }}">Voltar</a>
  <a href="{{ route('comodos.edit', $comodo->id) }}">Editar</a>


  {{-- <form method="post" action="{{ route('comodos.destroy', $comodo->id) }}" onsubmit="return confirm('Confirma exclusão do comodo?');" >

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir"> --}}

  </form>

@endsection
