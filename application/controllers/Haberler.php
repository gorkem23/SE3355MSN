<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Haberler extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model("Haber_model");
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

		$data['haber_getir']   = $this->Haber_model->haberGetir();

		$this->load->view('haberler', $data);
	}

	function detay($id){
		$id = (int) $id;

		$kayit				  = $this->Haber_model->detayGetir(array("id" => $id));
		$data["haber_icerik"] = $kayit;

		$this->load->view('haber_detay', $data);
	}

	public function arama() {
        $kelime = $this->input->post('arama_kelime');
        $data['sonuclar'] = $this->Haber_model->arama_yap($kelime);
        $this->load->view('arama', $data);
    }

	public function like($id) {
        $user_id = get_user_id(); 
        $result = $this->Haber_model->update_likes($id, $user_id);
        echo json_encode(['success' => $result]);
    }

    public function dislike($id) {
        $user_id = get_user_id(); 
        $result = $this->Haber_model->update_dislikes($id, $user_id);
        echo json_encode(['success' => $result]);
    }
}