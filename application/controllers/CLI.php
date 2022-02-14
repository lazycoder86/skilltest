<?php

class CLI extends CI_Controller
{
	function __construct(){
		parent::__construct();
		if(!is_cli()) exit;
	}

	/**
	 * Not Tested
	 * Handles csv to json from CLI request
	 * @param $csv
	 */
	public function csvToJson($csv){

		$this->load->library('imagelibrary');
		try {
			echo $this->imagelibrary->toJSON($csv);
		}catch(Exception $e){
			echo $e->getMessage();
		}

		exit;

	}
}
