<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('load_language'))
{
    function load_language($lang = 'en')
    {
        $CI =& get_instance();
        $CI->lang->load('site', $lang);
    }
}
?>
