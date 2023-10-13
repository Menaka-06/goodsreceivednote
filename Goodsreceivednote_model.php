<?php
class Goodsreceivednote_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function getGoodreceivednote($limit,$start)
	{
		$this->db->select('GRN.*,CST.customerType')->from('tbl_goods_received_notes as GRN')->join('tbl_customer_type as CST','CST.id=GRN.fromCustomerId');
			$this->db->limit($limit,$start);
		  return $this->db->get()->result();
       
	}
}
?>