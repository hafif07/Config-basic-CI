<?php 

class First_page extends CI_Controller{
	public function index()
	{
		// $this->load->view("my_home_page");
		$this->load->model("model_santri");
		$data["santri"] = $this->model_santri->get_data();

		$this->load->view("view_santri",$data);
	}
}


 ?>