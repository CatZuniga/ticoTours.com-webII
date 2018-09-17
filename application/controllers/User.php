<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function login()
	{
		$this->load->library('form_validation'); 
		$this->load->view('users/login');
	
	
	}

  public function create()
  {
    $this->load->view('users/create');
  }

  /**
	 * This method will save a new user
	 */
	public function save() {
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$phone = $this->input->post('phone');


		 $rPass= $this->input->post('confirmpw');    
		
	if ($username==""||$pass==""){  
		echo '<script language="javascript">alert("Complete the fields correctly");</script>'; 
		$this->login();
	
		}else if ($pass !== $rPass){
			echo '<script language="javascript">alert("Please check your password and try again.");</script>'; 
			$this->login();
	}
	else{

    $user = array(
        'username' => $username,
        'first_name' => $first_name,
				'last_name' => $last_name,
			   'phone' => $phone,
				'password'=> $pass
      );

			$this->load->model('User_model');
    $r = $this->User_model->save($user);

		if($r) {

     // $this->session->set_flashdata('message','User saved');
		//	redirect('usuario/listado');
		$this->login();

		} else {
    //  $this->session->set_flashdata('message','There was an error saving the user');
			//redirect('usuario/crear');
			var_dump($user);
		}
	}
}

  /**
	 * This method will take username/password to authenticate from params
	 */
	function login_validation()  
	{  
			 $this->load->library('form_validation');  
			 $this->form_validation->set_rules('usernameLogin', 'Username', 'required');  
			 $this->form_validation->set_rules('password', 'Password', 'required');  
			 if($this->form_validation->run())  
			 {  
						//true  
						$username = $this->input->post('usernameLogin');  
						$password = $this->input->post('password');  
						//model function  
						$this->load->model('user_model');  
						$r=$this->user_model->authenticate($username, $password); 
						
				
if(sizeof($r) > 0) {
	$data= array(
		'user' => $r[0],
		'login' => TRUE

	);
	 $this->session->set_userdata($data);
	
	redirect('/main');
//	var_dump($this->session->userdata('login'));

//	var_dump($this->session->userdata());

} else {
	 $this->session->set_flashdata('error', 'Password or Username invalid');
	// redirect('/');
	$this->login();  
} 
			 }  
			 else  
			 {  
						//false  
						$this->login();  
				//		echo ('fatal');
			 }  
	}  
  /**
	 * This method will list all existing users
	 */

	public function logout() {
		
		$this->session->sess_destroy();
	
		redirect('/main');
			}
		


	public function index() {

    $r = $this->User_model->all();

    $data['users'] = $r;
    $data['title'] = 'List of Users';

		$this->load->view('users/index', $data);
	}

	/*public function action(){

	var_dump(key($_POST['profile']));
		if (isset($_POST['profile'])) {
			
							$this->profile(key($_POST['profile']));
			
					 } else if (isset($_POST['update'])) {

						$r = key($_POST['update']);

						$user = $this->User_model->select($r);

						$data['user'] = $user;
						$data['username'] =$r;
						
						
						$this->load->view('users/update',$data);
			
					 }
	}


	public function profile($user){
	
    $r = $this->User_model->select($user);
	$this->load->helper('utils_helper');
	createModal($user);

	}
*/
	public function profileSave(){
		$user_data= ($this->session->userdata()['user']);
		
			$id = $user_data->id;

		$fullname = $this->input->post('fullname');
		$speed = $this->input->post('speed');
		$about = $this->input->post('about');
		
		
		$config['upload_path'] = 'assets/upload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		if(!$this->upload->do_upload()){
		   /*Si al subirse hay algún error lo meto en un array para pasárselo a la vista*/
				   $error=array('error' => $this->upload->display_errors());
			   var_dump($error);
			   //  echo "<script>jQuery(function(){swal(\"¡Ooh!\", \"$error\", \"error\");});</script>";
   }else{
	  $datos["img"]=$this->upload->data();
		$photo =$datos["img"]["file_name"];
	   
		$userProfile = array(
			'id_user'=> $id,
			'fullname' => $fullname,
			'speed' => $speed,
			'about' => $about,
			'photo' => $photo,
		
			);
 
			$result=$this->User_model->saveProfile($userProfile);

			if($result){

				redirect('ride');
			}else{
				var_dump('upps');
			}
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
