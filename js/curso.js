//Criando variavel em javaScript

var farol = "laranjado";

switch (farol) {
	case "vermelho":
		document.write("por favor pare no semaforo");
		break;
		case "amarelo":
		document.write("atenção para parar no semaforo");
		break;
		case "verde":
		document.write("por favor siga em frente");
		break;
	default:
		document.write("cor inexistente ligue para nossa central de manutenção xx-xxxx-xxxx");
		break;
}