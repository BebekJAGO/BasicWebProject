<?php
class Csv_import_model extends CI_Model
{
	function select()
	{
		$this->db->order_by('NO', 'DESC');
		$query = $this->db->get('tktw2');
		return $query;
	}

	function insert($data)
	{
		$this->db->insert_batch('tktw2', $data);
	}
}
