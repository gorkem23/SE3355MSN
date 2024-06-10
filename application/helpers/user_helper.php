<?php
function get_user_id() {
    $CI =& get_instance();
    $CI->load->helper('cookie');

    $user_id = get_cookie('user_id');
    if (!$user_id) {
        $user_id = uniqid();
        set_cookie('user_id', $user_id, 86400 * 365); 
    }

    return $user_id;
}
?>
