<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ride extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ride_model');
			
	}

/*	public function index()
	{
		// acceso al Modelo
		echo $this->config->item('google_key');
		die;
		$this->load->model('Ride_model');
		$data['rides'] = $this->Ride_model->get_all();
		$this->load->view('rides/index', $data);
	}
*/

public function index()
{
	$data['rides'] = $this->Ride_model->get_alluser();
	$user_data= ($this->session->userdata()['user']);
	$id = $user_data->id;
	$this->load->model('User_model');
	$data['profile'] =  $this->User_model->selectProfile($id);
	
	$this->load->view('dashboard',$data);
}

public function profileSettings()
{
	$user_data= ($this->session->userdata()['user']);
	$id = $user_data->id;
	$this->load->model('User_model');
	$data['profile'] =  $this->User_model->selectProfile($id);
	$this->load->view('users/settings',$data);
}


	public function show($id)
	{
		echo $this->config->item('google_key');
		die;
		$data['ride_id'] = $id;
		$this->load->view('rides/show', $data);
	}

	public function createRide()
	{
		$user_data= ($this->session->userdata()['user']);
		$id = $user_data->id;
		$this->load->model('User_model');
		$data['profile'] =  $this->User_model->selectProfile($id);
		
	
		$this->load->view('rides',$data);
	}


	
	public function save() {
		$user_data= ($this->session->userdata()['user']);
	
		$id = $user_data->id;
		$name = $this->input->post('name');
		$start = $this->input->post('start');
		$end = $this->input->post('end');
		$description= $this->input->post('description');
		$departure = $this->input->post('departure');
		$arrival = $this->input->post('arrival');

				
	if ($name==""|| $start==""){  
		echo '<script language="javascript">alert("Complete the fields correctly");</script>'; 
		$this->createRide();
	}else{
	
		$ride = array(
			'id_user' => $id,
 			'name' => $name,
			'start' => $start,
			'end' => $end,
			'description' => $description,
			'departure'=> $departure,
			'arrival' => $arrival
		  );


	$this->load->model('Ride_model');

	$id_ride = $this->Ride_model->insert($ride);

	if ($id_ride){

		if(isset($_POST['submit'])){
			var_dump("hola");
			if(!empty($_POST['check_day'])) {
			// Counting number of checked checkboxes.
			$checked_count = count($_POST['check_day']);
			
			echo '<script language="javascript">alert("You have selected following "'.$checked_count.'" option(s):");</script>'; 
			// Loop to store and display values of individual checked checkbox.
			foreach($_POST['check_day'] as $selected) {
			echo "<p>".$selected ."</p>";
			$ride_day = array(
				'id_ride' => $id_ride,
				 'day' => $selected 
			  );
		$result=$this->Ride_model->insert_day($ride_day);
				 
			}
			
			}
			else{
			
			echo '<script language="javascript">alert("Please Select Atleast One Option.");</script>'; 
			}
		}
	}
	}
		/*if($result) {
			$this->session->set_flashdata('message', 'The Ride was inserted properly');
			redirect('ride');
		}
		*/
		
	}



	public function del_Upd(){
		if (isset($_POST['delete'])) {
			
							$this->delete(key($_POST['delete']));
			
					 } else if (isset($_POST['update'])) {

						$r = key($_POST['update']);

						$ride = $this->Ride_model->selectRide($r);

						
						$data['ride'] =$ride;

						$user_data= ($this->session->userdata()['user']);
						$id = $user_data->id;
						$this->load->model('User_model');
						$data['profile'] =  $this->User_model->selectProfile($id);
						
						
						$this->load->view('rides/edit',$data);
			
					 }
	}

	public function delete(	$user){
		
		$r = $this->User_model->select($user);
			
					if(sizeof($r) > 0) {
					
						$this->User_model->delete($user);
	
						echo "usuario eliminado";
					} else {
					
						echo "Not valid user";
					}
		}
	
	
		public function update(){
			$us =$this->uri->segment(3);
			
		echo $us;
			$username = $this->input->post('username');
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
	
		$user = array(
			'username' => $username,
			'first_name' => $first_name,
					'last_name' => $last_name
		  );
	
	
		$r = $this->User_model->update($user,$us);
	
			if($r) {
				redirect('usuario/listado');
			} 
	
		}
	


}
