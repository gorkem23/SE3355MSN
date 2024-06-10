<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anasayfa extends CI_Controller {


	function __construct(){
		parent::__construct();

		$this->load->model("Anasayfa_model");
        $this->load->helper('language');

       // URL segmentinden dili al
	   $lang = $this->uri->segment(1);
	   if ($lang && in_array($lang, ['en', 'tr'])) {
		   $this->session->set_userdata('site_lang', $lang);
	   } else {
		   $lang = $this->session->userdata('site_lang') ? $this->session->userdata('site_lang') : 'en';
	   }
	   load_language($lang);
	}

	function index(){

		$data['index_haber_getir'] = $this->Anasayfa_model->index_haber_getir();
		$data['haber_getir'] = $this->Anasayfa_model->haber_getir();
		$data['kategoriler'] = $this->Anasayfa_model->get_haberler_by_kategori();

		$this->load->view('anasayfa', $data);
	}
}