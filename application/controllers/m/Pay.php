<?php

class Pay extends HT_Controller
{
    public function _init()
    {
        $this->load->library('alipay/alipaywap', null, 'alipaywap');
        $this->load->model('user_deposit_model', 'user_deposit');
    }

    public function returnPay()
    {
        $result = $this->alipaywap->responseAlipayReturn();
        if ($result) {//验证成功
            //请在这里加上商户的业务逻辑程序代码
            //——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
            //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表
            //商户订单号
            $out_trade_no = htmlspecialchars($_GET['out_trade_no']);
            //支付宝交易号
            $trade_no = htmlspecialchars($_GET['trade_no']);



            //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
            $result = $this->user_deposit->findByDepositId($out_trade_no);
            if ($result->num_rows() <= 0) {
                return;
            }
            $deposit = $result->row(0);
            if ($deposit->state == 2) {
                echo '订单号：'.$out_trade_no.'支付成功';
            } else {
                echo '订单号：'.$out_trade_no.'支付失败';
            }

        } else {
            //验证失败
            echo "验证失败";
        }
    }
}