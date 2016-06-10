<?php

class UserModel extends CI_Model {


  private $_pk = 'id';

  private $_table = 'users';


  public function Auth($email,$password){

    $q = $this->db->select('id,email,password')->where(['email'=>$email,'password' => $password])->limit('1')->get('users');

    $data = $q->row_array();


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

  public function find($id){

    $q = $this->db->where($this->_pk,$id)->get($this->_table);

    if($q){
      return $q->row();
    }

  }



}
