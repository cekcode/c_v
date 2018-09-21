<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public $app = 'frontend/cores/layouts/app';

	public function index()
	{
		$data = [
			'title' => 'Frontend Rumah Sakit Brayat Minulya',
		];

		$this->load->view($this->app, $data);
	}
}
