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





   $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
   $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');

   if ($this->form_validation->run() === FALSE)
   {

     ///echo "Errorrs";

     $this->session->set_flashdata('errors',validation_errors());
     redirect('user/login');

   }

   if($this->UserModel->Auth($email,$password)){
     redirect('user/profile');

   }

   $this->session->set_flashdata('errors','Invalid login details');
   redirect('user/login');


  }

  public function profile(){

    //var_dump($this->UserModel->getUserSession());

    $data['userdata'] = $this->UserModel->find(1);


    $this->load->view('user/profile',$data);

  }

}
