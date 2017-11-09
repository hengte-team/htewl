<?php
class Alipaywap
{
    public function __construct()
    {
        header("Content-type:text/html;charset=utf-8");
    }

    public function callAlipayApi($alipayParameter)
    {
        require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'config.php';
        require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'wappay/service/AlipayTradeService.php';
        require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'wappay/buildermodel/AlipayTradeWapPayContentBuilder.php';
        $payRequestBuilder = new AlipayTradeWapPayContentBuilder();
        $payRequestBuilder->setBody($alipayParameter['body']);
        $payRequestBuilder->setSubject($alipayParameter['subject']);
        $payRequestBuilder->setOutTradeNo($alipayParameter['out_trade_no']);
        $payRequestBuilder->setTotalAmount($alipayParameter['total_amount']);
        $payRequestBuilder->setTimeExpress($alipayParameter['timeout_express']);
        $payResponse = new AlipayTradeService($config);
        $result = $payResponse->wapPay($payRequestBuilder, $config['return_url'], $config['notify_url']);
        return ;
    }

    public function responseAlipayNotify()
    {
        require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'config.php';
        require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'wappay/service/AlipayTradeService.php';
        $alipaySevice = new AlipayTradeService($config);
        $alipaySevice->writeLog(var_export($_POST,true));
        $result = $alipaySevice->check($_POST);
        return $result;
    }

    public function responseAlipayReturn()
    {
        require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'config.php';
        require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'wappay/service/AlipayTradeService.php';
        $alipaySevice = new AlipayTradeService($config);
        $result = $alipaySevice->check($_GET);
        return $result;
    }
}