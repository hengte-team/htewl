<?php
class Deposit_model extends CI_Model
{
	private $_table = 'deposit';

	public function insert($postData = array())
	{
		$data = array(
			'uid'  		     => $postData['uid'],
			'amount' 	     => $postData['amount'],
			'amount_carry' => 0,
			'bank_id' 	     => 0,
			'state'		 => 1,					//1表示未付
			'is_from' 	     => 1, 					//1表示pc端
			'created_at'   => date('Y-m-d H:i:s'),
			'updated_at'   => '0000-00-00 00:00:00'
		);
		$this->db->insert($this->_table, $data);
		return $this->db->insert_id();
	}

	/**
	 * 查找一条充值信息
	 */
	public function findById($depositId)
	{
		$this->db->select('deposit_id, uid, bank_id, state, amount, created_at');
		$this->db->from($this->_table);
		$this->db->where('deposit_id', (int)$depositId);
		$this->db->limit(1);
		return $this->db->get();
	}

	/**
	 * 更新
	 */
	public function updateState($depositId, $uid, $data)
	{
		$this->db->where('deposit_id', $depositId);
		$this->db->where('uid', $uid);
		return $this->db->update($this->_table, $data);
	}
}