<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Results extends CI_Controller {


	public function index()
	{
        $student_id=$this->input->get("student_id");
        $this->load->model("result_model");
        $results=$this->result_model->get_result($student_id);
        $data["student_id"]=$student_id;
        $data["results"]=$results;
		$this->load->view('results',$data);
	}


    public function create_result()
    {
        $student_id=$this->input->post("student_id");
        $mathematics=$this->input->post("mathematics");
        $english=$this->input->post("english");
        $kiswahili=$this->input->post("kiswahili");
        $cre=$this->input->post("cre");
        $geography=$this->input->post("geography");
        $history=$this->input->post("history");
        $physics=$this->input->post("physics");
        $chemistry=$this->input->post("chemistry");

        $this->load->model("result_model");
        $this->result_model->create_result($student_id,$mathematics,$english,$kiswahili,$cre,$geography,$history,$physics,$chemistry);

        redirect(base_url("results?student_id=".$student_id));
    }


}
