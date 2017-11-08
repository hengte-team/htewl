<?php
class User_model extends CI_Model
{
    private $table = 'user';

    public function findByUId($uid, $select = '*')
    {
        $this->db->select($select);
        $this->db->where('uid', $uid);
        return $this->db->get($this->table);
    }

    /**
     * 更新用户表信息
     * @param unknown $postData
     */
    public function update($postData = array())
    {
        if (!empty($postData['flag'])) {
            $data['flag'] = $postData['flag'];
        }
        return $this->db->update($this->table, $data, array('uid'=>$postData['uid']));
    }
    
     /**
     * 更新用户表  退钱到账户
     * @param unknown $uid
     * @param unknown $account
     */
    public function updateUserAcount($uid, $account=array())
    {
        $data = array();
        if (!empty($account['amount_carry'])) {
            $this->db->set('user_money', 'user_money+'.$account['amount_carry'], FALSE);
        }
        $this->db->where('uid', $uid);
        return $this->db->update($this->table, $data);
    }
     
    /**
     * 验证手机号码
     * @param unknown $phone
     */
    public function validatePhone($phone, $select = 'phone')
    {
        $this->db->select($select);
        $this->db->where('phone', $phone);
        return $this->db->get($this->table);
    }

    /**
     * 验证用户邮箱
     * @param unknown $email
     */
    public function validateEmail($email, $select = 'email')
    {
        $this->db->select($select);
        $this->db->where('email', $email);
        return $this->db->get($this->table);
    }
}