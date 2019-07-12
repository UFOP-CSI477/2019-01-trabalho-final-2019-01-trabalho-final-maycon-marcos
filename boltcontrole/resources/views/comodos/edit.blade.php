@extends('principal')

@section('titulo', 'Editar Comodo')

@section('conteudo')


<h1 class="mx-auto"><img src="https://img.icons8.com/dusk/64/000000/home.png">Editar Comodo</h1>

<form class="form-group" method="post" action="{{ route('comodos.update', $comodo->id) }}">

    @csrf
    @method('PATCH')

    <div class="form-group col-md-3">
        <p>Nome: <input class="form-control" type="text" name="nome" value="{{ $comodo->nome }}"></p>
    </div>

<div class="form-inline">
    <a class="btn btn-dark ml-2 mr-auto" style="color: #FF4000;" href="{{ route('comodos.index') }}">Voltar</a>
    <a class="btn btn-secondary mr-3 ml-2" href="{{ route('aparelhos.create') }}">Adicionar equipamentos</a>
    <a class="btn btn-secondary mr-3 ml-2" href="{{ route('aparelhos.index') }}">Excluir equipamentos</a>
    <input class="btn btn-dark mr-2 ml-auto" style="color: #FF4000;" type="submit" name="btnSalvar" value="Confirmar">
    {{-- <div class="form-inline">
        <a class="btn btn-primary mr-3" href="{{ route('comodos.index') }}">Voltar</a>
        <input class="btn btn-primary" type="submit" name="btnSalvar" value="Atualizar">
    </div> --}}
</div>

</form>


@endsection
