<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

    public $app = 'backend/cores/layouts/app';

	public function index()
	{
		$data = [
			'title' => 'Backend Rumah Sakit Brayat Minulya',
		];

		$this->load->view($this->app, $data);
	}
}
