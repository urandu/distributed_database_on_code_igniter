<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Result_model extends CI_Model
{



    public function get_result($student_id)
    {
        $site2=$this->load->database("site2",TRUE);
        $site3=$this->load->database("site3",TRUE);
        $site2->where("student_id",$student_id);
        $site3->where("student_id",$student_id);
        $site2_result=$site2->get("results");
        $site3_result=$site3->get("results");
        if($site2_result->num_rows()>0)
        {
            $site2_result=$site2_result->result()[0];
            $result=array(
                "result_id"=>$site2_result->result_id,
                "student_id"=>$site2_result->student_id,
                "mathematics"=>$site2_result->mathematics,
                "english"=>$site2_result->english,
                "kiswahili"=>$site2_result->kiswahili,
                "cre"=>$site2_result->cre

            );
        }
        else
        {
            $site2_result=array();
        }
        if($site3_result->num_rows()>0)
        {
            $site3_result=$site3_result->result()[0];
            $result["result_id"]=$site3_result->result_id;
            $result["student_id"]=$site3_result->student_id;
            $result["geography"]=$site3_result->geography;
            $result["history"]=$site3_result->history;
            $result["physics"]=$site3_result->physics;
            $result["chemistry"]=$site3_result->chemistry;

        }
        else
        {
            $site3_result=array();
            $result=array();
        }


        //$result=array_merge($site2_result,$site3_result);


        return $result;
    }

    public function create_result($student_id,$mathematics,$english,$kiswahili,$cre,$geography,$history,$physics,$chemistry)
    {
        $site2=$this->load->database("site2",TRUE);
        $site3=$this->load->database("site3",TRUE);
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
         $site2=$this->load->database("site2",TRUE);
         $site3=$this->load->database("site3",TRUE);
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