<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {

	function goToExercise()
	{		
		$numEx = $_GET['numEx'];
		$query = 'ex'.$numEx;
		return $query;
	}	
}
?>