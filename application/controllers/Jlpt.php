<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jlpt extends CI_Controller {


	public function index()
	{
		$this->load->model('Xlsx_reader');
		$this->data['title'] = "JLPT";
		$this->data['sheet'] = $this->Xlsx_reader->getKanji("Kanji_N4_edit.xlsx");
		// $this->data['sheet'] = $sheet;
		$this->load->view('jlpt', $this->data);
		
		
	}
}
