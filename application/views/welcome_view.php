<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title></title>
</head>
<body>

<form action = "<?=base_url();?>index.php/welcome/enter" method = 'get'>
	<select name = "numEx">
		<option value="1">Вычисление корней квадратного уравнения</option>
		<option value="2">Вычисление факториала</option>
		<option value="3">Вычисление чисел Фибоначчи</option>
		<option value="4">Вычисление чисел Перрина</option>
		<option value="5">Вычисление вектороного произведения</option>
		<option value="6">Вычисление определителя матрицы</option>
	</select>
	<input class="button" type="submit" value="Отправить">
</form>


</body>
</html>