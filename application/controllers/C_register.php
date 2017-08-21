<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_register extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    // }

  public function tampilRegister(){
    $this->load->view('register');
  }

 }