@extends('principal')

@section('conteudo')
<div class="container" >
      <div class="row">
        <h1 class="col-12">Dashboard</h2>
          <br><br><br>

          <h2>Consumo Diário</h2>

       <p>Reserve dois dias normais que possam refletir o mais próximo possível das suas atividades habituais para que possamos calcular  o valor de seu consumo diário de acordo com os valores fornecidos no seu medidor da sua companhia de energia!</p>
        <div class="col-6"> <!-- Informações sobre padrão de energia -->
          <form>
         <div class="form-group">
         <label for="qnt"><h4>Informe o número estava no seu medidor Ontem</h4></label>
          <input type="number" name="qnt" id="qnt" placeholder="Valor de ontem" class="form-control sm">
        </div>

        <div class="form-group">
         <label for="qnt"><h4>Informe o número que esta no seu medidor Hoje</h4></label>
          <input type="number" name="qnt" id="qnt" placeholder="Valor de hoje" class="form-control sm">
        </div>

        <div>
          <input id="botao" type="submit"  value="Calcular"  name="confirmar" class="btn btn-info">
          <input id="botao" type="reset" value="Limpar" class="btn btn-secondary">
        </div>

          </form>
        </div>

        <div class="col-6"  style="background-color: #f3f3f3; border-radius: 10px;"> <!-- Exibição do valor do consumo diário-->
         <h2>Aqui aparecerá o valor do consumo diário</h2>
         <br><br>
         <h4>Consumo Carregado em nosso sistema:</h4>
         <h2>XXXXXXXXXX</h2>
        </div>

      </div> <!-- fim da linha -->

    </div>
@endsection
