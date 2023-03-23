<?php
class PHPSC{
	public function info(){
		return phpinfo();
	}
	
	public function reverse($value){
		if (is_array($value)) {
			return array_map(array($this,'reverse'), $value);
		}
		return strrev($value);
	}

	public function lowerCase($value){
		if (is_array($value)) {
			return array_map(array($this,'lowerCase'), $value);
		}
		return strtolower($value);
	}

	public function upperCase($value){
		if (is_array($value)) {
			return array_map(array($this,'upperCase'), $value);
		}
		return strtoupper($value);
	}

	public function firstLetterLowerCase($value){
		if (is_array($value)) {
			return array_map(array($this,'firstLetterLowerCase'), $value);
		}
		return lcfirst($value);
	}

	public function capitalizeString($value){
		if (is_array($value)) {
			return array_map(array($this,'capitalizeString'), $value);
		}
		return ucfirst($value);
	}

	public function length($value){
		if(is_array($value)){
			return count($value);
		}
		return strlen($value);
	}
	
	//Validate filters
	
	/*
		Validating an Email address
	*/
	public function isEmail($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return true;
		}
		return false;
	}
	
	/*
		Validating an IP address
	*/
	public function isIp($ip){
		if(filter_var($ip, FILTER_VALIDATE_IP)) {
			return true;
		}
		return false;
	}
	
	/*
		Validating a MAC address
	*/
	public function isMac($mac){
		if(filter_var($mac, FILTER_VALIDATE_MAC)) {
			return true;
		}
		return false;
	}
	
	/*
		Validating an URL
	*/
	public function isUrl($url){
		if(filter_var($url, FILTER_VALIDATE_URL)) {
			return true;
		}
		return false;
	}
	
	/*
     filter all ascii and save juste 0-9 a-Z and @ . _
	*/
	public function alphanum($string, $filter = ""){
		$h = $this->length($string);
        for($a = 0; $a < $h; $a++) {
            $i = ord($string[$a]);
            if( ($i==46) || ($i==64) || ($i==95) || ($i > 47 && $i < 58) || ($i > 64 && $i < 91) || ($i > 96 && $i < 123) ) {
				$filter .= $string[$a];
			}    
        }
        return $filter;
	}
	
	public function shuffleString($value){
		if (is_array($value)) {
			return array_map(array($this,'shuffleString'), $value);
		}
		return str_shuffle($value);
	}
	
}
?>
