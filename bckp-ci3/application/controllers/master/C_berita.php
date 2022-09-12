<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_berita extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("master/M_berita");
    }

	//Halaman C_shipment
	public function index()
	{
		// $data['navlocation'] = $this->M_nav->getNav();
		$data['title'] = 'Insert Content Berita';
		// $this->load->view('/v_head',$data);
        // $this->data['page'] = '/master/V_berita';
		$this->load->view('/master/V_berita');
		// $this->load->view('admin/layout/v_nav',$data);
		// $this->load->view('admin/layout/v_footer');
	}

    // NEW REPORTING //
    public function savedata()
    {
        $now = date('Y-m-d H:i:s');
        
        // $data['created_by']             = $this->session->userdata('created_by');
        // $data['email']                  = $this->session->userdata('email');
        $data['isi_berita']             = isset($_POST['isi_berita']) ? $_POST['isi_berita']: NULL;
        $data['file_berita']            = isset($_POST['waybill_number']) ? $_POST['waybill_number']: NULL;
        
        $savedata = $this->M_finance_settlement->savedata($data);

        // if($savedata == "Success")
        // {
        //     $this->session->set_flashdata('flash', 'BERHASIL');
        // }
        // else
        // {
        //     $this->session->set_flashdata('flash', 'failed '.$savedata);
        // }

        redirect('admin/C_reporting');
    }
    // END OF NEW REPORTING //
}
