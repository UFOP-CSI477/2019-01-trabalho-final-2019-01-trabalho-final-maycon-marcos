@extends('principal')

@section('titulo', 'Inserir Aparelhos')

@section('conteudo')


    <h1 class="mx-auto"><img src="https://img.icons8.com/dusk/64/000000/plug.png">Inserir Aparelhos</h1>

  <form method="post" action="{{ route('aparelhos.store') }}">

    @csrf

    <div class="form-row">
        <div class="form-group col-md-2">
            <p>Comodo:
              <select class="form-control" name="comodo_id">
                @foreach($comodos as $c)
                    @if($c->user_id == Auth::user()->id)
                    <option value="{{ $c->id }}"
                        > {{ $c->nome }}</option>
                    @endif
                @endforeach
                </select>
            </p>
        </div>
        <div class="form-group col-md-3">
            <p>Nome: <input class="form-control" type="text" name="nome"></p>
        </div>
        <div class="form-group col-md-3">
            <p>Potência: <input class="form-control" type="text" name="potencia" id="potencia"></p>
        </div>
        <div class="form-group col-md-2">
            <p>Hora: <input class="form-control" type="text" name="hora" id="hora"></p>
        </div>
        <div class="form-group col-md-2">
            <p>Consumo: <input class="form-control" type="text" name="consumo" id="hora"></p>
        </div>

        <div class="form-group col-md-2">
            <p>Usuário autenticado:
                <select class="form-control" name="user_id">
                    <option value="{{auth::user()->id}}"
                        >{{ auth::user()->name }}</option>
                </select>
        </div>

    </div>

    <div class="form-inline">
        <a class="btn btn-dark mr-3 ml-2" style="color: #FF4000;" href="{{ route('aparelhos.index') }}">Voltar</a>
        <input class="btn btn-dark ml-auto mr-2" style="color: #FF4000;" type="submit" name="btnSalvar" value="Incluir">
    </div>

  </form>

@endsection
