<?php

namespace Vivdub\DistMatrix;

//=============================
class GMap{

	private static $URL = "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&key=";
	private $key;
	private $rarr = array();

	//=================
	public function __construct($key){
		$this->key=$key;
	}

	//=================
	public function timeWithCoordinates($source, $destinations){
		$url = GMap::$URL.$this->key;
		$url.= "&origins=".$source[0].",".$source[1]."&destinations=";
		$sdest = "";
		foreach($destinations as $dest){
			$sdest .= $dest[0]."%2C".$dest[1]."%7C";
		}
		if(strlen($sdest)>0)
			$sdest = substr($sdest, 0, strlen($sdest)-3);
		$url .= $sdest;
		$resp = file_get_contents($url);
		$json = json_decode($resp, true);
		$rows = $json["rows"];
		$i=0;
		foreach($rows as $row){
			$this->rarr[$i++] = $row['elements'];
		}
		return $this->rarr;
	}
	
	//=================
	public function getDurationText($o, $d){
		return $this->rarr[$o][$d]["duration"]["text"];
	}
}

?>
