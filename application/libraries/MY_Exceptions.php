<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MY_Exceptions extends CI_Exceptions {

    public function show_404($page = '', $log_error = TRUE)
    {   
    	$CI = & get_instance();
    	$CI->util->error_404(); 		
    }
}