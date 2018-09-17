<?php
class User_model extends CI_Model {

  function authenticate($user, $pass) {
    $pass = md5($pass);
    $query = $this->db->get_where('users', array('username' => $user, 'password' => $pass));

	  return $query->result_object();
  }

  function select ($user){
    $query = $this->db->get_where('users', array('username' => $user));
    
        return $query->result_object();
  }
  
  function saveProfile($user)
  {
  return  $this->db->insert('profiles', $user); 
  }

  function selectProfile($user){
    $query = $this->db->get_where('profiles', array('id_user' => $user));
    
        return  $query->row();
  }

  function save($user)
  {
    $user['password']= md5( $user['password']);
    $r = $this->db->insert('users', $user);
    return $r;
  }

  function all()
  {
    $query = $this->db->get('users');

    return $query->result_object();
  }
function delete($user){
  $this->db->where('username', $user);
  $this->db->delete('users');

}

function update($user,$us){


  $this->db->where('username', $us);
  $this->db->update('users', $user);

  return true;

}


}
