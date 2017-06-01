<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

	public function base ($user, $base, $table)
	{
		$link = mysql_connect ('localhost', $user, '111')
			or die ('Не удалось соединиться:'.mysql_error());
		echo 'Соединение пользователя ' . $user . ' установлено<br>';
		mysql_select_db ($base)
			or die ('Не удалось выбрать базу данных<br>');
		echo 'БД ' . $base . ' выбрана<br>';
		$query = 'SELECT * FROM ' . $table;
		$result = mysql_query ($query)
			or die ('Запрос не удался:'.mysql_error());
		print_r ($result);
	}



	function getTree() 
	{ 
		$query = mysql_query("SELECT * FROM tree"); 
		$result = array(); 
		while ($row = mysql_fetch_array($query)) 
		{ 
			$result[$row["parent_id"]][] = $row; 
		} 
		return $result; 
	} 

	 

	function outTree($parent_id, $level) 
	{ 
		$tree_arr = getTree();
		if (isset($tree_arr[$parent_id])) 
		{  
			foreach ($tree_arr[$parent_id] as $value) 
			{
				echo "<div style=\"margin-left:" . ($level * 25) . "px;\">" . $value["name"] . "</div>"; 
				$level = $level + 1;
				outTree($value["id"], $level); 
				$level = $level - 1;
			}
		}
	}
	
	function menu()
	{
		base ('root', 'tree', 'tree');
		echo "<br><br>";
		outTree(0, 0);

		mysql_free_result ($result);
		mysql_close ($link);
	}
}
?>