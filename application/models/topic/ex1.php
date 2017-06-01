<?php
	//Квадратное уравнение
defined('BASEPATH') OR exit('No direct script access allowed');
class Ex1 extends CI_Model {

	function numex1()
	{
		echo "<form method = 'post'>
					<p><input type = 'text' name = 'a' style='width: 70'> x^2 +
					<input type = 'text' name = 'b' style='width: 70'> x +
					<input type = 'text' name = 'c' style='width: 70'>
					<p><input type = 'submit' value = 'Отправить'></p>
			</form>";
		
		if(isset($_POST['a']))
		{
			$a = $_POST['a'];
			$b = $_POST['b'];
			$c = $_POST['c'];
			
			if($a == 0)
			{
				$a = 1;
			}
				$D = ($b*$b) - 4*($a*$c);
				echo "D = " . $D . "<br>";
			if($D > 0) 
			{
				$x1 = round ((($b * -1) - sqrt($D)) / (2 * $a) , 5);
				$x2 = round ((($b * -1) + sqrt($D)) / (2 * $a) , 5);
				
				echo "x1 = " . $x1 . "<br>";
				echo "x2 = " . $x2 . "<br>";
			}
			elseif ($D == 0) 
			{
				$x = (($b * -1) / (2 * $a));
				echo "x = " . $x . "<br>";
			}
			elseif ($D < 0) 
			{
				echo"Так как D отрицательный, действительных корней не существует.";
			}
		}
	}
}
?>