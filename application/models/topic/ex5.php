<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Ex5 extends CI_Model {

	function numex5()
	{
		echo "<div style = 'text-align: center;'>
				<h1>Вычисление вектороного произведения</h1>
				<h3>Введите данные</h3>
				
				<form method = 'post'>
					<p>a = <input type = 'text' name = 'x1' style='width: 70'>
					<input type = 'text' name = 'y1' style='width: 70'>
					<input type = 'text' name = 'z1' style='width: 70'></p>
					
					<p>b = <input type = 'text' name = 'x2' style='width: 70'>
					<input type = 'text' name = 'y2' style='width: 70'>
					<input type = 'text' name = 'z2' style='width: 70'>
					<p><input type = 'submit' value = 'Отправить'></p>
				</form>
			</div>";
			
		if(isset($_POST['x1']))
		{
			$x1 = $_POST['x1'];
			$y1= $_POST['y1'];
			$z1 = $_POST['z1'];
			$x2 = $_POST['x2'];
			$y2= $_POST['y2'];
			$z2 = $_POST['z2'];
			$i = $y1*$z2-$z1*$y2;
			$j = $x1*$z2-$z1*$x2;
			$k = $x1*$y2-$y1*$x2;
			echo "<p style = 'text-align: center;'>a x b = i(" . $i . ") - j(" . $j . ") + k(" . $k . ")</p>";
		}
	}
}
?>