<?php

class Callback extends HT_Controller
{
    public function _init()
    {
        $this->load->library('alipay/alipaywap', null, 'alipaywap');
        $this->load->model('user_model', 'user');
        $this->load->model('account_log_model', 'account_log');
        $this->load->model('user_deposit_model', 'user_deposit');
    }

    public function notifyPay()
    {
        $result = $this->alipaywap->responseAlipayNotify();
        if ($result) {//验证成功
            //商户订单号
            $out_trade_no = $_POST['out_trade_no'];
            //支付宝交易号
            $trade_no = $_POST['trade_no'];
            //交易状态
            $trade_status = $_POST['trade_status'];

            if ($trade_status == 'TRADE_FINISHED' || $trade_status == 'TRADE_SUCCESS') {
                $result = $this->user_deposit->findByDepositId($out_trade_no);
                if ($result->num_rows() <= 0) {
                    return;
                }
                $deposit = $result->row(0);

                $uid = $deposit->uid;
                $order_id = $deposit->deposit_id;
                $account_type = 1;
                $flow = 1;
                $trade_type = $deposit->from == 1 ? 7 : 2;
                $amount = $deposit->amount;
                $note  = '支付宝交易号：'.$trade_no;

                if ($amount != $_POST['total_fee'])  {
                    return;
                }

                $$this->db->trans_begin();
                $lastId = $this->account_log->insertAccountLogRecord($uid, $order_id, $account_type, $flow, $trade_type, $amount, $note);
                $isUpdate = $this->user_deposit->updateState($deposit->deposit_id, $uid, array('state' => 2));
                if ($this->db->trans_status() === FALSE && !$lastId && $isUpdate) {
                    $this->db->trans_rollback();
                }
                $this->db->trans_commit();
                //注意：
                //退款日期超过可退款期限后（如三个月可退款），支付宝系统发送该交易状态通知
            }
            /*
             else if ($trade_status == 'TRADE_SUCCESS') {
                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                //请务必判断请求时的total_amount与通知时获取的total_fee为一致的
                //如果有做过处理，不执行商户的业务程序
                //注意：
                //付款完成后，支付宝系统发送该交易状态通知
            }
            //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
         */
            echo "success";		//请不要修改或删除
        } else {//验证失败
            echo "fail";	//请不要修改或删除
        }
    }
}