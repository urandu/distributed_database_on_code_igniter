<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Counties extends CI_Controller {


	public function index()
	{
        $this->load->model("county_model");
        $counties=$this->county_model->get_all_counties();
        $data["counties"]=$counties;
		$this->load->view('counties',$data);
	}


    public function create_county()
    {
        $county_name=$this->input->post("county_name");
        $this->load->model("county_model");
        $this->county_model->create_county($county_name);

        redirect(base_url("counties"));
    }


}
