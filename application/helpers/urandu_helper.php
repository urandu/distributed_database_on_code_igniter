<?php


function UUIDv4() {
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',

        // 32 bits for "time_low"
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),

        // 16 bits for "time_mid"
        mt_rand(0, 0xffff),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand(0, 0x0fff) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand(0, 0x3fff) | 0x8000,

        // 48 bits for "node"
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}




function get_all_counties()
{
    $CI=get_instance();
    $CI->load->model("county_model");
    $counties=$CI->county_model->get_all_counties();

    return $counties;
}


function get_all_schools()
{
    $CI=get_instance();
    $CI->load->model("school_model");
    $schools=$CI->school_model->get_all_schools();

    return $schools;
}

function get_school($school_id)
{
    $CI=get_instance();
    $CI->load->model("school_model");
    $school=$CI->school_model->get_school($school_id);

    return $school[0];
}

function get_county($county_id)
{
    $CI=get_instance();
    $CI->load->model("county_model");
    $county=$CI->county_model->get_county($county_id);

    return $county[0];
}


function get_student($student_id)
{
    $CI=get_instance();
    $CI->load->model("student_model");
    $student=$CI->student_model->get_student($student_id);

    return $student[0];
}

