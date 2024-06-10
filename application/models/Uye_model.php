<?php

class Uye_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function uye_ol($uye) {
        return $this->db->insert('uyelik', $uye);
    }

    public function giris_yap($email, $sifre) {

        $query = $this->db->get_where('uyelik', array('email' => $email));


        if ($query->num_rows() == 1) {
            $kullanici = $query->row();
            if (password_verify($sifre, $kullanici->sifre)) {

                $kullanici_adsoyad = $kullanici->ad . ' ' . $kullanici->soyad;
                $this->session->set_userdata('kullanici_id', $kullanici->id);
                $this->session->set_userdata('kullanici_adsoyad', $kullanici_adsoyad);
                return $kullanici;
            }
        }

        // Kullanıcı bulunamadı veya şifre yanlışsa null döndür
        return null;
    }
}

?>