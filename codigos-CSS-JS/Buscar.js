var campoBuscar = document.querySelector("#buscar");


campoBuscar.addEventListener("input", function(){
	console.log(this.value);
	var Aparelhos = document.querySelectorAll("#IDTrs");


/*

   senhas de acesso blablabla
	if( this.value.length >0){
       for (var i = 0; i<Aparelhos.length; i++) {
       var IDTrs = Aparelhos[i];

       var tdNome = IDTrs.querySelector(".info-nome");
       var nome= tdNome.textContent;
       var expressao= new RegExp(this.value,"i");
       if( nome!=this.value){
       	IDTrs.classList.add("invisivel");
       }else{
       	IDTrs.classList.remove("invisivel");
				um novo teste para puxar
       }
		}
	}else{
		for (var i = 0; i<Aparelhos.length; i++) {
			var IDTrs = Aparelhos[i];
			IDTrs.classList.remove("invisivel");
		}
	}

});
*/



	if( this.value.length >0){
       for (var i = 0; i<Aparelhos.length; i++) {
       var IDTrs = Aparelhos[i];

       var tdNome = IDTrs.querySelector(".info-nome");
       var nome= tdNome.textContent;
       var expressao= new RegExp(this.value,"i");
       if( !expressao.test(nome)){
       	IDTrs.classList.add("invisivel");
       }else{
       	IDTrs.classList.remove("invisivel");
       }
		}
	}else{
		for (var i = 0; i<Aparelhos.length; i++) {
			var IDTrs = Aparelhos[i];
			IDTrs.classList.remove("invisivel");
		}
	}

});
