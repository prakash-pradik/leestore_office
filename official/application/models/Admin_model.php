<?php
 
 
class Admin_model extends CI_Model{
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
 
    /*
        Get all the records from the database
    */
    public function get_all_users($table_name)
    {

        $users = $this->db->get_where($table_name, array('status' => "1") )->result_array();
        return $users;
    }

    public function get_all_employees()
    {

        $sessionUser = $this->session->userdata('user_loggedin');
        $storeId = $sessionUser['store_id'];
		
		if($sessionUser['admin_type'] == 'biller')
			$where = 'AND store_id IN (0, '.$storeId.')';
		else
			$where = "";
        
        $sql = "SELECT * FROM employees WHERE status = 1 $where";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function get_all()
    {
        $incomes = $this->db->get("incomes")->result();
        return $incomes;
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
    public function update_row_data($table_name,$condition, $array) 
    {
        $this->db->where($condition);
        if($this->db->update($table_name, $array)){
            return true;}
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
 
    public function get_income_users(){
        $sql = "SELECT u.id, u.name, u.phone_number FROM `incomes` as inc join users as u on u.id=inc.user_id GROUP by inc.user_id";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function get_amount_stats($tableName){
        $sql = "SELECT 
                (SELECT SUM(amount) FROM $tableName WHERE amount_type = 'DEB' AND status = 1) as total_debit,
                (SELECT SUM(amount) FROM $tableName WHERE amount_type = 'CRE' AND status = 1) as total_credit ";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0 )
            return $query->row();
        else
            return false;
    }

    public function get_all_incomes(){

        $sql = "select u.name, u.id, inc.notes,
                    sum(COALESCE( case when amount_type = 'DEB' then amount END, 0)) as total_credit,
                    sum(COALESCE( case when amount_type = 'CRE' then amount END, 0)) as total_debit,
                    sum(COALESCE( case when amount_type = 'DEB' then amount END, 0)) - sum(COALESCE( case when amount_type = 'CRE' then amount END, 0)) as total_available 
                from incomes as inc
                join users as u 
                    on u.id = inc.user_id
                    and inc.status = 1
                group by inc.user_id order by inc.date_added";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function get_outcome_users(){
        $sql = "SELECT u.id, u.name, u.phone_number FROM `outcomes` as inc join users as u on u.id=inc.user_id GROUP by inc.user_id";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function get_all_outcomes(){

        $sql = "select u.name, u.id, inc.notes,
                    sum(COALESCE( case when amount_type = 'DEB' then amount END, 0)) as total_credit,
                    sum(COALESCE( case when amount_type = 'CRE' then amount END, 0)) as total_debit,
                    sum(COALESCE( case when amount_type = 'DEB' then amount END, 0)) - sum(COALESCE( case when amount_type = 'CRE' then amount END, 0)) as total_available 
                from outcomes as inc
                join users as u 
                    on u.id = inc.user_id
                    and inc.status = 1
                group by inc.user_id order by inc.date_added desc";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function get_all_sales($all = '', $orderBy = '', $store_id = ''){
        
        $sessionUser = $this->session->userdata('user_loggedin');
		$storeId = $sessionUser['store_id'];
		
		if($sessionUser['admin_type'] == 'biller')
			$where1 = "AND ds.store_id = '".$storeId."'";
		else
            $where1 = ""; //$where1 = "AND ds.store_id = '".$store_id."'"; //$where1 = "";

        $today_date   = date("Y-m-d");
        $yesterday = date("Y-m-d", strtotime("yesterday"));

        $start_date = $this->input->post('example-daterange1');
        $end_date = $this->input->post('example-daterange2');

        if($all == 'today')
            $where = "AND DATE(ds.date_added) = '".$today_date."'";
        else if($all == 'week')
            $where = "AND yearweek(ds.date_added) = yearweek(now()) ";
        else if($all == 'last_week')
            $where = "AND week(ds.date_added) = week(now())-1 ";
        else if($all == 'month')
            $where = "AND MONTH(ds.date_added) = MONTH(now()) AND YEAR(ds.date_added)=YEAR(now()) ";
        else if($all == 'last_month')
            $where = "AND MONTH(ds.date_added) = MONTH(now())-1 ";
        else if($all == 'custom')
            $where = "AND DATE(ds.date_added) BETWEEN '$start_date' AND '$end_date'";
        else if($all == 'yesterday')
            $where = "AND DATE(ds.date_added) = '".$yesterday."'";
        else
            $where = "";
        
        $sql = "SELECT e.name, ds.* FROM daily_sales as ds
                JOIN employees as e  ON e.id = ds.emp_id AND ds.status = 1 $where $where1
                order by ds.date_added $orderBy";

        $query = $this->db->query($sql);
        //echo $this->db->last_query();

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }
	
	public function get_sales_stats($all = ''){
        $sessionUser = $this->session->userdata('user_loggedin');
        $storeId = $sessionUser['store_id'];

        $today_date   = date("Y-m-d");
        $yesterday = date("Y-m-d", strtotime("yesterday"));
		
		if($sessionUser['admin_type'] == 'biller')
			$where = "store_id = '".$storeId."'";
		else
			$where = "1=1";

        if($all == 'today')
            $where1 = "AND DATE(date_added) = '".$today_date."'";
        else if($all == 'yesterday')
            $where1 = "AND DATE(date_added) = '".$yesterday."'";
        else
            $where1 = "";
		
        $sql = "SELECT 
                    sum(COALESCE( case when amount_type = 'inc' then amount END, 0)) as today_income,
                    sum(COALESCE( case when amount_type = 'exp' then amount END, 0)) as today_expense,
                    sum(COALESCE( case when amount_type = 'inc' then amount END, 0)) - sum(COALESCE( case when amount_type = 'exp' then amount END, 0)) as today_available,
                    (SELECT sum(COALESCE( case when amount_type = 'card' then amount END, 0)) as today_expense FROM daily_sales WHERE status = 1 AND amount_mode = 'card_pay' AND $where AND DATE(date_added) = '".$today_date."') as today_card 
                FROM daily_sales WHERE status = 1 AND amount_mode = 'cash' AND $where $where1";

        $query = $this->db->query($sql);
        //echo $this->db->last_query();
        if($query->num_rows() > 0 )
            return $query->row();
        else
            return false;
    }

    public function get_gpay_stats($all = ''){
        $sessionUser = $this->session->userdata('user_loggedin');
        $storeId = $sessionUser['store_id'];

        $today_date   = date("Y-m-d");
        $yesterday = date("Y-m-d", strtotime("yesterday"));
		
		if($sessionUser['admin_type'] == 'biller')
			$where = "store_id = '".$storeId."'";
		else
			$where = "1=1";

        if($all == 'today')
            $where1 = "AND DATE(date_added) = '".$today_date."'";
        else if($all == 'yesterday')
            $where1 = "AND DATE(date_added) = '".$yesterday."'";
        else
            $where1 = "";

        $sql = "SELECT 
                    sum(COALESCE( case when amount_type = 'inc' then amount END, 0)) as gpay_income,
					sum(COALESCE( case when amount_type = 'exp' then amount END, 0)) as gpay_expense,
					sum(COALESCE( case when amount_type = 'inc' then amount END, 0)) - sum(COALESCE( case when amount_type = 'exp' then amount END, 0)) as gpay_available
                FROM daily_sales WHERE amount_mode = 'gpay' AND status = 1 AND $where $where1";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->row();
        else
            return false;
    }

    public function get_opening_stats(){
        $sessionUser = $this->session->userdata('user_loggedin');
        $storeId = $sessionUser['store_id'];
		
		if($sessionUser['admin_type'] == 'biller')
			$where = "store_id = '".$storeId."'";
		else
			$where = "1=1";
		

        $today_date   = date("Y-m-d");

        $sql = "SELECT 
                (SELECT sum(COALESCE( case when amount_type = 'inc' then amount END, 0)) FROM daily_sales WHERE status = 1 AND amount_mode = 'open_cash' AND $where AND DATE(date_added) = '".$today_date."') as total_cash,
                (SELECT sum(COALESCE( case when amount_type = 'exp' then amount END, 0)) FROM daily_sales WHERE status = 1 AND amount_mode = 'open_cash' AND $where AND DATE(date_added) = '".$today_date."') as available_cash,

                (SELECT sum(COALESCE( case when amount_type = 'inc' then amount END, 0)) FROM daily_sales WHERE status = 1 AND amount_mode = 'open_gpay' AND $where AND DATE(date_added) = '".$today_date."') as total_gpay,
                (SELECT sum(COALESCE( case when amount_type = 'exp' then amount END, 0)) FROM daily_sales WHERE status = 1 AND amount_mode = 'open_gpay' AND $where AND DATE(date_added) = '".$today_date."') as available_gpay ";

        /* $sql = "SELECT 
            (SELECT sum(COALESCE( case when amount_type = 'inc' then amount END, 0)) - sum(COALESCE( case when amount_type = 'exp' then amount END, 0)) FROM daily_sales WHERE status = 1 AND amount_mode = 'open_cash' AND $where AND DATE(date_added) = '".$today_date."') as available_cash,
            (SELECT sum(COALESCE( case when amount_type = 'inc' then amount END, 0)) - sum(COALESCE( case when amount_type = 'exp' then amount END, 0)) FROM daily_sales WHERE status = 1 AND amount_mode = 'open_gpay' AND $where AND DATE(date_added) = '".$today_date."') as available_gpay
            " ; */

        $query = $this->db->query($sql);
        //echo $this->db->last_query();
        if($query->num_rows() > 0 )
            return $query->row();
        else
            return false;
    }
		
	public function get_all_advances(){

        $sql = "select e.name, e.id,
                    sum(COALESCE( case when amount_type = 'DEB' then amount END, 0)) as total_credit,
                    sum(COALESCE( case when amount_type = 'CRE' then amount END, 0)) as total_debit,
                    sum(COALESCE( case when amount_type = 'DEB' then amount END, 0)) - sum(COALESCE( case when amount_type = 'CRE' then amount END, 0)) as total_available 
                from employee_advance as ea
                join employees as e 
                    on e.id = ea.emp_id
                    and ea.status = 1
                group by ea.emp_id";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function get_emp_advances($id){
        $sessionUser = $this->session->userdata('user_loggedin');
        $storeId = $sessionUser['store_id'];

        $sql = "SELECT * FROM employee_advance WHERE status = 1 AND emp_id = $id ORDER BY id desc";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function emp_adv_stats($id){
        $today_date   = date("Y-m-d");
        $sql = "SELECT 
					sum(COALESCE( case when amount_type = 'DEB' then amount END, 0)) - sum(COALESCE( case when amount_type = 'CRE' then amount END, 0)) as balance_amt
                FROM employee_advance WHERE status = 1 AND emp_id = $id ";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->row();
        else
            return false;
    }

    public function get_emp_sales($id){
        $today_date   = date("Y-m-d");
        $sql = "SELECT * FROM daily_sales WHERE status = 1 AND emp_id = $id AND amount_type = 'inc' ORDER BY id desc ";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function get_user_advances($id){

        $sql = "SELECT *, 'incomes' as table_name FROM incomes WHERE status = 1 AND user_id = $id ORDER BY id desc";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0 ){
            return $query->result_array();
        }
        else {
            $sql2 = "SELECT *, 'outcomes' as table_name FROM outcomes WHERE status = 1 AND user_id = $id ORDER BY id desc";

            $query2 = $this->db->query($sql2);

            if($query2->num_rows() > 0 )
                return $query2->result_array();
            else 
                return false;
        }
            
    }

    public function get_user_incomes($id){

        $sql = "SELECT *, 'incomes' as table_name FROM incomes WHERE status = 1 AND user_id = $id ORDER BY id desc";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        
        else 
            return false;
    }

    public function get_user_outcomes($id){

        $sql = "SELECT *, 'outcomes' as table_name FROM outcomes WHERE status = 1 AND user_id = $id ORDER BY id desc";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        
        else 
            return false;
    }

    /* public function user_income_stats($id){
        $sql = "SELECT 
					sum(COALESCE( case when amount_type = 'DEB' then amount END, 0)) - sum(COALESCE( case when amount_type = 'CRE' then amount END, 0)) as balance_amt
                FROM incomes WHERE status = 1 AND user_id = $id ";

        $query = $this->db->query($sql);
        if($query->num_rows() > 0 ){
            $row = $query->row();
            if(!empty($row) && $row->balance_amt !== NULL){
                return $query->row();
            }
            else {
                $sql2 = "SELECT 
					sum(COALESCE( case when amount_type = 'DEB' then amount END, 0)) - sum(COALESCE( case when amount_type = 'CRE' then amount END, 0)) as balance_amt
                FROM outcomes WHERE status = 1 AND user_id = $id ";

                $query2 = $this->db->query($sql2);

                if($query2->num_rows() > 0 )
                    return $query2->row();
                
                else
                    return false;
            }
        }
        else
            return false;
    } */

    public function user_income_stats($id){
        $sql = "SELECT 
					sum(COALESCE( case when amount_type = 'DEB' then amount END, 0)) - sum(COALESCE( case when amount_type = 'CRE' then amount END, 0)) as balance_amt
                FROM incomes WHERE status = 1 AND user_id = $id ";

        $query = $this->db->query($sql);
        if($query->num_rows() > 0 ){
            $row = $query->row();
            if(!empty($row) && $row->balance_amt !== NULL)
                return $query->row();
            else 
                return false;
        }
        else
            return false;
    }

    public function user_outcome_stats($id){
        
        $sql2 = "SELECT 
            sum(COALESCE( case when amount_type = 'DEB' then amount END, 0)) - sum(COALESCE( case when amount_type = 'CRE' then amount END, 0)) as balance_amt
        FROM outcomes WHERE status = 1 AND user_id = $id ";

        $query2 = $this->db->query($sql2);

        if($query2->num_rows() > 0 )
            return $query2->row();
        
        else
            return false;

    }

    public function get_all_buy_sell($type){

        if($type == 'buy')
            $where = 'purchase_type = "buy"';
        else
           $where = 'purchase_type = "sell"';

        $sql = "SELECT * FROM buysell_mobiles WHERE $where AND status = 1 ORDER BY id desc";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->result_array();
        else 
            return false;
            
    }

    public function delete_row($table_name, $id)
    {
        $this->db->where('id', $id);
        if($this->db->delete($table_name)){
            return true;}
        else
            return false;
    }

    public function delete_all($table_name, $condition)
    {
        $flag = false;

        $this->db->where($condition);
        if($this->db->delete($table_name)){
            $flag = true;
        }
        else{
            $flag = false;
        }

        if($flag){
			$this->jsonResponse(200, 'success', 'Order Successfully Deleted!', '');
		} else{
			$this->jsonResponse(500, 'failed', 'Something Went Wrong!', '');
		}
    }

    public function jsonResponse($status, $statusType, $msg, $resData){

		$response = array(
			'status' => $status,
			'statusType' => $statusType,
			'message' => $msg,
			'data' => $resData
		);
		echo json_encode($response);
		return;
	}

    public function get_daily_notes(){
        $sql = "SELECT * FROM `notes` ORDER BY id DESC LIMIT 1";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->row();
        else
            return false;
    }

    public function get_day_close(){
        $sql = "SELECT * FROM `closing_balance` ORDER BY id DESC LIMIT 1";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0 )
            return $query->row();
        else
            return false;
    }

    public function get_commitments($type = ''){
        
        $where = "AND due_type = '".$type."'";

        $sql = "SELECT * FROM `monthly_commitments` WHERE status != 2 $where ORDER BY monthly_date ASC";
        $query = $this->db->query($sql);
        
        if($query->num_rows() > 0 )
            return $query->result_array();
        else
            return false;
    }

    public function get_commitment_stats(){

        $sql = "SELECT 
                sum(COALESCE( case when due_type = 'due' then amount END, 0)) as total_due,
                sum(COALESCE( case when due_type = 'interest' then amount END, 0)) as total_interest,
                sum(COALESCE( case when due_type = 'credit' then amount END, 0)) as total_cc,
                sum(COALESCE( case when due_type = 'jewel' then amount END, 0)) as total_jewel
                FROM monthly_commitments WHERE status != 2 ORDER BY monthly_date ASC";

        $query = $this->db->query($sql);
        
        if($query->num_rows() > 0 )
            return $query->row();
        else
            return false;
    }

}
?>