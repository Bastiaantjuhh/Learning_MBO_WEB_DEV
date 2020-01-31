<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulier extends CI_Controller
{
    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->view('formulier');
    }

    public function post()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('naam', 'naam', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('mening', 'mening', 'required');

        if ($this->form_validation->run() == true) {
            $this->load->view('formulier_post');
            $this->load->database();

            $sql =
                "INSERT INTO formulier (naam, email, bericht) VALUES (" .
                $this->db->escape($_POST['naam']) .
                ", " .
                $this->db->escape($_POST['email']) .
                ", " .
                $this->db->escape($_POST['mening']) .
                ")";

            $this->db->query($sql);

            if ($this->db->affected_rows() === 1) {
                echo "<p>Uw gegevens zijn successvol verstuurd</p>";
            }
        } else {
            $this->load->view('formulier_post_onjuist');
        }
    }

    public function resultaten()
    {
        $this->load->model("model");

        $r["data"] = $this->model->get();

        $this->load->view("formulier_resultaten", $r);
    }
}
?>
