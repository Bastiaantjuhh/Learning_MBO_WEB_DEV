<?php
class Model extends CI_Model
{
	public function get()
	{
		$query = $this->db->get("user");
		return $query->result();
	}
}
