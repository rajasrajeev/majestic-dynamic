<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function getUserName($userCode)
    {
		$CI = &get_instance();
		$CI->load->model('User_model');
		// Call a function in your model to get the user's name
		$userName = $CI->User_model->getUserName($userCode);

		return $userName;
    }
    function getPurchaseDate($userCode)
    {
		$CI = &get_instance();
		$CI->load->model('User_model');
		// Call a function in your model to get the user's name
		$userName = $CI->User_model->getLastPurchaseDate($userCode);

		return $userName;
    }
    function getExpiryDate($userCode)
    {
		$CI = &get_instance();
		$CI->load->model('User_model');
		// Call a function in your model to get the user's name
		$userName = $CI->User_model->getLastExpiryDate($userCode);

		return $userName;
    }
}
