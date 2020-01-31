<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gokkast extends CI_Controller
{
    public function index()
    {
        $this->load->library("GokkastLib", ["rollen" => 3, "nummers" => 2]);

        $rollen = $this->gokkastlib->slotnumbers();
        $win = $this->gokkastlib->won ? "U heeft gewonnen" : "U heeft verloren";
        $winID = $this->gokkastlib->won ? "win" : "verlies";

        $this->load->view("gokkast", [
            "rollen" => $rollen,
            "win" => $win,
            "winID" => $winID
        ]);
    }
}
