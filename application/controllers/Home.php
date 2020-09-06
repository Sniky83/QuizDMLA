<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        if(isset($_POST["flash"]) && !empty($_POST["flash"]))
            echo "<h1>".$_POST['flash']."</h1>";

        $this->load->view('home_index');
    }
}
