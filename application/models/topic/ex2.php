<?php
	//Вычисление факториала
defined('BASEPATH') OR exit('No direct script access allowed');

class Ex2 extends CI_Model {
	
	function numex2()
	{
		echo "<p><b>Задание:</b>вычисление факториала</p>
			  <p>Введите целое положительное число n<br></p>";
			  $this->load->view('formInEx_view');
				
		function res()
		{
			if(isset($_POST['result'])) $result = $_POST['result'];
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
			echo ($result."! = ".req($result))."<br>";
		};
		
		if (isset($_POST['function_start']) == 'go') 
		{
			res(); 
		}
	}
}
?>