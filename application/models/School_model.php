<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class School_model extends CI_Model
{

    public function create_school($county_id,$school_name)
    {

        if($county_id%2==0)
        {
            $site=$this->load->database("site1",TRUE);
        }
        else
        {
            $site=$this->load->database("site2",TRUE);
        }

        $data=array(
            "school_id"=>UUIDv4(),
            "school_name"=>$school_name,
            "school_county_id"=>$county_id
        );
        $site->insert("school",$data);

    }


    public function get_all_schools()
    {
        $site1=$this->load->database("site1",TRUE);
        $site2=$this->load->database("site2",TRUE);
        $site1_result=$site1->get("school");
        $site2_result=$site2->get("school");
        if($site1_result->num_rows()>0)
        {
            $site1_result=$site1_result->result();
        }
        else
        {
            $site1_result=array();
        }
        if($site2_result->num_rows()>0)
        {
            $site2_result=$site2_result->result();
        }
        else
        {

            $site2_result=array();
        }

        $result=array_merge($site1_result,$site2_result);

        return $result;
    }

    public function update_school($county_id,$school_id,$school_name)
    {


            $site1=$this->load->database("site1",TRUE);

            $site2=$this->load->database("site2",TRUE);


        $data=array(
            "school_name"=>$school_name,
            "school_county_id"=>$county_id
        );
        $site1->where("school_id",$school_id);
        $site1->update("school",$data);
        $site2->where("school_id",$school_id);
        $site2->update("school",$data);
    }


    public function delete_school($school_id)
    {

        $site1=$this->load->database("site1",TRUE);

        $site2=$this->load->database("site2",TRUE);

        $site1->where("school_id",$school_id);
        $site1->delete("school");
        $site2->where("school_id",$school_id);
        $site2->delete("school");
    }




}