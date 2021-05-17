<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Informasi extends CI_Controller {

    public function index()
	{
		$data['kuota'] = $this->M_ppdb->tampil_data_kuota();
		$this->load->view('informasi',$data);


	}

	public function kelulusan()
	{
		$data['kelulusan'] = $this->M_ppdb->tampilinfolulus()->result();
		$this->load->view('kelulusan',$data);


	}

}

?>