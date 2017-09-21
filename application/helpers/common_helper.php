 <?php
function js($dirname, $file_name, $version=1.0)
{
	echo '<script type="text/javascript" src="'.$dirname.'/js/'.$file_name.'.js?v='.$version.'"></script>';
}

function css($dirname, $file_name, $version=1.0)
{
	echo '<link rel="stylesheet" type="text/css" href="'.$dirname.'/css/'.$file_name.'.css?v='.$version.'"/>';
}

function pr($data)
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}

function redirectAction($uri = '', $method = 'location', $http_response_code = 302)
{
	if (!preg_match('#^https?://#i', $uri)) {
		$uri = base_url($uri);
	}

	switch($method) {
		case 'refresh' :
			header("Refresh:0;url=".$uri);
			break;
		default :
			header("Location: ".$uri, TRUE, $http_response_code);
			break;
	}exit;
}



/**
 * 只保留字符串首尾字符，隐藏中间用*代替（两个字符时只显示第一个）
 * @param string $user_name 姓名
 * @return string 格式化后的姓名
 */
function substr_cut($user_name)
{
	$strlen   = mb_strlen($user_name, 'utf-8');
	$firstStr = mb_substr($user_name, 0, 1, 'utf-8');
	$lastStr  = mb_substr($user_name, -1, 1, 'utf-8');
	return $strlen == 2 ? $firstStr . str_repeat('*', mb_strlen($user_name, 'utf-8') - 1) : $firstStr . str_repeat('*', $strlen - 2) . $lastStr;
}



/**
 * 发送邮件
 * @param string $mail_to
 * @param string $mail_subject
 * @param string $mail_message
 * @param string $mail_from
 * @param string $mail_name
 */
function sendEmails($mail_to, $mail_subject, $mail_message, $mail_from, $mail_name='')
{
	$CI = & get_instance();
	$CI->load->library('email');
	$config['protocol'] = 'sendmail';
	$config['charset'] = 'utf-8';
	$config['wordwrap'] = TRUE;
	$config['mailtype'] = 'html';
	$CI->email->initialize($config);

	$CI->email->from($mail_from, $mail_name);
	$CI->email->to($mail_to);
	$CI->email->subject($mail_subject);
	$CI->email->message($mail_message);
	$CI->email->send();
	$CI->email->clear();
}

/**
 * 发送邮件
 * @param unknown $recipient
 * @param string $subject
 * @param string $message
 */
function send_email($recipient, $subject = 'Test email', $message = 'Hello World')
{
	return mail($recipient, $subject, $message);
}

/**
 * 默认头像
 * */
function user_photo()
{
    return array(
        '0' => '0.jpg',
        '1' => '1.jpg',
        '2' => '2.jpg',
        '3' => '3.jpg',
        '4' => '4.jpg',
        '5' => '5.jpg',
        '6' => '6.jpg',
        '7' => '7.jpg',
        '8' => '8.jpg',
        '9' => '9.jpg',
    );
}

 //验证是不是微信5.0 版本
 function validateWeiXin()
 {
	 $weiXinStatus  =  false;
	 if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
		 $weiXinStatus = true;
	 }
	 return $weiXinStatus;
 }

 //验证是否是支付宝
 function validateAliapp()
 {
	 return strpos($_SERVER['HTTP_USER_AGENT'], 'Alipay');
 }

 //过滤微信表情
 function filterEmoji($str)
 {
	 $str = preg_replace_callback(
		 '/./u',
		 function ($match) {
			 return strlen($match[0]) >= 4 ? '' : $match[0];
		 },
		 $str
	 );

	 return $str;
 }

