<?php
/**
* 绑定用户银行卡
*/
class User_bank_model extends CI_Model
{
	private $_table  = 'user_bank';
	private $_table1 = 'pay_method';
	/**
	 * 根据id  查找银行卡
	 */
	public function findById($id)
	{
		$this->db->select('user_bank_id, user_bank.bank_id, mobile_phone, pin, cardholder, bank_card, bank_name');
		$this->db->from($this->_table. ' AS user_bank');
		// $this->db->join($this->_table1.' AS pay_method', 'pay_method.method_id=user_bank.bank_id');
		$this->db->where('user_bank_id', (int)$id);
		$this->db->limit(1);
		return $this->db->get();
	}

	/**
	 * 查询用户的储蓄银行卡
	 */
	public function findByUid($uid)
	{
		$this->db->select('user_bank_id, user_bank.bank_id, bank_card, user_bank.bank_name, bank_code, bank_img');
		$this->db->from($this->_table. ' AS user_bank');
		$this->db->join($this->_table1.' AS pay_method', 'pay_method.method_id=user_bank.bank_id');
		$this->db->where('uid', $uid);
		$this->db->where('bank_type', 1);
		$this->db->order_by('user_bank.user_bank_id', 'ASC');
		return $this->db->get();
	}

	/**
	 * 添加
	 */
	public function insertUserBank($postData)
	{
		$data = array(
				'uid' 		   => $postData['uid'],
				'bank_id' 	   => $postData['bank_id'],
				'bank_name'    => $postData['bank_name'],
				'bank_card'    => $postData['bank_card'],
				'cardholder'   => $postData['cardholder'],
				'pin'		   => $postData['pin'],
				'mobile_phone' => $postData['mobile_phone'],
				'bank_type'    => 1,
				'created_at'   => date('Y-m-d H:i:s'),
				'updated_at'   => '0000-00-00 00:00:00'
			);
		return $this->db->insert($this->_table, $data);
	}

	/**
	 * 删除
	 */
	public function deleteUserBank($id, $uid)
	{
		$this->db->where('user_bank_id', (int)$id);
		$this->db->where('uid', (int)$uid);
		return $this->db->delete($this->_table);
	}

}