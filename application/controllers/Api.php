<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController {

	function __construct()
	{
		// Construct the parent class
		parent::__construct();

	}

	/**
	 * API URL: http://domain/api/images
	 * Fetch all images data
	 */
	public function images_get()
	{
		$this->load->library('imagelibrary');
		//STATIC declaration for testing only
		$imageFullPath = APPPATH.'/assets/images.csv';

		try{

			$imageData = $this->imagelibrary->loadData($imageFullPath);
			// Set the response and exit
			$this->response( $imageData, 200 );

		}catch(Exception $ex){

			// Set the response and exit
			$this->response( [
				'status' => false,
				'message' => $ex->getMessage()
			], 404 );

		}

	}
}
