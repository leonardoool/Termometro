function Calcular() {
	//variáveis//
	let valor = document.getElementById('pe_valor').value;
	valor = parseInt(valor);
	let temperatura;
	let simbolo;

	//início da ação//
	if (document.getElementById("celsius_fa").checked){
	  temperatura = (valor * 9/5) + 32;
	  simbolo = ' &#186;F';
	//ocorrer a ação/variação//
	} else if (document.getElementById("fa_celsius").checked){
	  temperatura = (valor -32) * (5/9);
	  simbolo = ' &#186;C';
	} else if (document.getElementById("celsius_kelvin").checked){
	  temperatura = valor + 273.15 ;
	  simbolo = ' K';
	} else if (document.getElementById("kelvin_celsius").checked){
	  temperatura = valor - 273.15 ;
	  simbolo = ' &#186;C';
	} else if (document.getElementById("fa_kelvin").checked){
	  temperatura = (valor -32) * 5/9 + 273.15;
	  simbolo = ' K';
	} else if (document.getElementById("kelvin_fa").checked){
	  temperatura = (valor -273.15) * 9/5 + 32;
	  simbolo = ' &#186;F';
	}

	//resultado//
	temperatura = parseFloat(temperatura.toFixed(2));

	document.getElementById('resultado').innerHTML = temperatura + simbolo ;
}