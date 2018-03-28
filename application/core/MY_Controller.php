<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_BaseController extends CI_Controller
{

  function __construct($page = 'home')
    {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('directory'); //load directory helper
    //return controller parent
    $this->load->view('layers/header');



  }
}
