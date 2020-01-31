<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulier extends CI_Controller
{
	public function index()
	{
		$this->load->database();

		$this->load->model("model");

		$r["data"] = $this->model->get();

		$this->load->helper(array('form', 'url'));
		$this->load->view('formulier_view', $r);
	}

	public function post()
	{
		$this->load->view('formulier_post_view');
		$this->load->database();

		$sql =
			"INSERT INTO post (iduserFrom, iduserTo, content) VALUES (" .
			$this->db->escape($_POST['van']) .
			", " .
			$this->db->escape($_POST['aan']) .
			"," .
			$this->db->escape($_POST['bericht']) .
			")";
		$this->db->query($sql);
	}
}
