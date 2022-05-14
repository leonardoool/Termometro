<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Conversor de Temperatura - Celsius - Fahrenheit - Kelvin </title>
<link rel="stylesheet" type="text/css" href="conv.css">
<meta charset="utf-8" />


<h1 align="center" class="display-5 text-center"><small class="font-weight-bold"><i class="fas fa-temperature-high mr-2"></i></i>Conversor de Temperatura</small></h1>


<br>
<fieldset>
<div class="row justify-content-center mb-5">
<div class="col-sm-10 col-md-8 col-lg-6">
<form onsubmit="return false;">
<div class="form-group">
<label for="pe_valor">
Valor a ser convertido:
</label>
<br>
<input id="pe_valor" title="Informe o valor que deseja encontrar a temperatura" name="pe_valor" placeholder="Valor a ser convertido" class="form-control input-md text-center">
</div>
<br>
<div class="form-group text-muted">
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="celsius_fa" value="celsius_fa" checked>
<label class="form-check-label" for="celsius_fa">Celsius (&#186;C) <i class="fas fa-arrow-right"></i> Fahrenheit (&#186;F) </label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="fa_celsius" value="fa_celsius">
<label class="form-check-label" for="fa_celsius">Fahrenheit <i class="fas fa-arrow-right"></i> Celsius (&#186;C) </label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="celsius_kelvin" value="celsius_kelvin">
<label class="form-check-label" for="celsius_kelvin">Celsius (&#186;C) <i class="fas fa-arrow-right"></i> Kelvin (K) </label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="kelvin_celsius" value="option2">
<label class="form-check-label" for="kelvin_celsius">Kelvin (K) <i class="fas fa-arrow-right"></i>Celsius (&#186;C) </label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="fa_kelvin" value="option2">
<label class="form-check-label" for="fa_kelvin"> Fahrenheit (&#186;F) <i class="fas fa-arrow-right"></i>Kelvin (K) </label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="kelvin_fa" value="option2">
<label class="form-check-label" for="kelvin_fa"> Kelvin (K) <i class="fas fa-arrow-right"></i>Fahrenheit (&#186;F) </label>
</div>
</div>
<br>
<div class="form-group">
<div> <label for="resultado">Temperatura Convertida:</label>
<br>
<textarea rows="1" class="form-control text-center" id="resultado" name="resultado"></textarea>
</div>
</div>
<br>
<div class="btn-group col-md-12 justify-content-center" role="group">
<div class="col-md-4">
<button title="Converter Temperatura" onclick="Calcular();" value="Converter Temperatura" id="calcular" class="btn btn-outline-primary">
<i class="fas fa-calculator mr-2"></i>
Converter
</button>
</div>
<br>
<div class="col-md-4">
<button title="Limpar campos" type="reset" value="Limpar campos" id="limpar" class="btn btn-outline-primary" onclick="javascript:eraseText();">
<i class="fas fa-backspace mr-2"></i>
Limpar
</button>
</fieldset>
</div>
</div>
</form>
</div>
</div>
<script type="text/javascript" src="conversao.js"></script>
</body>
</html>