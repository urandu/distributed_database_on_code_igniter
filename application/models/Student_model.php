<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Student_model extends CI_Model
{
    public function create_student($school_id,$student_first_name,$student_last_name)
    {
        $site1=$this->load->database("kcse_results_site1",TRUE);
        $data=array(
            "school_id"=>$school_id,
            "student_first_name"=>$student_first_name,
            "student_last_name"=>$student_last_name
        );
        $site1->insert("students",$data);
    }
    public function update_student($student_id,$school_id,$student_first_name,$student_last_name)
    {

        $site1=$this->load->database("kcse_results_site1",TRUE);
        $data=array(
            "school_id"=>$school_id,
            "student_first_name"=>$student_first_name,
            "student_last_name"=>$student_last_name
        );
        $site1->where("student_id",$student_id);
        $site1->update("students",$data);
    }
    public function delete_student($student_id)
    {

        $site1=$this->load->database("kcse_results_site1",TRUE);

        $site1->where("student_id",$student_id);
        $site1->delete("students");

    }





}