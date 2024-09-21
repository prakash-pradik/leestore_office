<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
/* 
| ------------------------------------------------------------------- 
|  Stripe API Configuration 
| ------------------------------------------------------------------- 
| 
| You will get the API keys from Developers panel of the Stripe account 
| Login to Stripe account (https://dashboard.stripe.com/) 
| and navigate to the Developers >> API keys page 
| 
|  stripe_api_key            string   Your Stripe API Secret key. 
|  stripe_publishable_key    string   Your Stripe API Publishable key. 
|  stripe_currency           string   Currency code. 
*/ 
$config['stripe_api_key']         = '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'; 
$config['stripe_publishable_key'] = 'pk_live_51HEmBvIAWdlPS4CiadDFqbYYJ8DkVnwvtHujy10tN6hoOUPFhlqLSRfiX7VMffYAULVnkas22HHqoOAexEujH4nC00zpQildiK'; 
$config['stripe_currency']        = 'usd';
$config['stripe_api_key_mexico']  = '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';
$config['stripe_publishable_key_mexico'] = 'pk_live_51IgJdhGsJeDQjBl6HedpejMSbw3iwTFZVcPZDWwpXplmBGeakn9Obcdr7ZJdi8OdynTm1jGfpenNLDDab9Uexpsy00qGTyl5Ew';
