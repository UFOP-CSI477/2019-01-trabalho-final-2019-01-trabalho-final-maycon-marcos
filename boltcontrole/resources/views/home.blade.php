@extends('principal')

@section('conteudo')
<div class="container" >
      <div class="row">
        <h1 class="col-12">Dashboard</h2>
          <br><br><br>
   @if(auth::user()->consumudiario != null)
          <h2>Consumo Diário</h2>

       <p>Reserve dois dias normais que possam refletir o mais próximo possível das suas atividades habituais para que possamos calcular  o valor de seu consumo diário de acordo com os valores fornecidos no seu medidor da sua companhia de energia!</p>
        <div class="col-6"> <!-- Informações sobre padrão de energia -->
          <form>

         <div class="form-group" id="grupo1">
         <label for="valor1" id="labelv1">Informe o número estava no seu medidor Ontem</label>
          <input type="number" name="valor1"  placeholder="Valor de ontem" class="form-control sm">

          <div id="alerta1" style="display: none;" class="alert alert-danger">
            <span>Preencha o primeiro valor corretamente!<span>
          </div>

        </div>

        <div class="form-group" id="grupo2">
         <label for="valor2">Informe o número que esta no seu medidor Hoje</label>
          <input type="number" name="valor2"  placeholder="Valor de hoje" class="form-control sm">

          <div id="alerta2" style="display: none;" class="alert alert-danger">
            <span>Preencha o segundo  valor corretamente!<span>
          </div>
        </div>



        <div>
          <input  type="submit"  value="Calcular"  name="calculo" id="calculo" class="btn btn-info">

            <a href="#" class="btn btn-light">Como ler seu padrão</a>

        </div>

          </form>
        </div>

        <div class="col-6"  style="background-color: #f3f3f3; border-radius: 10px;"> <!-- Exibição do valor do consumo diário-->
         <h2>valor do consumo diário</h2>
         <br><br>
         <h4>Consumo Carregado em nosso sistema:</h4>
         <h2 id="resultado"> XXXX </h2>
        </div>

      </div> <!-- fim da linha -->
    </div>

    @else
         <h2>Seu consumo diário de acordo com a leitura do padrão do seu forncedor de energia!</h2>
         <div class="col-6"  style="background-color: #f3f3f3; border-radius: 10px;"> <!-- Exibição do valor do consumo diário-->
          <h2>Aqui aparecerá o valor do consumo diário</h2>
          <br><br>
          <h4>Consumo Carregado em nosso sistema:</h4>
          <h2>XXXXXXXXXX</h2>
         </div>

    @endif

    <script src="{{asset('js/codigo.js')}}" defer></script>
@endsection
