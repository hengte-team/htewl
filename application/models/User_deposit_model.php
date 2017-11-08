<?php
class User_deposit_model extends CI_Model
{
	private $_table = 'user_deposit';

	public function insert($params = array())
	{
		$data = array(
			'uid'             => $params['uid'],
			'amount'         => $params['amount'],
			'amount_carry'  => $params['amount_carry'],
			'bank_id'        => $params['bank_id'],
			'state'          => 1,
			'created_at'    => date('Y-m-d H:i:s'),
			'updated_at'    => date('Y-m-d H:i:s')
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