<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_view');
	}
	
	function calculator()
	{
		
	}
	
	function enter()
	{
		$this->load->model('welcome_model');
		$query = $this->welcome_model->goToExercise();	
		$qquery = 'num' . $query;
		if ($query) 
		{		
			$this->load->model('topic/' . $query);
			$this->$query->$qquery();
			$this->load->view('comeback_view');
		}
	}
}
?>
