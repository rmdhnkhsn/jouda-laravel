<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShipDivision;
use App\Models\ShipDistrict;
use App\Models\ShipState;

use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function DistrictGetAjax($division_id){

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=".$division_id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: e3171a515518ac6f5e817c3322879d97"
			),
		));
		
		$response = curl_exec($curl);
		$err = curl_error($curl);
		
		curl_close($curl);
		
		if ($err) {
			echo "cURL Error #:" . $err;
		} 

		$city = json_decode($response);

    	// $ship = ShipDistrict::where('division_id',$division_id)->orderBy('district_name','ASC')->get();
    	return json_encode($city);

    } // end method 

    public function CostGetAjax($division_id, $district_id, $weight){
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "origin=".$division_id."&destination=".$district_id."&weight=".$weight."&courier=jne",
			CURLOPT_HTTPHEADER => array(
				"key: e3171a515518ac6f5e817c3322879d97"
			),
		));
		
		$response = curl_exec($curl);
		$err = curl_error($curl);
		
		curl_close($curl);
		
		if ($err) {
			echo "cURL Error #:" . $err;
		} 

		$cost = json_decode($response);

    	// $ship = ShipDistrict::where('division_id',$division_id)->orderBy('district_name','ASC')->get();
    	return json_encode($cost);

    } // end method 


     public function StateGetAjax($district_id){

    	$ship = ShipState::where('district_id',$district_id)->orderBy('state_name','ASC')->get();
    	return json_encode($ship);

    } // end method 


    public function CheckoutStore(Request $request){
    	// dd($request->all());
    	$data = array();
    	$data['shipping_name'] = $request->shipping_name;
    	$data['shipping_email'] = $request->shipping_email;
    	$data['shipping_phone'] = $request->shipping_phone;
    	$data['post_code'] = $request->post_code;
    	$data['division_id'] = $request->division_id;
    	$data['district_id'] = $request->district_id;
    	$data['division'] = $request->division;
    	$data['district'] = $request->district;
    	$data['subdistrict'] = $request->subdistrict;
    	// $data['state_id'] = $request->state_id;
    	$data['address'] = $request->address;
    	$data['jasa_kirim'] = $request->jasa_kirim;
    	$cartTotal = Cart::total();


    	if ($request->payment_method == 'stripe') {
    		return view('frontend.payment.stripe',compact('data','cartTotal'));
    	}elseif ($request->payment_method == 'cash') {
				return view('frontend.payment.cash',compact('data','cartTotal'));
		}else{
    		return view('frontend.payment.manual', compact('data','cartTotal'));
    	}
    	 

    }// end mehtod. 



}
 