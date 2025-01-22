<?php
 
 
class Product_model extends CI_Model{
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
 
    /*
        Get an specific record from the database
    */
    public function get_all_orders_by_products($id){

        $sql = "SELECT oi.*, ord.id as ord_id, ord.invoice_no, ord.net_amount, ord.date_added, (SELECT name FROM customers WHERE id = ord.customer_id) as customer_name FROM `order_items` as oi, `orders` ord WHERE oi.order_id = ord.id AND oi.product_id = $id ORDER BY ord.id DESC";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }
	
}
?>