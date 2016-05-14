<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class County_model extends CI_Model
{


    public function create_county($county_name)
    {

        $site1=$this->load->database("site3",TRUE);
        $data=array(
            "county_name"=>$county_name
        );
        $site1->insert("counties",$data);

    }


     public function update_county($county_id,$county_name)
    {

        $site1=$this->load->database("site3",TRUE);
        $data=array(
            "county_name"=>$county_name
        );
        $site1->where("county_id",$county_id);
        $site1->update("counties",$data);
    }


    public function get_all_counties()
    {
        $site1=$this->load->database("site3",TRUE);

        $result=$site1->get("counties");
        return $result->result();
    }

     public function delete_county($county_id)
    {

        $site1=$this->load->database("site3",TRUE);
        $site1->where("county_id",$county_id);
        $site1->delete("counties");
    }



}