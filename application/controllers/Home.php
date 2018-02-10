<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller
{

  public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

  public function index()
      {

        $this->load->view('sections/about.php');
        $this->load->view('sections/download.php');
        $this->load->view('sections/gallery.php');
        $this->load->view('sections/contact.php');
        $this->load->view('layers/footer');



      }

}
