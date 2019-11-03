<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Queue_email extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if (! $this->input->is_cli_request())
			show_404();

		$this->load->library('email');

	}

	public function index()
	{
		// Huh?
		show_404();
	}

	public function send_queue()
	{
		$active_newsletters=$this->db->select('*')
						   ->from('wp_newsletter')
						   ->where("datetime < NOW()")
						   ->where("is_sended", 0)
						   ->get()
						   ->result();

		foreach($active_newsletters as $active_newsletter) {
			$this->email->send_queue($active_newsletter);
		}
	}

	public function retry_queue()
	{
		$this->email->retry_queue();
	}
}

