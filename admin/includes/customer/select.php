<?php
function get_main_table($data){
    $part1 = '<table class="table table-bordered" cellspacing="0" width="100%" id="dataTable" cellspacing="0">
    <thead>
        <tr>
            <th class="w-auto p-1">S.No</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Ort</th>
            <th>Company</th>
            <th>Service</th>
            <th>Website</th>
            <th>Domain</th>
            <th>Advance</th>
            <th>Total</th>
            <th>Balance</th>
        </tr>
    </thead>
    <tbody>
        ';
    $data = '';
    $rows = getFetchArray("select * from customers");
    foreach($rows as $result)
		{
			$id= $result['id'];
			$name= $result['first_name'].' '.$result['last_name'];
			$address = $result["address"];
            $ort = $result["ort"];
            $pin_code = $result["pin_code"];
            $mobile = $result["mobile"];
            $email = $result["email"];

            $company_name = $result["company_name"];
            $service_type = $result["service_type"];
            $product_type = $result["product_type"];
            $website_name = $result["website_name"];
            $supported_language = $result["supported_language"];
            $total_pages = $result["total_pages"];

            $media_support = $result["media_support"];
            $domain_hosting = $result["domain_hosting"];
            $mail_support = $result["mail_support"];
            $mail_advertisement = $result["mail_advertisement"];
            $user_feedback = $result["user_feedback"];
            $seo_support = $result["seo_support"];

            $google_business_support = $result["google_business_support"];
            $cookies_support = $result["cookies_support"];
            $google_check_activation = $result["google_check_activation"];
            $advance_paid = $result["advance_paid"];

            $advance_amount = $result["advance_amount"];
            $total_price = $result["total_price"];
            $balance = $result["balance"];
            $delivery_date = $result["delivery_date"];
            $warranty_period = $result["warranty_period"];
			$data=$data.'<tr>
            <td class="w-auto p-1"><input type="checkbox" class="btn-check" name="edit_id" value="'.$id.'" autocomplete="off"></td>
			<td>'.$name.'</td>
            <td>'.$mobile.'</td>
            <td>'.$ort.'</td>
            <td>'.$company_name.'</td>
            <td>'.$service_type.'</td>
            <td>'.$website_name.'</td>
            <td>'.$domain_hosting.'</td>
            <td>'.$advance_amount.'</td>
            <td>'.$total_price.'</td>
            <td>'.$balance.'</td>
		</tr>';
		}
    
    $part3 = '
    </tbody>
</table>';
    return $part1.$data.$part3;
}
?>