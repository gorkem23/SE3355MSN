<?php
class Anasayfa_model extends CI_Model{

	function index_haber_getir(){
		$this->db->select("*");
		$this->db->order_by('id','desc');
		$this->db->where('vitrin', 'evet');
		return $this->db->get('haberler');
	}

	function haber_getir(){
		$this->db->select("*");
		$this->db->order_by('id','desc');
		$this->db->where('vitrin !=', 'evet');
		return $this->db->get('haberler');
	}

	public function get_haberler_by_kategori() {
        // Tüm kategorileri al
        $kategoriler = $this->db->get('haberler_kategori')->result_array();

        // Her kategoriye ait haberleri al
        foreach ($kategoriler as &$kategori) {
            $this->db->where('cat_id', $kategori['id']);
            $kategori['haberler'] = $this->db->get('haberler')->result_array();
        }

        return $kategoriler;
    }
}
?>