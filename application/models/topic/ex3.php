<?php
	//Числа Фибоначчи
defined('BASEPATH') OR exit('No direct script access allowed');
class Ex3 extends CI_Model {
	
	function numex3()
	{
		echo "<p><b>Задание:</b>вычислить числа Фибоначчи от 0 до n элемента</p>
			  <p>Введите число элементов n<br></p>";
			  $this->load->view('formInEx_view');
		
		function res() 
		{
			if(isset($_POST['result'])) $result = $_POST['result'];
			
			function fib($i, $m, $f) 
			{
				$m[$i] = $m[$i-2]+$m[$i-1];
				if ($i == $f)
				{
					echo $m[$i]." ";
				}
				else 
				{
					echo $m[$i]." ";
					$i++;	
					fib($i, $m, $f);
				};
			};
		
		
			$m[0] = 1;
			$m[1] = 1;
			if ($result == 1) 
			{
				echo $m[0];
			}
			elseif ($result == 2) 
			{
				echo $m[0]." ".$m[1];
			}
			elseif ($result>2) 
			{
				echo $m[0]." ".$m[1]." ";
				fib(2, $m, $result-1);
			}
			else
			{
				echo "Вы неправильно ввели номер эелемента";
			};
		};
		
		if (isset($_POST['function_start']) == 'go') 
		{
			res(); 
		}
	}
}
?>