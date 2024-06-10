<?php class Uyelik extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Uye_model');
        $this->load->helper(array('form', 'url', 'language'));
        $this->load->library('form_validation');

		// URL segmentinden dili al
		$lang = $this->uri->segment(1);
		if ($lang && in_array($lang, ['en', 'tr'])) {
			$this->session->set_userdata('site_lang', $lang);
		} else {
			$lang = $this->session->userdata('site_lang') ? $this->session->userdata('site_lang') : 'en';
		}
		load_language($lang);
    }

	public function cikis() {
		
		$this->session->unset_userdata('kullanici_id');
		$this->session->unset_userdata('kullanici_adsoyad');
		
		redirect($this->session->userdata('site_lang').'/giris');
	}


	public function giris() {
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('email', 'E-Posta', 'required|valid_email');
			$this->form_validation->set_rules('sifre', 'Şifre', 'required');

			if ($this->form_validation->run() == FALSE) {

				$this->load->view('giris');
			} else {

				$email = $this->input->post('email');
				$sifre = $this->input->post('sifre');


				$kullanici = $this->Uye_model->giris_yap($email, $sifre);

				if ($kullanici) {
					$this->session->set_userdata('kullanici_id', $kullanici->id);
					redirect('anasayfa');
				} else {

					$data['hata'] = 'E-posta veya şifre yanlış.';
					$this->load->view('giris', $data);
				}
			}
		} else {

			$this->load->view('giris');
		}
	}

    public function uye_ol() {

        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            $this->form_validation->set_rules('ad', 'Ad', 'trim|required');
            $this->form_validation->set_rules('soyad', 'Soyad', 'required');
			$this->form_validation->set_rules('email', 'E-Mail', 'required|valid_email|is_unique[uyelik.email]');
			$this->form_validation->set_rules('ulke', 'Ülke', 'trim');
            $this->form_validation->set_rules('sehir', 'Şehir', 'trim');
            $this->form_validation->set_rules('sifre', 'Şifre', 'required');
			$this->form_validation->set_rules('sifre_tekrar', 'Şifre Tekrar', 'trim|required|matches[sifre]');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('uye_ol');
            } else {

                $user = array(
                    'ad'    => $this->input->post('ad'),
                    'soyad' => $this->input->post('soyad'),
					'email' => $this->input->post('email'),
					'ulke'  => $this->input->post('ulke'),
					'sehir' => $this->input->post('sehir'),
                    'sifre' => password_hash($this->input->post('sifre'), PASSWORD_BCRYPT)
                );

                $this->Uye_model->uye_ol($user);
                $this->load->view('giris');
            }
        } else {
            $this->load->view('uye_ol');
        }
    }
}

?>
