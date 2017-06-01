<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Ex6 extends CI_Model {

	function numex6()
	{
		echo "<div style = 'text-align: center;'>
				<h1>Вычисление определителя матрицы</h1>
				<h3>Введите данные</h3>
				<p>A = </p>
				<form method = 'post'>
					<p><input type = 'text' name = 'a11' style='width: 70'>
					<input type = 'text' name = 'a12' style='width: 70'>
					<input type = 'text' name = 'a13' style='width: 70'></p>
					
					<p><input type = 'text' name = 'a21' style='width: 70'>
					<input type = 'text' name = 'a22' style='width: 70'>
					<input type = 'text' name = 'a23' style='width: 70'>
					
					<p><input type = 'text' name = 'a31' style='width: 70'>
					<input type = 'text' name = 'a32' style='width: 70'>
					<input type = 'text' name = 'a33' style='width: 70'>
					<p><input type = 'submit' value = 'Отправить'></p>
				</form>
			</div>";
			
		if(isset($_POST['a11']))
		{
			$a11 = $_POST['a11'];
			$a12 = $_POST['a12'];
			$a13 = $_POST['a13'];
			$a21 = $_POST['a21'];
			$a22 = $_POST['a22'];
			$a23 = $_POST['a23'];
			$a31 = $_POST['a31'];
			$a32 = $_POST['a32'];
			$a33 = $_POST['a33'];
			
			$opr = $a11*$a22*$a33+$a12*$a23*$a31+$a21*$a32*$a13-$a31*$a22*$a13-$a12*$a21*$a33-$a11*$a23*$a32;
			echo "<p style = 'text-align: center;'>|A| = " . $opr. "</p>";
		}
	}
}
?>