<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data['profile'] = json_decode($this->curl->simple_get($this->config->item('rest_api_default') . '/pages?slug=about-us'),true);
		$data['banner'] = json_decode($this->curl->simple_get($this->config->item('rest_api_inoy') . '/big-banner/?slug=about-us'),true);
		$data['view'] = 'profile/main';
		$this->load->view('template/template', $data);
	}
}
