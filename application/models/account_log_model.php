<?php
class Account_log_model extends CI_Model
{
    private $table = 'account_log';

    public function insertAccountLogRecord($uid, $order_id, $account_type, $flow, $trade_type, $amount, $note)
    {
        //记录现金流
        $data = array(
            'uid'            => $uid,
            'order_id'      => $order_id,
            'account_type' => $account_type, //账户
            'flow'          => $flow, // 退款
            'trade_type'   => $trade_type, // 退款
            'amount'        => $amount,
            'note'          => $note,
            'created_at'   => date('Y-m-d H:i:s')
        );
        return $this->db->insert($this->table, $data);
    }
}