<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/libraries/simplexlsx.class.php';
require_once APPPATH . '/libraries/xlsxwriter.class.php';

class Update extends CI_Controller {


	public function index()
	{
        $this->data['title'] = "JLPT";
        $this->load->view('update');
        $this->load->model('Update_model');
        $this->Update_model->getFile();
		
		
	}
}
