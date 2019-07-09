@extends('principal')

@section('titulo', 'Inserir Aparelhos')

@section('conteudo')

    <h1 class="mx-auto"><img src="https://img.icons8.com/color/48/000000/sledgehammer.png">Inserir Aparelhos</h1>

  <form method="post" action="{{ route('aparelhos.store') }}">

    @csrf

    <div class="form-row">
        <div class="form-group col-md-2">
            <p>Comodo:
              <select class="form-control" name="comodo_id">
                @foreach($comodos as $c)
                    <option value="{{ $c->id }}"
                        > {{ $c->nome }}</option>
                @endforeach
                </select>
            </p>
        </div>
        <div class="form-group col-md-3">
            <p>Nome: <input class="form-control" type="text" name="nome"></p>
        </div>
        <div class="form-group col-md-3">
            <p>Potência: <input class="form-control" type="text" name="potencia"></p>
        </div>
        <div class="form-group col-md-2">
            <p>Hora: <input class="form-control" type="text" name="hora"></p>
        </div>
        <div class="form-group col-md-2">
            <p>Consumo: <input class="form-control" type="text" name="consumo"></p>
        </div>

    </div>

    <div class="form-inline">
        <a class="btn btn-primary mr-3" href="{{ route('aparelhos.index') }}">Voltar</a>
        <input class="btn btn-primary" type="submit" name="btnSalvar" value="Incluir">
    </div>

  </form>

@endsection
