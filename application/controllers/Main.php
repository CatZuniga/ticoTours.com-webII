<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


	public function __construct()
	{
        parent::__construct();
        $this->load->model('Ride_model');
     
	}

	public function index()
	{
		
		$data['rides'] = $this->Ride_model->get_all();
		$this->load->view('main',$data);
    }
    
    public function show($rides)
    {
     
      $data['rides'] =$rides;
      $this->load->view('main',$data);
      }
      


  function search(){
     $from = $this->input->post('from');
     $to = $this->input->post('to');

     if($from == "" || $to == ""){

        echo '<script language="javascript">alert("Complete the fields correctly");</script>'; 
       $this->index();
     }else{
    
    $allRides = $this->Ride_model->get_all();

      if($allRides>0){
      
       foreach($allRides as $ride){
       
        if (strtoupper($from)== strtoupper($ride['start']) && strtoupper($to) == strtoupper($ride['end'])) {
          
            $array[] = $ride;     
          
        }

       }
$this->show($array);

          }
  }




    }
  }



