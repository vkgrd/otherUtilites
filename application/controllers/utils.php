<? if(!defined('BASEPATH')) exit('No direct script access allowed'); 

class Utils extends CI_Controller {

	function index()
	{

	}

	function vkClearCache()
	{
		$this->load->model('vk');
	}

}