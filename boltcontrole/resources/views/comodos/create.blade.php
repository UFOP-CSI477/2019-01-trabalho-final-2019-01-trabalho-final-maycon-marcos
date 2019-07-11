@extends('principal')

@section('titulo', 'Inserir comodo')

@section('conteudo')


    <h1 class="mx-auto"><img src="https://img.icons8.com/color/48/000000/sledgehammer.png">Inserir Comodo</h1>

  <form method="post" action="{{ route('comodos.store') }}">

    @csrf

    <div class="form-row">
        <div class="form-group col-md-3">
            <p>Nome: <input class="form-control" type="text" name="nome"></p>
        </div>
        <div class="form-group col-md-2">
            <p>Usuário autenticado: 
            <select class="form-control" name="user_id">
                <option value="{{auth::user()->id}}"
                >{{ auth::user()->name }}</option>
            </select>
            </p>
        </div>
    </div>

    <div class="form-inline">
        <a class="btn btn-dark mr-3 ml-2" style="color: #FF4000;" href="{{ route('comodos.index') }}">Voltar</a>
        <input class="btn btn-dark ml-auto mr-2" style="color: #FF4000;" type="submit" name="btnSalvar" value="Incluir">
    </div>

  </form>

@endsection
