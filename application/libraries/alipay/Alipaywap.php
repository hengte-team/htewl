<?php
class Alipaywap
{
    public function callAlipayApi($alipayParameter)
    {
        header("Content-type:text/html;charset=utf-8");
        require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'wappay/service/AlipayTradeService.php';
        require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'wappay/buildermodel/AlipayTradeWapPayContentBuilder.php';
        require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'config.php';
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
}