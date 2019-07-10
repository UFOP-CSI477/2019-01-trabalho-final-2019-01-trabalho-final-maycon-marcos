@extends('principal')

@section('titulo', 'Editar Comodo')

@section('conteudo')

<div class="col-8">

    <h1 class="mx-auto"><img src="https://img.icons8.com/color/48/000000/sledgehammer.png">Editar Comodo</h1>

  <form class="form-group" method="post" action="{{ route('comodos.update', $comodo->id) }}">

    @csrf
    @method('PATCH')

        <div class="form-group col-md-3">
            <p>Nome: <input class="form-control" type="text" name="nome" value="{{ $comodo->nome }}"></p>
        </div>
    </div>


<a class="btn btn-primary mr-3 ml-2" href="{{ route('aparelhos.create') }}">Adicionar equipamentos</a>
 <a class="btn btn-primary mr-3 ml-2" href="{{ route('aparelhos.index') }}">Excluir equipamentos</a>
<input type="submit" name="btnSalvar" value="Confirmar">
    {{-- <div class="form-inline">
        <a class="btn btn-primary mr-3" href="{{ route('comodos.index') }}">Voltar</a>
        <input class="btn btn-primary" type="submit" name="btnSalvar" value="Atualizar">
    </div> --}}

  </form>


@endsection
