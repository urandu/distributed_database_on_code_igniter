<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Result_model extends CI_Model
{



    public function get_result($student_id)
    {
        $site2=$this->load->database("kcse_results_site2",TRUE);
        $site3=$this->load->database("kcse_results_site3",TRUE);
        $site2->where("student_id",$student_id);
        $site3->where("student_id",$student_id);
        $site2_result=$site2->get("results");
        $site3_result=$site3->get("results");
        if($site2_result->num_rows()>0)
        {
            $site2_result=$site2_result->result()[0];
        }
        if($site3_result->num_rows()>0)
        {
            $site3_result=$site3_result->result()[0];
        }

        $result=array_merge($site2_result,$site3_result);

        return $result;
    }

    public function create_result($student_id,$mathematics,$english,$kiswahili,$cre,$geography,$history,$physics,$chemistry)
    {
        $site2=$this->load->database("kcse_results_site2",TRUE);
        $site3=$this->load->database("kcse_results_site3",TRUE);
        $result_id=UUIDv4();
        $data1=array(
            "student_id"=>$student_id,
            "mathematics"=>$mathematics,
            "english"=>$english,
            "kiswahili"=>$kiswahili,
            "cre"=>$cre,
            "result_id"=>$result_id
        );
        $site2->insert("results",$data1);
        $data2=array(
            "student_id"=>$student_id,
            "geography"=>$geography,
            "history"=>$history,
            "physics"=>$physics,
            "chemistry"=>$chemistry,
            "result_id"=>$result_id
        );
        $site3->insert("results",$data2);
    }



     public function update_result($result_id,$student_id,$mathematics,$english,$kiswahili,$cre,$geography,$history,$physics,$chemistry)
     {
         $site2=$this->load->database("kcse_results_site2",TRUE);
         $site3=$this->load->database("kcse_results_site3",TRUE);
         $data1=array(
             "student_id"=>$student_id,
             "mathematics"=>$mathematics,
             "english"=>$english,
             "kiswahili"=>$kiswahili,
             "cre"=>$cre,
             "result_id"=>$result_id
         );
         $site2->where("result_id",$result_id);
         $site2->update("results",$data1);
         $data2=array(
             "student_id"=>$student_id,
             "geography"=>$geography,
             "history"=>$history,
             "physics"=>$physics,
             "chemistry"=>$chemistry,
             "result_id"=>$result_id
         );
         $site3->where("result_id",$result_id);
         $site3->update("results",$data2);
     }




    public function delete_result($result_id)
    {
        $site2=$this->load->database("kcse_results_site2",TRUE);
        $site3=$this->load->database("kcse_results_site3",TRUE);
        $site2->where("result_id",$result_id);
        $site2->delete("results");
        $site3->where("result_id",$result_id);
        $site3->delete("results");
    }



}