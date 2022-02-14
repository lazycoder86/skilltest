<?php

/**
 * Class that handles image data operation
 */
class ImageLibrary
{

	/**
	 * @throws Exception
	 */
	public function toJSON($csvFullPath){

		return json_encode($this->loadData($csvFullPath));

	}

	function loadData($csvFullPath){

		if(!file_exists($csvFullPath)) throw new Exception('CSV file not found');

		$imageData = [];

		if (($handle = fopen($csvFullPath, "r")) !== FALSE) {
			$ctr = 0;
			while (($data = fgetcsv($handle)) !== FALSE) {
				$ctr++;

				//escape the heading
				if($ctr === 1) continue;

				$imageData[] = $data;

			}

			$arrOfImageName = array_map(function ($name) {
				return strtolower($name);
			}, array_column($imageData, 1));

			array_multisort($arrOfImageName, SORT_ASC, SORT_STRING, $imageData);

		}

		return $imageData;

	}
}
