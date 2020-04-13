<?php

function upload_tour_package_image($filename) {
//  upload material

    $CI = & get_instance();
    $config['upload_path'] = 'upload/images/tour_packages/';
    if (!is_dir($config['upload_path'])) {
        mkdir($config['upload_path'], 0777, TRUE);
    }

    $config['allowed_types'] = 'jpg|jpeg|png';
    $CI->load->library('upload', $config);

    if ($CI->upload->do_upload($filename)) {
        $uploaded_data = $CI->upload->data();
        $image = $config['upload_path'] . $uploaded_data['file_name'];
        return $image;
    } else {
        return false;
    }
}
function upload_tour_category_image($filename) {
//  upload material

    $CI = & get_instance();
    $config['upload_path'] = 'upload/images/category/';
    if (!is_dir($config['upload_path'])) {
        mkdir($config['upload_path'], 0777, TRUE);
    }

    $config['allowed_types'] = 'jpg|jpeg|png';
    $CI->load->library('upload', $config);

    if ($CI->upload->do_upload($filename)) {
        $uploaded_data = $CI->upload->data();
        $image = $config['upload_path'] . $uploaded_data['file_name'];
        return $image;
    } else {
        return false;
    }
}
function upload_room_image($filename) {
//  upload material

    $CI = & get_instance();
    $config['upload_path'] = 'upload/images/room/';
    if (!is_dir($config['upload_path'])) {
        mkdir($config['upload_path'], 0777, TRUE);
    }

    $config['allowed_types'] = 'jpg|jpeg|png';
    $CI->load->library('upload', $config);

    if ($CI->upload->do_upload($filename)) {
        $uploaded_data = $CI->upload->data();
        $image = $config['upload_path'] . $uploaded_data['file_name'];
        return $image;
    } else {
        return false;
    }
}
function upload_gallery_image($filename) {
//  upload material

    $CI = & get_instance();
    $config['upload_path'] = 'upload/images/gallery_image/';
    if (!is_dir($config['upload_path'])) {
        mkdir($config['upload_path'], 0777, TRUE);
    }

    $config['allowed_types'] = 'jpg|jpeg|png';
    $CI->load->library('upload', $config);

    if ($CI->upload->do_upload($filename)) {
        $uploaded_data = $CI->upload->data();
        $image = $config['upload_path'] . $uploaded_data['file_name'];
        return $image;
    } else {
        return false;
    }
}




function remove_file($file) {
    if ($file != null && $file != '' && file_exists($file)) {
        unlink($file);
    }
}
