<?php
	//Числа Перрина
defined('BASEPATH') OR exit('No direct script access allowed');

class Ex4 extends CI_Model {

	function numex4()
	{	
		echo "<div style = 'text-align: center;'>
				<h1>Вычисление чисел Перрина</h1>
				<h3>Введите номер элемента n</h3>
			</div>";
			  $this->load->view('formInEx_view');
			  
		function res()
		{
			if(isset($_POST['result'])) $result = $_POST['result'];
		
			function perrin($i, $m, $f) 
			{
				
				$m[$i] = $m[$i-2]+$m[$i-3];
				if ($i == $f)
				{
					echo $m[$i]." ";
				}
				else 
				{
					echo $m[$i]." ";
					$i++;	
					perrin($i, $m, $f);
				};
			};
			
			$m[0] = 3;
			$m[1] = 0;
			$m[2] = 2;
			if ($result == 1) 
			{
				echo "<p style = 'text-align: center;'>" . $m[0] . "</p>";
			}
			elseif ($result == 2) 
			{
				echo "<p style = 'text-align: center;'>" . $m[0]." ".$m[1]. "</p>";
			}
			elseif ($result == 3) 
			{
				echo "<p style = 'text-align: center;'>" . $m[0]." ".$m[1]." ".$m[2]. "</p>";
			}
			elseif ($result>3) 
			{
				echo "<p style = 'text-align: center;'>" . $m[0]." ".$m[1]." ".$m[2]." ";
				perrin(3, $m, $result-1);
				echo "</p>";
			}
			else
			{
				echo "Вы неправильно ввели номер эелемента";
			};
		};
		if (isset($_POST['function_start']) == 'go') 
		{
			res(); 
		};
	}
}
?>