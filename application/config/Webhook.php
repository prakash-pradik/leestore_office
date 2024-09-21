<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webhook extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('webhook_model');
		if(isset($_SESSION['offset'])){	
			date_default_timezone_set($_SESSION['offset']);	
		}
	}

	public function index()
	{
	 	require_once(APPPATH .'third_party/stripe-php/init.php'); 

		\Stripe\Stripe::setApiKey($this->config->item('stripe_api_key')); 

		$input = @file_get_contents("php://input");
		$event_json = json_decode($input);

		
	}

	public function connected_account()
	{

		require_once(APPPATH .'third_party/stripe-php/init.php'); 

		\Stripe\Stripe::setApiKey($this->config->item('stripe_api_key')); 

		$input = @file_get_contents("php://input");
		$event_json = json_decode($input);

		

		// subscription Invoice
		if (isset($event_json) && $event_json->type == "customer.subscription.created") {

			$account_id = $event_json->account;
			$customer = \Stripe\Customer::retrieve($event_json->data->object->customer,['stripe_account'=> $account_id]);
			$email = $customer->email;
	 	 	$subscription_id = $event_json->data->object->id;
			$end_date = $event_json->data->object->current_period_end;
			$start_date = $event_json->data->object->current_period_start;
			$amount = sprintf($event_json->data->object->plan->amount / 100.0);
			$plan = $event_json->data->object->plan->id;

			$data = array("plan_period_start" => $start_date, "plan_period_end" => $end_date,"last_modified" => date('Y-m-d H:i:s') );
			print_r($data);
			$subupdate = $this->webhook_model->update_row_data('subscriptions', array('stripe_subscription_id' => $subscription_id ), $data);

			if($subupdate){
				echo "success";
			}else{
				echo "failure";
			}

			

		}

		// Invoice Payment succeeded
		if (isset($event_json) && $event_json->type == "invoice.payment_succeeded") {

			$date = date('d-m-Y');
			$sdate = time();
	     	$account_id = $event_json->account;
			$customer = \Stripe\Customer::retrieve($event_json->data->object->customer,['stripe_account'=> $account_id]);
	 	 	$customerID = $event_json->data->object->customer;
	 	 	$sub_id = $event_json->data->object->subscription;

			print_r($sub_id.'<br>');			

			$subscription = $this->webhook_model->get_row_data('subscriptions', array('stripe_subscription_id' => $sub_id));

			print_r($subscription);

			if (!empty($subscription)) {
				$user_details = $this->webhook_model->get_row_data('users', array('id' => $subscription->user_id));

				$membership = $this->webhook_model->get_row_data('membership', array('id' => $subscription->membership_id));

				$instructor = $this->webhook_model->get_row_data('users', array('id' => $membership->user_id));
				if($user_details != ""){
					$username = $user_details->first_name.' '.$user_details->last_name;
					$email =  $user_details->email;

					$end_date = $event_json->data->object->lines->data[0]->period->end;
					$start_date = $event_json->data->object->lines->data[0]->period->start;
					$amount = sprintf('$%0.2f', $event_json->data->object->total / 100.0);
		 	 		$sub_id = $event_json->data->object->subscription;
		 	 		$transID =  $event_json->data->object->charge;
		 	 		$plan = $event_json->data->object->lines->data[0]->plan->id;	
		 	 		$sub_sdate =  date('Y-m-d',$start_date);
		 	 		$sub_edate =  date('Y-m-d',$end_date);

					$plan_amnt = $event_json->data->object->total;

					$status_data = array(
						"status" => 2,
						"action" => 2
					);
				
					$bill_data = array(
						"email" => $email,
						"subscription_id" => $sub_id,
						"transaction_date" => date('Y-m-d H:i:s'),
						"transaction_id" => $transID,
						"transaction_status" => "success",
						"plan" => $plan,
						"amount" => $amount
					);
		               
					$billing = $this->webhook_model->insert_row('user_billing',$bill_data);


					$email_data = array(
		        		'title' 	=> 'Hello '.$username,
		        		'content'	=> 'This is to inform you that we have received the payment towards your subscription for this month. Following are details:<br><br> Membership Detail: '.$membership->title.' with '.$instructor->first_name.' '. $instructor->last_name.' <br> Transaction ID: '.$transID.' <br> Payment Amount:'.$amount.' <br> Subscription Cycle: '.$sub_sdate.' to '. $sub_edate,
		        		'btn_link' => base_url('instructor/'.$instructor->username),
		        		'btn_txt' => 'Book Class'
		        	);			

					$to = $email;			
					$subject = get_settings('system_name').": Payment Success";
					$html = $this->load->view('email/custom', $email_data, true);
					$status = $this->mandrillapi->sendEmail($to, $subject, $html);

					echo "Success";
				}else{
					echo "error";
				}
			}else{
				echo "error";
			}
		}

		//charge failed
		if (isset($event_json) && $event_json->type == "charge.failed") {
		
			$date = date('d-m-Y');
			$sdate = strtotime($date);
	     	$account_id = $event_json->account;
			$customer = \Stripe\Customer::retrieve($event_json->data->object->customer,['stripe_account'=> $account_id]);

	 	 	$email = $customer->email;
			
			$lastdigit = $event_json->data->object->source->last4;
	 	 	$cardtype = $event_json->data->object->source->brand;
	 	 	

			$data = array(
						"last_digits" => $lastdigit,
						"card_type" => $cardtype
					);

			$subupdate = $this->webhook_model->update_row_data('users',array('email' => $email,'customer_id' => $customer->id),$data);

			echo "Success";

		}

		//Failed payment
		if (isset($event_json) && $event_json->type == "invoice.payment_failed") {

			$date = date('d-m-Y');
			$sdate = time();
		
			$account_id = $event_json->account;
			$customer = \Stripe\Customer::retrieve($event_json->data->object->customer,['stripe_account'=> $account_id]);
 	 		$email = $customer->email;
 	 		$customerID = $event_json->data->object->customer;;
 	 	
 	 		$sub_id = $event_json->data->object->subscription;
 	 		$transID =  $event_json->data->object->charge;
 	 		$amount = sprintf('$%0.2f', $event_json->data->object->total / 100.0);
			$plan = $event_json->data->object->lines->data[0]->plan->id;		

			$bill_data = array(
				"email" => $email,
				"subscription_id" => $sub_id,
				"transaction_date" => date('Y-m-d H:i:s'),
				"transaction_id" => $transID,
				"transaction_status" => "failed",
				"plan" => $plan,
				"amount" => $amount
			);

			$billing = $this->webhook_model->insert_row('user_billing',$bill_data);
		
			$user_details = $this->webhook_model->get_data('users', array('customer_id' => $customerID), 'row');	

			$email_data = array(
        		'title' 	=> 'Hello '.$user_details->first_name.' '.$user_details->last_name,
        		'content'	=> 'This is to inform you that your subscription payment has failed. We\'ll try again in 2 days to process your subscription payment with your payment details we have on the file. Please contact Support if you have any queries.' ,
        		'btn_link' => base_url('instructor/contact'),
        		'btn_txt' => 'Contact Support'
        	);			

			$to = $email;			
			$subject = get_settings('system_name').": Payment Failed";
			$instructor_html = $this->load->view('email/custom', $instructor_email_data, true);
			$status = $this->mandrillapi->sendEmail($to, $subject, $html);
			echo "Success";
			
		}

		//
		if (isset($event_json) && $event_json->type == "account.updated") {
		
			$date = date('d-m-Y');
			$sdate = strtotime($date);
			
			$account = \Stripe\Account::retrieve($event_json->data->object->id);				

				$status = $account->individual->verification->status;
				$payment = 0;
				if ($status == 'verified') {
					$payment = 1;
				}else if($status == 'pending'){
					$payment = 2;
				}else{
					$payment = 0;
				}
			$account_id  = $event_json->data->object->id;
			$user_details  =  $this->webhook_model->get_row_data('users', array('account_id' => $account_id),'row_array'); 
            $setup_detail = json_decode($user_details['setups'], true);
            $setups['payment'] = $payment;
            $setups['profile'] = $setup_detail['profile'];
            $setups['payout'] = $setup_detail['payout'];
            $data['setups'] = json_encode($setups);

            $update = $this->webhook_model->update_row_data('users',array('id' => $instructor_id ),$data);
            if ($update) {
                echo "Success: Account Updated.";
            }else{
            	echo "failed";
            }
		}


		//payout.paid
		if (isset($event_json) && $event_json->type == "payout.paid") {
			print_r($event_json->data->object->id);
			$payout = $event_json->data->object;
			$payout_id = $payout->id;

			$detail = $this->webhook_model->get_row_data('payouts', array('payout_id' =>$payout_id));

			if (!empty($detail)) {
				
				$data = array(
					'failure_code' => $payout->failure_code, 
					'failure_message' => $payout->failure_message, 
					'status' => $payout->status, 
					'date_updated' => date('Y-m-d H:i:s'),
				);

				$update = $this->webhook_model->update_row_data('payouts', array('id' => $detail->id), $data);
				if($update)
					echo "Payout Updated";
				else
					echo "Payout not updated";
			}
			else
				echo "Payout not found";
		}

		//payout.failed
		if (isset($event_json) && $event_json->type == "payout.failed") {
			print_r($event_json->data->object->id);
			$payout = $event_json->data->object;
			$payout_id = $payout->id;

			$detail = $this->webhook_model->get_row_data('payouts', array('payout_id' =>$payout_id));

			if (!empty($detail)) {
				
				$data = array(
					'failure_code' => $payout->failure_code, 
					'failure_message' => $payout->failure_message, 
					'status' => $payout->status, 
					'date_updated' => date('Y-m-d H:i:s'),
				);

				$update = $this->webhook_model->update_row_data('payouts', array('id' => $detail->id), $data);
				if($update)
					echo "Payout Updated";
				else
					echo "Payout not updated";
			}
			else
				echo "Payout not found";
		}

		//payout.updated
		if (isset($event_json) && $event_json->type == "payout.updated") {
			print_r($event_json->data->object->id);
			$payout = $event_json->data->object;
			$payout_id = $payout->id;

			$detail = $this->webhook_model->get_row_data('payouts', array('payout_id' =>$payout_id));

			if (!empty($detail)) {
				
				$data = array(
					'failure_code' => $payout->failure_code, 
					'failure_message' => $payout->failure_message, 
					'status' => $payout->status, 
					'date_updated' => date('Y-m-d H:i:s'),
				);

				$update = $this->webhook_model->update_row_data('payouts', array('id' => $detail->id), $data);
				if($update)
					echo "Payout Updated";
				else
					echo "Payout not updated";
			}else
				echo "Payout not found";
		}
		

		
	}
}?>
