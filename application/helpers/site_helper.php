<?php 

function getSEOData(){

    // Get a reference to the controller object
    $CI = get_instance();

    $CI->load->model('seo_model');

    $meta_data = $CI->seo_model->get_seo();
    return $meta_data;

}

?>