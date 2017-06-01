<?php
	//Квадратное уравнение
defined('BASEPATH') OR exit('No direct script access allowed');
class Ex1 extends CI_Model {

	function numex1()
	{
		echo "<div style = 'text-align: center;'>
				<form method = 'post'>
					<h1>Вычисление корней квадратного уравнения</h1>
					<h3>Введите данные</h3>
					<p><input type = 'text' name = 'a' style='width: 70'> x^2 +
					<input type = 'text' name = 'b' style='width: 70'> x +
					<input type = 'text' name = 'c' style='width: 70'>
					<p><input type='hidden' name='function_start' value='go'></p>
					<p><input type = 'submit' value = 'Отправить'></p>
				</form>
			</div>";
			
		function res()
		{
			if(isset($_POST['a'])) {$a = $_POST['a'];};
			if(isset($_POST['b'])) {$b = $_POST['b'];};
			if(isset($_POST['c'])) {$c = $_POST['c'];};
			
			if (($a !=null) && ($b!=null) && ($c!=null))
			{
				if($a != 0)
				{
					$D = ($b*$b) - 4*($a*$c);
					echo "<p style = 'text-align: center;'>D = " . $D . "</p>";
					
					if($D > 0) 
					{
						$x1 = round ((($b * -1) - sqrt($D)) / (2 * $a) , 5);
						$x2 = round ((($b * -1) + sqrt($D)) / (2 * $a) , 5);
						
						echo "<p style = 'text-align: center;'>x1 = " . $x1 . "</p>";
						echo "<p style = 'text-align: center;'>x2 = " . $x2 . "</p>";
					}
					elseif ($D == 0) 
					{
						$x = (($b * -1) / (2 * $a));
						echo "<p style = 'text-align: center;'>x = " . $x . "</p>";
					}
					elseif ($D < 0) 
					{
						echo"<p style = 'text-align: center;'>Так как D отрицательный, действительных корней не существует.</p>";
					}
				}
				elseif ($a == 0)
				{
					$x = (-1)*$c/$b;
					echo "<p style = 'text-align: center;'>x = " . $x . "</p>";
				}
			}
			else
			{
				echo "<p style = 'text-align: center;'>Непривильно введены данные</p>";
			}
		}
		
		if (isset($_POST['function_start']) == 'go') 
		{
			res(); 
		};
	}
}
?>