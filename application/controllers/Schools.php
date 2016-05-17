<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schools extends CI_Controller {


	public function index()
	{
        $this->load->model("school_model");
        $schools=$this->school_model->get_all_schools();
        $data["schools"]=$schools;
		$this->load->view('schools',$data);
	}


    public function create_school()
    {
        $school_name=$this->input->post("school_name");
        $county_id=$this->input->post("county_id");
        $this->load->model("school_model");
        $this->school_model->create_school($county_id,$school_name);

        redirect(base_url("schools"));
    }


}
