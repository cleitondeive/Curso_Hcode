/*Validação de Formulario*/

function validacao(){

	if (document.form.nome.value=="") {

		window.alert("Por favor preencha o campo nome para ser enviado...");
		document.form.nome.focus(function(event) {
			/* Act on the event */
		});;
		return false;
	}

	if (document.form.email.value == "" || document.form.email.value.indexOf('@') ==-1 || document.form.email.value.indexOf('.') ==-1){

		document.alert("Por favor digite um endereço de e-mail valido");
		document.form.email.focus(function(event) {
			/* Act on the event */
		});
		return false;
	}


	if (document.form.senha.value.length < 8) {

		window.alert("o campo tem que conter no minimo 8 caracteres");
		document.form.senha.focus(function(event) {
			/* Act on the event */
		});
		return false;
	}



}

