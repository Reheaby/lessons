<?php
	//Числа Перрина
defined('BASEPATH') OR exit('No direct script access allowed');

class Ex4 extends CI_Model {

	function numex4()
	{	
		echo "<p><b>Задание:</b>вычисление чисел Перрина</p>
			  <p>Введите номер элемента n<br></p>";
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
				echo $m[0];
			}
			elseif ($result == 2) 
			{
				echo $m[0]." ".$m[1];
			}
			elseif ($result == 3) 
			{
				echo $m[0]." ".$m[1]." ".$m[2];
			}
			elseif ($result>3) 
			{
				echo $m[0]." ".$m[1]." ".$m[2]." ";
				perrin(3, $m, $result-1);
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