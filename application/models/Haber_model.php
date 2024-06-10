<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Haber_model extends CI_Model {

    function haberGetir(){

		$this->db->select("*");
		$this->db->order_by("id", "asc");
		return $this->db->get("haberler");
	}

	function detayGetir($data=array()){

		$this->db->select("*");
		if (isset($data["id"])) $this->db->where("id", $data["id"]);
		$this->db->order_by("id", "asc");
		return $this->db->get("haberler");
	}

	public function update_likes($news_id, $user_id) {

        $this->db->where(array('user_id' => $user_id, 'news_id' => $news_id));
        $query = $this->db->get('user_likes');

        if ($query->num_rows() == 0) {

            $this->db->insert('user_likes', array('user_id' => $user_id, 'news_id' => $news_id));

            $this->db->delete('user_dislikes', array('user_id' => $user_id, 'news_id' => $news_id));

            $this->db->set('likes', 'likes+1', FALSE);
            $this->db->set('dislikes', 'dislikes-1', FALSE);
            $this->db->where('id', $news_id);
            return $this->db->update('haberler');
        }

        return false;
    }

    public function update_dislikes($news_id, $user_id) {

        $this->db->where(array('user_id' => $user_id, 'news_id' => $news_id));
        $query = $this->db->get('user_dislikes');

        if ($query->num_rows() == 0) {

            $this->db->insert('user_dislikes', array('user_id' => $user_id, 'news_id' => $news_id));

            $this->db->delete('user_likes', array('user_id' => $user_id, 'news_id' => $news_id));

            $this->db->set('likes', 'likes-1', FALSE);
            $this->db->set('dislikes', 'dislikes+1', FALSE);
            $this->db->where('id', $news_id);
            return $this->db->update('haberler');
        }

        return false;
    }

    public function arama_yap($kelime) {
        $this->db->like('baslik_tr', $kelime);
        $this->db->or_like('aciklama_tr', $kelime);
        $query = $this->db->get('haberler');
        return $query->result();
    }
}