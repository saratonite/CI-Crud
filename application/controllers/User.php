<?php

class User extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('UserModel');
  }


  public function login(){


    $this->load->view('user/login');

  }

  public function proccess_login(){

    $this->load->library('form_validation');

    $email = $this->input->post('email');

    $password = $this->input->post('password');



    $this->UserModel->Auth($email,$password);

   $this->form_validation->set_rules('email', 'Email', 'required');
   $this->form_validation->set_rules('password', 'Password', 'required');

   if ($this->form_validation->run() === FALSE)
   {

     echo "Errorrs";

   }

    var_dump($this->input->post());
  }

  public function profile(){

    var_dump($this->UserModel->getUserSession());

  }

}
