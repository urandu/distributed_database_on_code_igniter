<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
        $this->load->model("student_model");
        $students=$this->student_model->get_all_students();
        $data["students"]=$students;
		$this->load->view('welcome_message',$data);
	}
}
