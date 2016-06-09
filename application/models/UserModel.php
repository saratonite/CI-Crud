<?php

class UserModel extends CI_Model {


  public function Auth($email,$password){

    $q = $this->db->select('email,password')->where(['email'=>$email,'password' => $password])->limit('1')->get('users');

    $data = $q->result();


    if($this->db->count_all_results() == 1){

      $this->setUserSession($data);
      return $data;

    }

    return false;

  }

  public function setUserSession($userData){

    unset($userData['password']);

    $this->session->set_userdata('user',$userData);

  }

  public function getUserSession(){

    return $this->session->userdata('user');

  }

  public function logout(){
    $this->session->unset('user');
  }



}
