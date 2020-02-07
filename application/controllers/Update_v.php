<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/libraries/simplexlsx.class.php';
require_once APPPATH . '/libraries/xlsxwriter.class.php';

class Update_v extends CI_Controller {


	public function index()
	{
        $this->data['title'] = "JLPT";
        $this->load->view('update');
		
	}
}
