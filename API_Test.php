<html>
<head> 
	<script src="http://code.jquery.com/jquery-1.5.1.js" type="text/javascript"></script> 

	<script type="text/javascript">

	$(document).ready(function(){
		$("#call_type").change(function(){
		
						if ($(this).val() == "detail_company_info" ) {
			
						 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				
			}
			
						if ($(this).val() == "detail_contact_info" ) {
			
						 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				
			}
			
						if ($(this).val() == "detail_pending_payment" ) {
			
						 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect

				
			}
			
						if ($(this).val() == "list_payments" ) {
			
						 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect

				
			}


			if ($(this).val() == "list_sales" ) {
			
						//Slide Up Effect
				$(parameters).children().slideUp("fast");					
			

				//Slide Down Effect
				$("#parameter_title").slideDown("fast");
				$("#sale_id_parameter").slideDown("fast");
				$("#invoice_id_parameter").slideDown("fast");
				$("#customer_name_parameter").slideDown("fast");
				$("#customer_email_parameter").slideDown("fast");
				$("#customer_phone_parameter").slideDown("fast");
				$("#vendor_product_id_parameter").slideDown("fast");
				$("#ccard_first_6_parameter").slideDown("fast");
				$("#ccard_last_2_parameter").slideDown("fast");
				$("#sale_date_begin_parameter").slideDown("fast");
				$("#sale_date_end_parameter").slideDown("fast");
				$("#declined_recurrings_parameter").slideDown("fast");
				$("#active_recurrings_parameter").slideDown("fast");
				$("#refunded_parameter").slideDown("fast");
				$("#cur_page_parameter").slideDown("fast");
				$("#page_size_parameter").slideDown("fast");
				$("#sort_col_parameter").slideDown("fast");
				$("#sort_dir_parameter").slideDown("fast");
}


			if ($(this).val() == "detail_sale" ) {
			
						 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
				$("#sale_id_parameter").slideDown("fast"); 
				$("#invoice_id_parameter").slideDown("fast");
				
			}

			if ($(this).val() == "refund_invoice" ) {
			
						 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
				$("#sale_id_parameter").slideDown("fast");
				$("#invoice_id_parameter").slideDown("fast");
				$("#amount_parameter").slideDown("fast");
				$("#currency_id_parameter").slideDown("fast");
				$("#category_parameter").slideDown("fast");
				$("#comment_parameter").slideDown("fast");
			 
			}

			if ($(this).val() == "refund_lineitem" ) {
			
						 //Slide Up Effect
				$(parameters).children().slideUp("fast");
			

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
				$("#lineitem_id_parameter").slideDown("fast");
				$("#invoice_id_parameter").slideDown("fast");
				$("#category_parameter").slideDown("fast");
				$("#comment_parameter").slideDown("fast");
}

			if ($(this).val() == "stop_lineitem_recurring" ) {
			
						 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
				$("#lineitem_id_parameter").slideDown("fast");
				
			}

			if ($(this).val() == "reauth" ) {
			
						 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect	
				$("#parameter_title").slideDown("fast");
				$("#sale_id_parameter").slideDown("fast"); 


			}

			if ($(this).val() == "mark_shipped" ) {
			
						 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
			    $("#sale_id_parameter").slideDown("fast");
				$("#invoice_id_parameter").slideDown("fast");
				$("#tracking_number_parameter").slideDown("fast");
				$("#cc_customer_parameter").slideDown("fast");
				$("#reauthorize_parameter").slideDown("fast");
				$("#comment_parameter").slideDown("fast");
		
			}

			if ($(this).val() == "update_lineitem_recurring" ) {
			
						 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
			    $("#lineitem_id_parameter").slideDown("fast");
			    $("#shift_parameter").slideDown("fast");
			    $("#price_parameter").slideDown("fast");
			    $("#comment_parameter").slideDown("fast");						 
			}

			if ($(this).val() == "create_comment" ) {
			
						 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
			    $("#sale_id_parameter").slideDown("fast");
			    $("#sale_comment_parameter").slideDown("fast");
			    $("#cc_vendor_parameter").slideDown("fast");
			    $("#cc_customer_parameter").slideDown("fast");						 
			}			
			
			if ($(this).val() == "detail_product" ) {
			
						 //Slide Up Effect
				$(parameters).children('div:not(#product_id_parameter)').slideUp("fast");	

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
				$("#product_id_parameter").slideDown("fast");

			}

			if ($(this).val() == "list_products" ) {
			
						 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
				$("#2COID_parameter").slideDown("fast"); 
				$("#product_id_parameter").slideDown("fast"); 
				$("#product_name_parameter").slideDown("fast"); 
				$("#cur_page_parameter").slideDown("fast"); 
				$("#pagesize_parameter").slideDown("fast"); 
				$("#sort_col_parameter").slideDown("fast"); 
				$("#sort_dir_parameter").slideDown("fast"); 				
			
			}

			if ($(this).val() == "create_product" ) {
			
						 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
				$("#name_parameter").slideDown("fast"); 
				$("#price_parameter").slideDown("fast"); 
				$("#vendor_product_id_parameter").slideDown("fast"); 
				$("#description_parameter").slideDown("fast"); 
				$("#long_parameter").slideDown("fast"); 
				$("#pending_url_parameter").slideDown("fast"); 
				$("#approved_url_parameter").slideDown("fast"); 
				$("#tangible_parameter").slideDown("fast"); 
				$("#weight_parameter").slideDown("fast"); 
				$("#handling_parameter").slideDown("fast"); 
				$("#recurring_parameter").slideDown("fast"); 
				$("#startup_fee_parameter").slideDown("fast"); 
				$("#recurrence_parameter").slideDown("fast"); 
				$("#duration_parameter").slideDown("fast"); 
				$("#commission_parameter").slideDown("fast"); 
				$("#commission_type_parameter").slideDown("fast"); 
				$("#commission_amount_parameter").slideDown("fast"); 
				$("#option_id_parameter").slideDown("fast"); 
				$("#category_id_parameter").slideDown("fast"); 				

			}

			if ($(this).val() == "update_product" ) {
			
			 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
				$("#product_id_parameter").slideDown("fast"); 
				$("#name_parameter").slideDown("fast"); 
				$("#price_parameter").slideDown("fast"); 
				$("#vendor_product_id_parameter").slideDown("fast"); 
				$("#description_parameter").slideDown("fast"); 
				$("#long_parameter").slideDown("fast"); 
				$("#pending_url_parameter").slideDown("fast"); 
				$("#approved_url_parameter").slideDown("fast"); 
				$("#tangible_parameter").slideDown("fast"); 
				$("#weight_parameter").slideDown("fast"); 
				$("#handling_parameter").slideDown("fast"); 
				$("#recurring_parameter").slideDown("fast"); 
				$("#startup_fee_parameter").slideDown("fast"); 
				$("#recurrence_parameter").slideDown("fast"); 
				$("#duration_parameter").slideDown("fast"); 
				$("#commission_parameter").slideDown("fast"); 
				$("#commission_type_parameter").slideDown("fast"); 
				$("#commission_amount_parameter").slideDown("fast"); 
				$("#option_id_parameter").slideDown("fast"); 
				$("#category_id_parameter").slideDown("fast"); 	
			}

			if ($(this).val() == "delete_product" ) {

			 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
				$("#product_id_parameter").slideDown("fast"); 
			}

			if ($(this).val() == "detail_option" ) {

			 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
				$("#option_id_parameter").slideDown("fast"); 
			}

			if ($(this).val() == "list_options" ) {

			 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
				$("#option_name_parameter").slideDown("fast"); 
				$("#option_value_name_parameter").slideDown("fast"); 
				$("#cur_page_parameter").slideDown("fast"); 
				$("#pagesize_parameter").slideDown("fast"); 
				$("#sort_col_parameter").slideDown("fast"); 
				$("#sort_dir_parameter").slideDown("fast"); 
			}

			if ($(this).val() == "create_option" ) {

			 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
				$("#option_name_parameter").slideDown("fast"); 
				$("#option_value_name_parameter").slideDown("fast"); 
				$("#option_value_surcharge_parameter").slideDown("fast"); 
			}

			if ($(this).val() == "update_option" ) {

			 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
			 	$("#option_id_parameter").slideDown("fast"); 
				$("#option_name_parameter").slideDown("fast"); 
				$("#option_value_id_parameter").slideDown("fast"); 
				$("#option_value_name_parameter").slideDown("fast"); 
				$("#option_value_surcharge_parameter").slideDown("fast"); 
			}

			if ($(this).val() == "delete_option" ) {

			 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
			 	$("#option_id_parameter").slideDown("fast"); 
			}

			if ($(this).val() == "detail_coupon" ) {

			 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
			 	$("#coupon_code_parameter").slideDown("fast"); 
			}

			if ($(this).val() == "list_coupons" ) {

			 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
			 
			}

			if ($(this).val() == "create_coupon" ) {

			 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
			 	$("#coupon_code_parameter").slideDown("fast"); 
			 	$("#date_expire_parameter").slideDown("fast"); 
			 	$("#type_parameter").slideDown("fast"); 
			 	$("#percentage_off_parameter").slideDown("fast"); 
			 	$("#value_off_parameter").slideDown("fast"); 
			 	$("#minimum_purchase_parameter").slideDown("fast"); 
			 	$("#product_id_parameter").slideDown("fast"); 
			 	$("#select_all_parameter").slideDown("fast"); 				
			}

			if ($(this).val() == "update_coupon" ) {

			 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
			 	$("#coupon_code_parameter").slideDown("fast"); 			 
			 	$("#new_code_parameter").slideDown("fast"); 
			 	$("#date_expire_parameter").slideDown("fast"); 
			 	$("#type_parameter").slideDown("fast"); 
			 	$("#percentage_off_parameter").slideDown("fast"); 
			 	$("#value_off_parameter").slideDown("fast"); 
			 	$("#minimum_purchase_parameter").slideDown("fast"); 
			 	$("#product_id_parameter").slideDown("fast"); 
			 	$("#select_all_parameter").slideDown("fast"); 	
			}

			if ($(this).val() == "delete_coupon" ) {

			 //Slide Up Effect
				$(parameters).children().slideUp("fast");

			 //Slide Down Effect
				$("#parameter_title").slideDown("fast");
			 	$("#coupon_code_parameter").slideDown("fast"); 	
			}

		});
	});

	</script>

	<title>2Checkout API Test Application</title>

	<style type="text/css">

	.hide
	{
	display:none;
	}

	.input_text
	{
	width: 300px;
	margin-bottom: 1em;
	}
	
	label
	{  
	display: block;  
	float: left;  
	width: 10em;  
	margin-right: 1em;  
	text-align: left;  
	} 
	
    body
    {
    line-height: 1;
    color: black;
    background: #C1CDCD;
    font-family: sans-serif;
	font-size: 14px;	
    }
		
    #fieldset
    {
	color: #000;
	background: #F5F5F5;
	border: 1px solid #330099;
	padding: 4px 8px;
	float: center;
    width: 80%;
    font-family: sans-serif;
	font-size: 16px;	
    margin-left: 10%;
    margin-right: 10%;
	}

	.legend
    {
    color: #000;
    background: #87CEEB;
    border: 1px solid #781351;
    padding: 2px 6px;
    float: center;
    font-family:sans-serif;
	font-size: 24px;	

	}


    #response
    {
	background: #F5F5F5;
    border: 1px solid #330099;   
    padding: 4px 8px;
	overflow: auto;
	float: center;
    width: 80%;
    margin-left: 10%;
    margin-right: 10%;
	}
	
	fieldset.submit 
	{  
	float: center;  
	width: auto;  
	border: 0 none #FFF;    
	}  
	
	</style> 
</head> 
<body>

<div id="wrapper">

<form id="ExampleForm" action='API_Test.php' method='post'>
<div id="fieldset">
<span class="legend">API TESTING TOOL</span>
	<p>
<div class="input select">
<label for="call_type">API CALL:</label> 
<select name="call_type" id="call_type" class="input_text" size="1" >
      <option value="">(select api call)</option>
      <option value="detail_company_info">detail_company_info</option>
      <option value="detail_contact_info">detail_contact_info</option>
      <option value="detail_pending_payment">detail_pending_payment</option>
      <option value="list_payments">list_payments</option>
      <option value="detail_sale">detail_sale</option>
      <option value="list_sales">list_sales</option>
      <option value="refund_invoice">refund_invoice</option>
      <option value="refund_lineitem">refund_lineitem</option>
      <option value="stop_lineitem_recurring">stop_lineitem_recurring</option>
      <option value="reauth">reauth</option>
      <option value="mark_shipped">mark_shipped</option>
      <option value="create_comment">create_comment</option>
      <option value="update_lineitem_recurring">update_lineitem_recurring</option>	  
      <option value="detail_product">detail_product</option>
      <option value="list_products">list_products</option>
      <option value="create_product">create_product</option>
      <option value="update_product">update_product</option>
      <option value="delete_product">delete_product</option>
      <option value="detail_option">detail_option</option>
      <option value="list_options">list_options</option>
      <option value="create_option">create_option</option>
      <option value="update_option">update_option</option>
      <option value="delete_option">delete_option</option>
      <option value="detail_coupon">detail_coupon</option>
      <option value="list_coupons">list_coupons</option>
      <option value="create_coupon">create_coupon</option>
      <option value="update_coupon">update_coupon</option>
      <option value="delete_coupon">delete_coupon</option>
    </select>	
</br>

<label for="format_type">FORMAT:</label>
<select name="format_type" id="format_type" class="input_text" size="1" >
      <option value="xml">XML</option>
      <option value="json">JSON</option>
      <option value="html">HTML</option>
    </select>
</br>
<label for="user">API USERNAME:</label>
<input type='text' name='user' id="user" class="input_text" value=''>
</br>
<label for="pass">API PASSWORD:</label>
<input type='text' name='pass' id="pass" class="input_text" value=''>
</br>
</div>

<div class="parameters" id="parameters">

<div class="hide" id="parameter_title">
<h3>PARAMETERS:</h3>
</br>
</div>

<div class="hide" id="sale_id_parameter">
<label for="sale_id">sale_id</label> 
<input type='text' name='sale_id' id="sale_id" class="input_text" value=''>
</br>
</div>

<div class="hide" id="invoice_id_parameter">
<label for="invoice_id">invoice_id</label> 
<input type='text' name='invoice_id' id="invoice_id" class="input_text" value=''>
</br>
</div>

<div class="hide" id="customer_name_parameter">
<label for="customer_name">customer_name</label> 
<input type='text' name='customer_name' id="customer_name" class="input_text" value=''>
</br>
</div>

<div class="hide" id="customer_email_parameter">
<label for="customer_email">customer_email</label> 
<input type='text' name='customer_email' id="customer_email" class="input_text" value=''>
</br>
</div>

<div class="hide" id="customer_phone_parameter">
<label for="invoice_id">customer_phone</label> 
<input type='text' name='customer_phone' id="customer_phone" class="input_text" value=''>
</br>
</div>

<div class="hide" id="vendor_product_id_parameter">
<label for="vendor_product_id">vendor_product_id</label> 
<input type='text' name='vendor_product_id' id="vendor_product_id" class="input_text" value=''>
</br>
</div>

<div class="hide" id="ccard_first6_parameter">
<label for="ccard_first6">ccard_first6</label> 
<input type='text' name='ccard_first6' id="ccard_first6" class="input_text" value=''>
</br>
</div>

<div class="hide" id="ccard_last2_parameter">
<label for="ccard_last2">ccard_last2</label> 
<input type='text' name='ccard_last2' id="ccard_last2" class="input_text" value=''>
</br>
</div>

<div class="hide" id="sale_date_begin_parameter">
<label for="sale_date_begin">sale_date_begin</label> 
<input type='text' name='sale_date_begin' id="sale_date_begin" class="input_text" value=''>
</br>
</div>

<div class="hide" id="sale_date_end_parameter">
<label for="sale_date_end">sale_date_end</label> 
<input type='text' name='sale_date_end' id="sale_date_end" class="input_text" value=''>
</br>
</div>

<div class="hide" id="declined_recurrings_parameter">
<label for="declined_recurrings">declined_recurrings</label> 
<input type='text' name='declined_recurrings' id="declined_recurrings" class="input_text" value=''>
</br>
</div>

<div class="hide" id="active_recurrings_parameter">
<label for="active_recurrings">active_recurrings</label> 
<input type='text' name='active_recurrings' id="active_recurrings" class="input_text" value=''>
</br>
</div>

<div class="hide" id="refunded_parameter">
<label for="refunded">refunded</label> 
<input type='text' name='refunded' id="refunded" class="input_text" value=''>
</br>
</div>

<div class="hide" id="cur_page_parameter">
<label for="cur_page">cur_page</label> 
<input type='text' name='cur_page' id="cur_page" class="input_text" value=''>
</br>
</div>

<div class="hide" id="page_size_parameter">
<label for="pagesize">pagesize</label> 
<input type='text' name='pagesize' id="pagesize" class="input_text" value=''>
</br>
</div>

<div class="hide" id="sort_col_parameter">
<label for="sort_col">sort_col</label> 
<input type='text' name='sort_col' id="sort_col" class="input_text" value=''>
</br>
</div>

<div class="hide" id="sort_dir_parameter">
<label for="sort_dir">sort_dir</label> 
<input type='text' name='sort_dir' id="sort_dir" class="input_text" value=''>
</br>
</div>

<div class="hide" id="amount_parameter">
<label for="amount">amount</label> 
<input type='text' name='amount' id="amount" class="input_text" value=''>
</br>
</div>

<div class="hide" id="currency_parameter">
<label for="currency">currency</label> 
<input type='text' name='currency' id="currency" class="input_text" value=''>
</br>
</div>

<div class="hide" id="category_parameter">
<label for="invoice_id">category</label> 
<input type='text' name='category' id="category" class="input_text" value=''>
</br>
</div>

<div class="hide" id="sale_comment_parameter">
<label for="sale_comment">sale_comment</label> 
<input type='text' name='sale_comment' id="sale_comment" class="input_text" value=''>
</br>
</div>

<div class="hide" id="comment_parameter">
<label for="comment">comment</label> 
<input type='text' name='comment' id="comment" class="input_text" value=''>
</br>
</div>

<div class="hide" id="shift_parameter">
<label for="shift">shift</label> 
<input type='text' name='shift' id="shift" class="input_text" value=''>
</br>
</div>

<div class="hide" id="lineitem_id_parameter">
<label for="lineitem_id">lineitem_id</label> 
<input type='text' name='lineitem_id' id="lineitem_id" class="input_text" value=''>
</br>
</div>

<div class="hide" id="tracking_number_parameter">
<label for="tracking_number">tracking_number</label> 
<input type='text' name='tracking_number' id="tracking_number" class="input_text" value=''>
</br>
</div>

<div class="hide" id="cc_customer_parameter">
<label for="cc_customer">cc_customer</label> 
<input type='text' name='cc_customer' id="cc_customer" class="input_text" value=''>
</br>
</div>

<div class="hide" id="cc_vendor_parameter">
<label for="cc_vendor">cc_vendor</label> 
<input type='text' name='cc_vendor' id="cc_vendor" class="input_text" value=''>
</br>
</div>

<div class="hide" id="reauthorize_parameter">
<label for="reauthorize">reauthorize</label> 
<input type='text' name='reauthorize' id="reauthorize" class="input_text" value=''>
</br>
</div>

<div class="hide" id="product_id_parameter">
<label for="product_id">product_id</label> 
<input type='text' name='product_id' id="product_id" class="input_text" value=''>
</br>
</div>

<div class="hide" id="2COID_parameter">
<label for="2COID">2COID</label> 
<input type='text' name='2COID' id="2COID" class="input_text" value=''>
</br>
</div>

<div class="hide" id="product_name_parameter">
<label for="product_name">product_name</label> 
<input type='text' name='product_name' id="product_name" class="input_text" value=''>
</br>
</div>

<div class="hide" id="name_parameter">
<label for="name">name</label> 
<input type='text' name='name' id="name" class="input_text" value=''>
</br>
</div>

<div class="hide" id="price_parameter">
<label for="price">price</label> 
<input type='text' name='price' id="price" class="input_text" value=''>
</br>
</div>

<div class="hide" id="vendor_product_id_parameter">
<label for="vendor_product_id">vendor_product_id</label> 
<input type='text' name='vendor_product_id' id="vendor_product_id" class="input_text" value=''>
</br>
</div>

<div class="hide" id="description_parameter">
<label for="description">description</label> 
<input type='text' name='description' id="description" class="input_text" value=''>
</br>
</div>

<div class="hide" id="long_description_parameter">
<label for="long_description">long_description</label> 
<input type='text' name='long_description' id="long_description" class="input_text" value=''>
</br>
</div>

<div class="hide" id="pending_url_parameter">
<label for="pending_url">pending_url</label> 
<input type='text' name='pending_url' id="pending_url" class="input_text" value=''>
</br>
</div>

<div class="hide" id="approved_url_parameter">
<label for="approved_url">approved_url</label> 
<input type='text' name='approved_url' id="approved_url" class="input_text" value=''>
</br>
</div>

<div class="hide" id="tangible_parameter">
<label for="tangible">tangible</label> 
<input type='text' name='tangible' id="tangible" class="input_text" value=''>
</br>
</div>

<div class="hide" id="weight_parameter">
<label for="weight">weight</label> 
<input type='text' name='weight' id="weight" class="input_text" value=''>
</br>
</div>

<div class="hide" id="handling_parameter">
<label for="handling">handling</label> 
<input type='text' name='handling' id="handling" class="input_text" value=''>
</br>
</div>

<div class="hide" id="recurring_parameter">
<label for="recurring">recurring</label> 
<input type='text' name='recurring' id="recurring" class="input_text" value=''>
</br>
</div>

<div class="hide" id="startup_fee_parameter">
<label for="startup_fee">startup_fee</label> 
<input type='text' name='startup_fee' id="startup_fee" class="input_text" value=''>
</br>
</div>

<div class="hide" id="recurrence_parameter">
<label for="recurrence">recurrence</label> 
<input type='text' name='recurrence' id="recurrence" class="input_text" value=''>
</br>
</div>

<div class="hide" id="duration_parameter">
<label for="duration">duration</label> 
<input type='text' name='duration' id="duration" class="input_text" value=''>
</br>
</div>

<div class="hide" id="commission_parameter">
<label for="commission">commission</label> 
<input type='text' name='commission' id="commission" class="input_text" value=''>
</br>
</div>

<div class="hide" id="commission_type_parameter">
<label for="commission_type">commission_type</label> 
<input type='text' name='commission_type' id="commission_type" class="input_text" value=''>
</br>
</div>

<div class="hide" id="commission_amount_parameter">
<label for="commission_amount">commission_amount</label> 
<input type='text' name='commission_amount' id="commission_amount" class="input_text" value=''>
</br>
</div>

<div class="hide" id="option_id_parameter">
<label for="option_id">option_id</label> 
<input type='text' name='option_id' id="option_id" class="input_text" value=''>
</br>
</div>

<div class="hide" id="category_id_parameter">
<label for="category_id">category_id</label> 
<input type='text' name='category_id' id="category_id" class="input_text" value=''>
</br>
</div>

<div class="hide" id="option_name_parameter">
<label for="option_name">option_name</label> 
<input type='text' name='option_name' id="option_name" class="input_text" value=''>
</br>
</div>

<div class="hide" id="option_value_id_parameter">
<label for="option_value">option_value_id</label> 
<input type='text' name='option_value_id' id="option_value_id" class="input_text" value=''>
</br>
</div>

<div class="hide" id="option_value_name_parameter">
<label for="option_value_name">option_value_name</label> 
<input type='text' name='option_value_name' id="option_value_name" class="input_text" value=''>
</br>
</div>

<div class="hide" id="option_value_surcharge_parameter">
<label for="option_value_surcharge">option_value_surcharge</label> 
<input type='text' name='option_value_surcharge' id="option_value_surcharge" class="input_text" value=''>
</br>
</div>

<div class="hide" id="coupon_code_parameter">
<label for="coupon_code">coupon_code</label> 
<input type='text' name='coupon_code' id="coupon_code" class="input_text" value=''>
</br>
</div>

<div class="hide" id="date_expire_parameter">
<label for="date_expire">date_expire</label> 
<input type='text' name='date_expire' id="date_expire" class="input_text" value=''>
</br>
</div>

<div class="hide" id="type_parameter">
<label for="type">type</label> 
<input type='text' name='type' id="type" class="input_text" value=''>
</br>
</div>

<div class="hide" id="percentage_off_parameter">
<label for="percentage_off">percentage_off</label> 
<input type='text' name='percentage_off' id="percentage_off" class="input_text" value=''>
</br>
</div>

<div class="hide" id="value_off_parameter">
<label for="value_off">value_off</label> 
<input type='text' name='value_off' id="value_off" class="input_text" value=''>
</br>
</div>

<div class="hide" id="minimum_purchase_parameter">
<label for="minimum_purchase">minimum_purchase</label> 
<input type='text' name='minimum_purchase' id="minimum_purchase" class="input_text" value=''>
</br>
</div>

<div class="hide" id="select_all_parameter">
<label for="select_all">select_all</label> 
<input type='text' name='select_all' id="select_all" class="input_text" value=''>
</br>
</div>

<div class="hide" id="new_code_parameter">
<label for="new_code">new_code</label> 
<input type='text' name='new_code' id="new_code" class="input_text" value=''>
</br>
</div>

</div>
</fieldset>
<fieldset class="submit">
<input class='submit' type='submit' value='CALL API' >
</fieldset>
</form>
</p>
</div>



<div id="response">
<span class="legend">RESPONSE</span>
<?php

//Get Data
if ($_POST) {
  $data = array_unique(array());
    foreach($_POST as $k => $v) {
	    //Sanitize Input Data
		$v = htmlspecialchars($v);
        $v = stripslashes($v);
	$data[$k] = $v;
    }
	

//Get Authenication and Type
$user = $data["user"];
$pass = $data["pass"];
$type = $data["format_type"];
$call_type = $data["call_type"];

//Prepare array for call
$data = array_filter($data);
unset($data["user"]);
unset($data["pass"]);
unset($data["format_type"]);
unset($data["call_type"]);
unset($data["submit"]);
}

class CALL_API {

	public  $api_base_url = "https://www.2checkout.com/api/";	
	private $user;
	private $pass;
	private $format;
	private $accept = 'application';
	
//Set username and password
	function __construct($user='', $pass='') {
global $user, $pass;
		$this->set_credentials($user, $pass);
	}

	function set_credentials($user, $pass) {
global $user, $pass;
		$this->user = $user;
		$this->pass = $pass;
	}

//Set format
	function set_format() {
global $type;
		if(preg_match('/(xml|json|html)/', $type)) {
			if($type == 'html') {
				$this->accept = 'text';
			} else {
				$this->accept = 'application';
			}
			$this->format = $type;
		} else {
			echo ('<p>Format must only be xml, json or html. (defaults to xml)</p>');
		}
	}
	
//API Calls
	function detail_company_info() {
		$url_suffix = 'acct/detail_company_info';
		return $this->do_call($url_suffix);
	}

	function detail_contact_info() {
		$url_suffix = 'acct/detail_contact_info';
		return $this->do_call($url_suffix);
	}
	
	function detail_pending_payment() {
		$url_suffix = 'acct/detail_pending_payment';
		return $this->do_call($url_suffix);
	}
	
	function list_payments() {
		$url_suffix = 'acct/list_payments';
		return $this->do_call($url_suffix);
	}

	function list_sales() {
		$url_suffix ='sales/list_sales';
			return $this->do_call($url_suffix);		
	}

	function detail_sale() {
		$url_suffix ='sales/detail_sale';
			return $this->do_call($url_suffix);		
	}

	function mark_shipped() {
		$url_suffix ='sales/mark_shipped';
			return $this->do_call($url_suffix);		
	}

	function reauth() {
		$url_suffix ='sales/reauth';
			return $this->do_call($url_suffix);		
	}

	function refund_invoice() {
		$url_suffix ='sales/refund_invoice';
			return $this->do_call($url_suffix);		
	}

	function refund_lineitem() {
		$url_suffix ='sales/refund_lineitem';
			return $this->do_call($url_suffix);		
	}

	function stop_lineitem_recurring() {
		$url_suffix ='sales/stop_lineitem_recurring';
			return $this->do_call($url_suffix);	
	}

	function create_comment() {
		$url_suffix ='sales/create_comment';
			return $this->do_call($url_suffix);
	}

	function create_coupon() {
		$url_suffix ='products/create_coupon';
			return $this->do_call($url_suffix);	
	}

	function update_coupon() {
		$url_suffix ='products/update_coupon';
			return $this->do_call($url_suffix);
	}

	function list_coupons() {
		$url_suffix ='products/list_coupons';
			return $this->do_call($url_suffix);	
	}

	function detail_coupon() {
		$url_suffix ='products/detail_coupon';
			return $this->do_call($url_suffix);		
	}

	function delete_coupon() {
		$url_suffix ='products/delete_coupon';
			return $this->do_call($url_suffix);		
	}

	function create_option() {
		$url_suffix ='products/create_option';
			return $this->do_call($url_suffix);
	}

	function update_option() {
		$url_suffix ='products/update_option';
			return $this->do_call($url_suffix);
	}

	function list_options() {
		$url_suffix ='products/list_options';
			return $this->do_call($url_suffix);
	}

	function detail_option() {
		$url_suffix ='products/detail_option';
			return $this->do_call($url_suffix);
	}

	function delete_option() {
		$url_suffix ='products/delete_option';
			return $this->do_call($url_suffix);
	}

	function create_product() {
		$url_suffix ='products/create_product';
			return $this->do_call($url_suffix);		
	}

	function update_product() {
		$url_suffix ='products/update_product';
			return $this->do_call($url_suffix);	
	}

	function list_products() {
		$url_suffix ='products/list_products';
			return $this->do_call($url_suffix);	
	}

	function detail_product() {
		$url_suffix ='products/detail_product';
			return $this->do_call($url_suffix);	
	}

	function delete_product() {
		$url_suffix ='products/delete_product';
			return $this->do_call($url_suffix);
	}
	
	function update_lineitem_recurring() {
		$url_suffix ='sales/update_lineitem_recurring';
			return $this->do_call($url_suffix);
	}

//Make API Call
	function do_call($url_suffix, $data=array()) {
        global $user, $pass, $data; 
			$url = $this->api_base_url . $url_suffix;
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			
			curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: {$this->accept}/{$this->format}"));
			curl_setopt($ch, CURLOPT_POST, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch, CURLOPT_USERPWD, "{$this->user}:{$this->pass}");
			if(count($data) > 0) {
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			}
			$result = curl_exec($ch);
			curl_close($ch);

//Display response in chosen format
            if ($this->format == "xml") {
                echo "<p><pre>";
                echo htmlentities($result);
                echo "</pre></p>";
            }

            if ($this->format == "json") {
                $result = json_encode($result);
                echo "<p><pre>";
                echo json_decode($result);
                echo "<pre></p>";
            }

            if ($this->format == "html") {		
                echo "<p><pre>";
                echo ($result);
                echo "</pre></p>";
            }
    }
}	


if (isset($user)) {
	$testCall = new CALL_API();
	$testCall->set_format();
	$testCall->$call_type();
}	
?>
</div>
</div>
</body>



</html>

