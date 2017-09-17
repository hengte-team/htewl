<?php
/**
 * Validate mobile phone
 * @param unknown $mobile
 * @return boolean
 */
function valid_mobile($mobile)
{
	return (!preg_match('/^1[23456789]\d{9}$/', $mobile)) ? FALSE : TRUE;
}

/**
 * Validate email address
 *
 * @access	public
 * @return	bool
 */
function valid_email($address)
{
	return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $address)) ? FALSE : TRUE;
}
