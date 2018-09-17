<?php
class Ride_model extends CI_Model {

  function get_all() {

    $this->db->select('*,  rides.id AS id_ride');
    $this->db->from('rides');
    $this->db->join('users', 'rides.id_user = users.id');
    $query = $this->db->get();
 //   SELECT r.* FROM `rides` as r INNER JOIN `users` AS u ON r.id_user =u.id
	  return $query->result_array();
  }

  function get_alluser() {
    $user_data= ($this->session->userdata()['user']);
    $user_id = $user_data->id ;

        $this->db->select('*');
        $this->db->from('rides');
        $this->db->where('id_user' ,$user_id );
        $query = $this->db->get();
     //  
        return $query->result_array();
      }
    

  function insert($ride) {
    $this->db->insert('rides', $ride);

    $insert_id = $this->db->insert_id();
 
    return  $insert_id;

  }

  function insert_day($ride_day) {
   return     $this->db->insert('ride_days', $ride_day);
  }

  function selectRide($id){

    $this->db->limit(1)->select('r.*', 'rd.day, rides.id AS id_rday');
    $this->db->from('rides  AS r' );
    $this->db->join('ride_days AS rd', 'r.id = rd.id_ride');

    $this->db->where('r.id' ,$id );
    $query = $this->db->get();
    return $query->result_array();
  /*  $query =  "  SELECT r.*,   rd.day,
    rd.id AS id_rday FROM rides AS r  
    INNER JOIN ride_days AS rd ON r.id = rd.id_ride  WHERE r.id ='".$id."' LIMIT 1; ";

 $result = mysqli_query($query);  
 return $result;
 */

  }

}

