
function validar(campo, alerta ,label){

	//input[name.'valorX']
	//#idDoCampo

	console.log("Validar: " +campo);

  var n = parseFloat($(campo).val());

  if($(campo).val().length ==0 || isNaN(n)){
 /*ERRO*/

     $(alerta).slideDown();

    //document.getElementById(alerta).style.display = "block";
    $(label).addClass("text-danger"); /*tratando o label*/

    $(campo).addClass("is-invalid"); /* uma classe do bootstrap*/


    $(campo).val = ("");
    $(campo).focus();

    return false;

  }
  /*Tudo certo*/
  //oculta alerta
  $(alerta).hide();

//Remove classes
  $(campo).removeClass("is-invalid");
  $(label).removeClass("text-danger")
  //Adiciona Classe ao input
  $(campo).addClass("is-valid");


return true;
}






$(document).ready(function() {
 	console.log("Documento carregado.");


  $("#calculo").click(function(){

		//if(validar("input[name='valor1']" , "#alerta1" , "#labelv1" )
			//&& validar("input[name='valor2']" , "#alerta2" , "#labelv2" )){

			 //var n1 = parseFloat ($("input[name='valor1']").val());
			 //var n2 = parseFloat ($("input[name='valor2']").val());

			 //var res = n1 + n2;
			// $("h2[name='resultado']").val(res);
       //$("#resultado").text("zika");
       $("input[name='resultado']").val("zika");
		//}else{
		//	$("#resultado").text("");
		//}

	});



}
