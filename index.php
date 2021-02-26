<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculadora con PHP y AJAX</title>
	<style type="text/css">
		#resultado{
			font-size: 20px;
			color: blue;
		}
	</style>
</head>
<body>
	
	<center>
		<h1>Calculadora con PHP y AJAX</h1>
	<form id="calculadora">
		<label>Ingrese un numero</label>
		<input type="text" name="num_a">
		<br>
		<br>

		<label>Ingrese un numero</label>
		<input type="text" name="num_b">
		<br>
		<br>

		<label>Operacion</label>
		<select name="operacion">
			<option value="suma">Sumar</option>
			<option value="resta">Restar</option>
			<option value="multiplicacion">Multiplicar</option>
			<option value="division">Dividir</option>
		</select>

		<input type="button" value="calcular" id="calcular">
	</form>
	<br><br>
	<div id="resultado"></div>
	</center>

	<script src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#calcular').click(function(e){
				var datos = $('#calculadora').serialize();
				$('#resultado').html('<img src="img/25.gif">');

				$.ajax({
					url: 'calculadora.php',
					type: 'POST',
					dataType: 'json',
					data: datos
				}).done(function(data){
					$('#resultado').text('La ' + $('[name=operacion]').val() + ' de ' + data.num_a + ' y ' + data.num_b + ' es = ' + data.resultado);
					$('#resultado').attr('src', '');
				});
			});
		});
	</script>
</body>
</html>