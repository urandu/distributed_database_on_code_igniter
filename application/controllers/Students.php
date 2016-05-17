<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {


	public function index()
	{
        $this->load->model("student_model");
        $students=$this->student_model->get_all_students();
        $data["students"]=$students;
		$this->load->view('students',$data);
	}


    public function create_student()
    {
        $student_first_name=$this->input->post("student_first_name");
        $student_last_name=$this->input->post("student_last_name");
        $school_id=$this->input->post("school_id");
        $this->load->model("student_model");
        $this->student_model->create_student($school_id,$student_first_name,$student_last_name);

        redirect(base_url("students"));
    }


}
