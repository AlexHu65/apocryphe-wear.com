<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

  function __construct($page = 'home')
    {
    parent::__construct();
    //return controller parent
    $this->load->view('layers/header');
    $this->load->helper('url');

  }
}
