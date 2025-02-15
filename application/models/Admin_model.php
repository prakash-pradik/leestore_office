<?php
 
 
class Admin_model extends CI_Model{
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
 
    /*
        Get an specific record from the database
    */
    public function get_by_id($id, $tbl_name)
    {
        $data = $this->db->get_where($tbl_name, ['id' => $id ])->row();
        return $data;
    }

    public function get_data($table, $whr, $type = '', $order_column = '', $order_type = '') 
    {
        $data=array();  
        if($order_column != '' && $order_type != '')
        $this -> db ->order_by($order_column, $order_type);

        $query = $this->db->select('*')->from($table)->where($whr)->get();
        
        if($query->num_rows()>0 ) {
        if (!empty($type)) 
            $data = $query->$type();
        else
            $data = $query->result();

        return $data;
        } else {
        return $data;
        }       
    }
 
    /*
        Update or Modify a record in the database
    */
    public function update_row_data($table_name, $condition, $array) 
    {
        $this->db->where($condition);
        if($this->db->update($table_name, $array))
            return true;
        else
            return false;
    }

    public function insert_row($table,$data) 
    {
        if($this->db->insert($table, $data))
            return $this->db->insert_id();
        else
            return false;
    }
 
    public function delete_data($table_name, $condition) 
    {
        $this->db->where($condition);
        if($this->db->delete($table_name)){
            return true;}
        else
            return false;
    }

    public function get_all_products(){

        $sessionUser = $this->session->userdata('admin_loggedin');
        if(isset($sessionUser['store_id']) && $sessionUser['store_id']){
            $storeWhere = "AND prod.store_id = ".$sessionUser['store_id']."";
        }
        else{
            $storeWhere = "";
        }

        $sql = "SELECT prod.*, 
        (SELECT category_name FROM categories WHERE id = prod.category_id) as category_name, 
        (SELECT brand_name FROM brands WHERE id = prod.brand_id) as brand_name 
        FROM `products` as prod WHERE status = '1' AND prod.category_id != 2 $storeWhere order by id desc";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function get_all_stocks(){
        $sql = "SELECT g.*, 
                    (SELECT product_name FROM products WHERE id = g.product_id) as product_name,
                    (SELECT supplier_name FROM suppliers WHERE id = g.supplier_id) as supplier_name,
                    SUM(g.no_of_stock) as total_number 
                FROM `godown` as g WHERE g.status = 1 GROUP BY g.product_id, g.supplier_id ORDER BY g.id desc";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function get_stocks_by_supplier($id){
        $sql = "SELECT g.*, 
                    (SELECT product_name FROM products WHERE id = g.product_id) as product_name
                FROM `godown` as g WHERE g.supplier_id = $id AND status = 1 ORDER BY g.id desc";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function get_all_orders($status, $id, $all){

        $sessionUser = $this->session->userdata('admin_loggedin');
        if(isset($sessionUser['store_id']) && $sessionUser['store_id'])
            $storeWhere = "AND ord.store_id = ".$sessionUser['store_id']."";
        else
            $storeWhere = "";

        if($status !== ""){
            if($status == 'paid')
                $where = "AND ord.order_status IN ('paid')";
            else if($status == 'credit')
                $where = "AND ord.order_status IN ('credit')";
            else
                $where = "AND ord.order_status IN ('draft','pending')";
        }
        else
            $where = "";

        if($id !== "")
            $where1 = "AND ord.customer_id = '".$id."'";
        else
            $where1 = "";

        $today_date   = date("Y-m-d");
        $start_date = $this->input->post('example-daterange1');
        $end_date = $this->input->post('example-daterange2');

        if($all == 'today')
            $where2 = "AND DATE(ord.date_added) = '".$today_date."'";
        else if($all == 'week')
            $where2 = "AND yearweek(ord.date_added) = yearweek(now()) ";
        else if($all == 'last_week')
            $where2 = "AND week(ord.date_added) = week(now()) - 1 ";
        else if($all == 'month')
            $where2 = "AND MONTH(ord.date_added) = MONTH(now()) AND YEAR(ord.date_added) = YEAR(now()) ";
        else if($all == 'last_month')
            $where2 = "AND MONTH(ord.date_added) = MONTH(now()) - 1 ";
        else if($all == 'custom')
            $where2 = "AND DATE(ord.date_added) BETWEEN '$start_date' AND '$end_date'";
        else
            $where2 = "";

        $sql = "SELECT ord.*, 
				(SELECT name FROM customers WHERE id = ord.customer_id) as customer_name, 
				(SELECT phone_number FROM customers WHERE id = ord.customer_id) as customer_phone,
				(SELECT full_name FROM employees WHERE id = ord.emp_id) as emp_name
				FROM `orders` as ord WHERE status = '1' $where $where1 $where2 $storeWhere order by id desc";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function get_order_stats($all){
        $today_date   = date("Y-m-d");
        
        $sessionUser = $this->session->userdata('admin_loggedin');
        if(isset($sessionUser['store_id']) && $sessionUser['store_id']){
            $pendWhere = "AND store_id = ".$sessionUser['store_id']."";
            $storeWhere = "AND ord.store_id = ".$sessionUser['store_id']."";
        }
        else{
            $storeWhere = $pendWhere = "";
        }

        if($all == 'today')
            $where = "AND DATE(ord.date_added) = '".$today_date."'";
        else if($all == 'week')
            $where = "AND yearweek(ord.date_added) = yearweek(now()) ";
        else if($all == 'last_week')
            $where = "AND week(ord.date_added) = week(now()) - 1 ";
        else if($all == 'month')
            $where = "AND MONTH(ord.date_added) = MONTH(now()) AND YEAR(ord.date_added) = YEAR(now()) ";
        else if($all == 'last_month')
            $where = "AND MONTH(ord.date_added) = MONTH(now()) - 1 ";
        else
            $where = "";

        $sql = "SELECT 
                    sum(COALESCE( case when order_status = 'paid' then total_paid END, 0)) as total_income,
                    count(id) as today_sales,
                    (select count(id) from orders where order_status IN ('draft','pending') $where $pendWhere) as total_pending,
                    (select count(id) from orders where order_status = 'credit' $where $pendWhere) as total_credit
                FROM orders as ord WHERE status = 1 AND order_status = 'paid'  $where $storeWhere";

        $query = $this->db->query($sql);
        
        if($query->num_rows() > 0 )
            return $query->row();
        else
            return false;
    }

    public function get_prev_sales(){
        $today_date   = date("Y-m-d");
        
        $sql = "SELECT sum(total_paid) as yesterday_sales
                FROM orders WHERE status = 1 AND order_status = 'paid' AND DATE(date_added) = (CURDATE() - INTERVAL 1 DAY) ";

        $query = $this->db->query($sql);
        if($query->num_rows() > 0 )
            return $query->row();
        else
            return false;
    }

    public function get_order_by_id($id){

        if($id !== "")
        {
            $sql = "SELECT ord.*, 
                    (SELECT name FROM customers WHERE id = ord.customer_id) as customer_name, 
                    (SELECT phone_number FROM customers WHERE id = ord.customer_id) as customer_phone,
                    (SELECT address FROM customers WHERE id = ord.customer_id) as customer_address,
                    (SELECT full_name FROM employees WHERE id = ord.emp_id) as emp_name
                    FROM `orders` as ord WHERE ord.id = $id ";
            $query = $this->db->query($sql);

            if($query->num_rows() > 0 )
                return $query->row();
            else
                return false;
        }
        else
            return false;
    }

    public function get_orders_item_id($id){
        if($id !== "")
        {
            $sql = "SELECT oi.*, 
                (SELECT product_name FROM products WHERE id = oi.product_id) as product_name,
                (SELECT imei_number1 FROM products WHERE id = oi.product_id) as product_imei1,
                (SELECT imei_number2 FROM products WHERE id = oi.product_id) as product_imei2,
                (SELECT serial_number FROM products WHERE id = oi.product_id) as product_serial,
                (SELECT model_name FROM products WHERE id = oi.product_id) as product_model
            FROM `order_items` as oi WHERE oi.order_id = $id ";
            $query = $this->db->query($sql);

            if($query->num_rows() > 0 )
                return $query->result_array();
            else
                return false;
        }
        else
            return false;
    }

    public function get_all_staffs(){
        $sql = "SELECT emp.*, 
                (SELECT store_name FROM stores WHERE id = emp.store_id) as store_name
                FROM `employees` as emp WHERE status = '1' order by emp.id desc";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function check_by_phone(){
        $sql = "SELECT emp.*, 
                (SELECT store_name FROM stores WHERE id = emp.store_id) as store_name
                FROM `employees` as emp WHERE status = '1' order by emp.id desc";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function get_product_data($id){
        $sql = "SELECT prod.*, 
                (SELECT store_name FROM stores WHERE id = prod.store_id) as store_name,
                (SELECT category_name FROM categories WHERE id = prod.category_id) as category_name, 
                (SELECT brand_name FROM brands WHERE id = prod.brand_id) as brand_name 
                FROM `products` as prod WHERE prod.id = $id ";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->row();
        else
            return false;
    }

    public function get_dashboard_stats($filter = ''){
        
        $today_date   = date("Y-m-d");

        if($filter == 'today')
            $where = "WHERE DATE(date_added) = '".$today_date."'";
        else if($filter == 'week')
            $where = "WHERE yearweek(date_added) = yearweek(now()) ";
        else if($filter == 'last_week')
            $where = "WHERE week(date_added) = week(now())-1 ";
        else if($filter == 'month')
            $where = "WHERE MONTH(date_added) = MONTH(now()) AND YEAR(date_added)=YEAR(now()) ";
        else if($filter == 'last_month')
            $where = "WHERE MONTH(date_added) = MONTH(now())-1 ";
        else
            $where = "";

        $sql = "SELECT 
                (SELECT sum(total_paid) FROM orders $where) as order_total,
                (SELECT count(id) FROM orders $where) as order_count,
                (SELECT count(id) FROM stores) as stores_count,
                (SELECT count(id) FROM employees) as staffs_count,
                (SELECT count(id) FROM customers) as customer_count,
                (SELECT count(id) FROM products) as product_count ";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->row();
        else
            return false;
    }
    public function get_top_customers($limit){

        $sessionUser = $this->session->userdata('admin_loggedin');
        if(isset($sessionUser['store_id']) && $sessionUser['store_id'])
            $storeWhere = "AND store_id = ".$sessionUser['store_id']."";
        else
            $storeWhere = "AND 1=1";
        
        if($limit != ""){
            $where = "HAVING order_count > 0";
            $whereLimit = "LIMIT 10";
        } else {
            $where = "";
            $whereLimit = "";
        }

        $sql = "SELECT cus.*,
                (SELECT sum(net_amount) FROM orders WHERE customer_id = cus.id $storeWhere AND status=1) as order_total,
                (SELECT count(id) FROM orders WHERE customer_id = cus.id $storeWhere AND status=1) as order_count
                FROM `customers` as cus WHERE cus.status = '1' GROUP BY cus.id $where ORDER BY order_total desc $whereLimit";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }
    
    public function get_top_products(){

        $sessionUser = $this->session->userdata('admin_loggedin');
        if(isset($sessionUser['store_id']) && $sessionUser['store_id'])
            $storeWhere = "prod.store_id = ".$sessionUser['store_id']."";
        else
            $storeWhere = "1=1";

        $sql = "SELECT prod.*,
                (SELECT sum(sub_total) FROM order_items WHERE product_id = prod.id) as order_total,
                (SELECT count(id) FROM order_items WHERE product_id = prod.id) as order_count
                FROM `products` as prod WHERE $storeWhere GROUP BY prod.id HAVING order_count > 0 ORDER BY order_count desc LIMIT 10 ";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function getSalesChartData(){
        $sql = "SELECT YEAR(date_added) AS year, MONTH(date_added) AS month, COUNT(DISTINCT id) as sale_count
                FROM orders
                GROUP BY year, month";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function get_reorder_products(){

        $sessionUser = $this->session->userdata('admin_loggedin');
        if(isset($sessionUser['store_id']) && $sessionUser['store_id'])
            $storeWhere = "prod.store_id = ".$sessionUser['store_id']."";
        else
            $storeWhere = "1=1";

        $sql = "SELECT prod.*, (SELECT store_name FROM stores WHERE id = prod.store_id) as store_name FROM `products` as prod WHERE $storeWhere AND qnty <= reorder_qnty ORDER BY prod.qnty asc";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }
}
?>