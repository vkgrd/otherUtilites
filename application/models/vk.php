<? if(!defined('BASEPATH')) exit('No direct script access allowed');

class Vk extends CI_Model {
	
	function requers($method, $parameters) 
	{
		$methodsURL = 'https://api.vk.com/method/';
		$param = http_build_query($parameters);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $methodsURL);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
		curl_setopt($CH, CURLOPT_TIMEOUT, 15);
		$data = curl_exec($ch);
		if($data === false) {
			sleep(1);
			$data = curl_exec($ch);
			if($data === false) {
				sleep(1);
				$data = curl_exec($ch);
				if($data === false) {
					sleep(1);
					$data = curl_exec($ch);
					if($data === false) {
						return false;
					} else {
						return json_decode($data, true);
					}
				} else {
					return json_decode($data, true);
				}
			} else {
				return json_decode($data, true);
			}
		} else {
			return json_decode($data, true);
		}
	}

}