<?php
	//Вычисление факториала
defined('BASEPATH') OR exit('No direct script access allowed');

class Ex2 extends CI_Model {
	
	function numex2()
	{
		echo "<div style = 'text-align: center;'>
				<h1>Вычисление факториала</h1>
				<h3>Введите целое положительное число n</h3>
			</div>";
				$this->load->view('formInEx_view');
			
				
		function res()
		{
			if(isset($_POST['result'])) $result = $_POST['result'];
			
			if ($result != null)
			{
				function req($i)
				{
					if ($i == 0) 
					{
						return 1;
					}
					else 
					{
						return $i*req($i-1);
					};
				};
				echo "<p style = 'text-align: center;'>" . ($result."! = ".req($result))."<br>";
			}
			else 
			{
				echo "<p style = 'text-align: center;'>Непривильно введены данные</p>";
			}
		};
		
		if (isset($_POST['function_start']) == 'go') 
		{
			res(); 
		}
	}
}
?>