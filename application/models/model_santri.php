<?php 

class Model_santri extends CI_Model{
	public function get_data()
	{
		return $this->db->get("santri")->result_array();
	}
}

 ?>