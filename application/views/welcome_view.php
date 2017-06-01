<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title></title>
</head>
<body>

<div style = "text-align: center;">
	<h1>Математический калькулятор</h1>
	<h3>Выберите калькулятор</h3>
	<form action = "<?=base_url();?>index.php/welcome/enter" method = 'get'>
		<p><select name = "numEx" size = "6">
			<option value="1">Вычисление корней квадратного уравнения</option>
			<option value="2">Вычисление факториала</option>
			<option value="3">Вычисление чисел Фибоначчи</option>
			<option value="4">Вычисление чисел Перрина</option>
			<option value="5">Вычисление вектороного произведения</option>
			<option value="6">Вычисление определителя матрицы</option>
		</select></p>
		<p><input class="button" type="submit" value="Отправить"></p>
	</form>
</div>


</body>
</html>