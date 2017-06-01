<?php
	//Числа Фибоначчи
defined('BASEPATH') OR exit('No direct script access allowed');
class Ex3 extends CI_Model {
	
	function numex3()
	{
		echo "<div style = 'text-align: center;'>
				<h1>Вычисление чисел Фибоначчи</h1>
				<h3>Введите число элементов n</h3>
			</div>";
			  $this->load->view('formInEx_view');
		
		function res() 
		{
			if(isset($_POST['result'])) $result = $_POST['result'];
			
			function fib($i, $m, $f) 
			{
				$m[$i] = $m[$i-2]+$m[$i-1];
				if ($i == $f)
				{
					echo $m[$i]. " ";
				}
				else 
				{
					echo $m[$i]. " ";
					$i++;	
					fib($i, $m, $f);
				};
			};
		
		
			$m[0] = 1;
			$m[1] = 1;
			if ($result == 1) 
			{
				echo "<p style = 'text-align: center;'>" . $m[0] . "</p>";
			}
			elseif ($result == 2) 
			{
				echo "<p style = 'text-align: center;'>" . $m[0]." ".$m[1] . "</p>";
			}
			elseif ($result>2) 
			{
				echo "<p style = 'text-align: center;'>" . $m[0]." ".$m[1]. " ";
				fib(2, $m, $result-1);
				echo "</p>";
			}
			else
			{
				echo "<p style = 'text-align: center;'>Вы неправильно ввели номер эелемента.</p>";
			};
		};
		
		if (isset($_POST['function_start']) == 'go') 
		{
			res(); 
		}
	}
}
?>