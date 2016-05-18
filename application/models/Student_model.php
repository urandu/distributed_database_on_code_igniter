<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Student_model extends CI_Model
{
    public function create_student($school_id,$student_first_name,$student_last_name)
    {


        $site1=$this->load->database("site1",TRUE);

        $site1->where("school_id",$school_id);

        $test=$site1->get("school");

        if($test->num_rows() > 0)
        {

        }
        else
        {
            $site1=$this->load->database("site2",TRUE);
        }


        $data=array(
            "student_id"=>UUIDv4(),
            "school_id"=>$school_id,
            "student_first_name"=>$student_first_name,
            "student_last_name"=>$student_last_name
        );
        $site1->insert("students",$data);
    }
    public function update_student($student_id,$school_id,$student_first_name,$student_last_name)
    {

        $site1=$this->load->database("site1",TRUE);
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

        $site1=$this->load->database("site1",TRUE);

        $site1->where("student_id",$student_id);
        $site1->delete("students");

    }


    public function get_all_students()
    {
        $site1=$this->load->database("site1",TRUE);
        $site2=$this->load->database("site2",TRUE);
        $result=$site1->get("students");
        $result2=$site2->get("students");
        return array_merge($result->result(),$result2->result());
    }


    public function get_student($student_id)
    {
        $site1=$this->load->database("site1",TRUE);
        $site2=$this->load->database("site2",TRUE);
        $site1->where("student_id",$student_id);
        $site2->where("student_id",$student_id);
        $result=$site1->get("students");
        $result2=$site2->get("students");
        return array_merge($result->result(),$result2->result());
    }



}