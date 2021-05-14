<?php namespace Spot\Shipment\Classes;


use Spot\Shipment\Models\Order;
use Spot\Shipment\Models\senderUser;
use Spot\Shipment\Models\Payment;
use \Spot\Shipment\Models\Settings;
use Illuminate\Support\Collection;
use \Maatwebsite\Excel\Concerns\ToCollection;
use Auth;

class ShipmentImport implements ToCollection
{
    public function collection(Collection $rows)
    {
    	$primary_currency  =   \Responsiv\Currency\Models\Currency::where('is_primary', 1)->first();
	    $employees         =   \RainLab\User\Models\User::whereNotIn('role_id',[1,5])->select('id','name')->get();
	    $packaging         =   \Spot\Shipment\Models\Packaging::select('id','name')->get();
	    $couriers          =   \Spot\Shipment\Models\Courier::select('id','name')->get();
	    $deliverytimes     =   \Spot\Shipment\Models\DeliveryTime::select('id','name')->get();
	    $offices           =   \Spot\Shipment\Models\Office::select('id','name')->get();
	    $modes             =   \Spot\Shipment\Models\Mode::select('id','name')->get();
	    $categories        =   \Spot\Shipment\Models\Category::select('id','name')->get();
	    //$states            =   \RainLab\Location\Models\State::whereHas('country',function($q){$q->where('is_enabled', 1);})->																					select('id','name')->get();
	    //$cities            =   \Spot\Shipment\Models\City::select('id','name')->get();
	    $max               =   \Spot\Shipment\Models\Order::max('number')+1;
	    $addShipmentForm   =   Settings::get('addShipmentForm',true);
	    $tracking          =   Settings::get('tracking',true);
	    $fees              =   Settings::get('fees',true);
	    $taxes			   =   Settings::get('taxes',true);

	    \RainLab\User\Models\User::extend(function($model){
            $myrules['mobile'] = 'required|unique:users';
            $myrules['password'] = 'required';
            $model->rules = $myrules;
            
        });
        foreach ($rows as $row) 
        {
        	if($addShipmentForm == "add_form_simple"){

	        	//sender
	        	if(Auth::getUser()->role_id == 5){
	        		$sender_id                           = Auth::getUser()->id;
	        		$sender_address                      = \Spot\Shipment\Models\Address::where(['user_id'=>Auth::getUser()                                                                                    ->id])->first();
	        		$sender_address_id                   = $sender_address->id; 
	        	}else{
	        		$senderUser                          = new \RainLab\User\Models\User;
			        $senderUser->name                    = $row[0];
			        $password                            = \Hash::make(123);
			        $senderUser->password                = $password;
			        $senderUser->password_confirmation   = $password;
			        $senderUser->mobile                  = $row[1];
			        $senderUser->role_id                 = 5;
			        $senderUser->street_addr             = $row[2];
			        $senderUser->created_at              = \Carbon\Carbon::now();
			        $senderUser->updated_at              = \Carbon\Carbon::now();
			        if (!$senderUser->save()){
	                throw new \Exception("sender");
	           		}

	           		$city = \Spot\Shipment\Models\City::where('name','LIKE','%'.$row[4].'%')->first();
	           		$state = \RainLab\Location\Models\State::where('name','LIKE','%'.$row[3].'%')->first();
			        $senderAddr                          = new \Spot\Shipment\Models\Address;
			        $senderAddr->user_id                 = $senderUser->id;
			        $senderAddr->name                    = $row[2];
			        $senderAddr->street                  = $row[2];
			        $senderAddr->state                   = ($state ? $state->id : $row[3]);//$row[3];
			        $senderAddr->city                    = ($city ? $city->id : $row[4]);//$row[4];
			        $senderAddr->default                 = 1;
			        $senderAddr->created_at              = \Carbon\Carbon::now();
			        $senderAddr->updated_at              = \Carbon\Carbon::now();
			        if (!$senderAddr->save()){
	                throw new \Exception("senderAddress");
	           		}

			        $sender_id                           = $senderUser->id;
			        $sender_address_id                   = $senderAddr->id;
	        	}

	        	//receiver
	        	$receiverUser                          = new \RainLab\User\Models\User;
		        $receiverUser->name                    = $row[5];
		        $password                            = \Hash::make(123);
		        $receiverUser->password                = $password;
		        $receiverUser->password_confirmation   = $password;
		        $receiverUser->mobile                  = $row[6];
		        $receiverUser->role_id                 = 5;
		        $receiverUser->street_addr             = $row[7];
		        $receiverUser->created_at              = \Carbon\Carbon::now();
		        $receiverUser->updated_at              = \Carbon\Carbon::now();
		        if (!$receiverUser->save()){
	                throw new \Exception("receiver");
	            }

	            $city = \Spot\Shipment\Models\City::where('name','LIKE','%'.$row[9].'%')->first();
	           	$state = \RainLab\Location\Models\State::where('name','LIKE','%'.$row[8].'%')->first();
		        $receiverAddr                          = new \Spot\Shipment\Models\Address;
		        $receiverAddr->user_id                 = $receiverUser->id;
		        $receiverAddr->name                    = $row[7];
		        $receiverAddr->street                  = $row[7];
		        $receiverAddr->state                   = ($state ? $state->id : $row[8]);//$row[8];
		        $receiverAddr->city                    = ($city ? $city->id : $row[9]);//$row[9];
		        $receiverAddr->default                 = 1;
		        $receiverAddr->created_at              = \Carbon\Carbon::now();
		        $receiverAddr->updated_at              = \Carbon\Carbon::now();
		        if (!$receiverAddr->save()){
	                throw new \Exception("receiverAddress");
	            }

		        $receiver_id                           = $receiverUser->id;
		        $receiver_address_id                   = $receiverAddr->id;

	        	//prodecut
	        	$order                                 = new \Spot\Shipment\Models\Order;
		        $order->sender_id                      = $sender_id;
		        $order->sender_address_id              = $sender_address_id;
		        $order->receiver_id                    = $receiver_id;
		        $order->receiver_address_id            = $receiver_address_id;
		        $order->ship_date                      = $date=\Carbon\Carbon::instance( \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[15]) ); 


		        $number = '';
		            for($x = 0; $x <= $tracking['numbers_order']; $x++){
		            $number .= '0';
		            }
		            $number .= \Spot\Shipment\Models\Order::withTrashed()->max('number')+1;
		            $number = substr($number, -$tracking['numbers_order']);


		        $prev   =   \Spot\Shipment\Models\Order::where('number', $number )->first();
		        if($prev){
		            throw new ApplicationException($this['theme_lang']['another_order_with_the_same_numbers']);
		        }       
		        $order->number                         = $number;
		        $order->created_at                     = \Carbon\Carbon::now();
		        $order->updated_at                     = \Carbon\Carbon::now();
		        $order->barcode                        = $number;
		        foreach ($modes as $mode) {
		        	if($mode->name == strtoupper($row[13]) || $mode->name == strtolower($row[13]) ||                           $mode->name == ucfirst(strtolower($row[13]) ) )
		        	{
		        		$order->mode_id = $mode->id;		
		        	}else{
		        		$order->mode_id = 1;
		        	}
		        }
		        $order->courier_fee           		   = $row[14];
		        $order->type                           = 2;
		        $order->status_id                      = 19;
		        if (!$order->save()){
	                throw new \Exception();
	            }


	            $subitem                               = new \Spot\Shipment\Models\Item;
		        $subitem->order_id                     = $order->id;
		        $categoryID=null;
		        foreach ($categories as $category) {
		        	if($category->name == strtoupper($row[10]) || $category->name == strtolower($row[10]) ||                    $category->name == ucfirst(strtolower($row[10])) )
		        	{
		        		$categoryID = $category->id;
		        		//$subitem->category_id = $category->id;		
		        	}
		        }
		        if($categoryID != null){
		        	$subitem->category_id = $categoryID;	
		        }else{
	        		$category       =new \Spot\Shipment\Models\Category;
	        		$category->name = $row[10];
	        		$category->save();
	        		$subitem->category_id = $category->id;
	        	}
		        $subitem->description                  = $row[16];
		        $subitem->quantity                     = $row[11];
		        $subitem->weight                       = $row[12];
		        if (!$subitem->save()){
	                throw new \Exception();
	            }

	            $payment                    = new \Spot\Shipment\Models\Payment_v2;
		        $payment->from_id            = $order->sender_id;
		        $payment->for_id            = 1;
		        $payment->payment_with      = Auth::getUser()->id;
		        $payment->item_id           = $order->id;
		        $payment->amount            = $order->courier_fee;
		        $payment->payment_method    = 'cash';
		        $payment->payment_status    = 0;
		        $payment->description       = 'courier_fee';
		        $payment->date              = \Carbon\Carbon::parse($order->ship_date);
		        $payment->created_at        = \Carbon\Carbon::now();
		        $payment->updated_at        = \Carbon\Carbon::now();
		        // $payment                               = new \Spot\Shipment\Models\Payment;
		        // $payment->type                         = 1;
		        // $payment->item_id                      = $order->id;
		        // $payment->for_id                       = $order->sender_id;
		        // $payment->payment_with                 = $order->sender_id;
		        // $payment->movement                     = 4; 
		        // $payment->amount                       = $order->courier_fee;
		        // $payment->date                         = \Carbon\Carbon::parse($order->ship_date);
		        // $payment->created_at                   = \Carbon\Carbon::now();
		        // $payment->updated_at                   = \Carbon\Carbon::now();
		        if (!$payment->save()){
	                throw new \Exception();
	            }

	        }else{
	        	if($row[7] == 1)
	        	{
					//receiver
		        	$receiverUser                          = new \RainLab\User\Models\User;
			        $receiverUser->name                    = $row[8];
			        $password                            = \Hash::make(123);
			        $receiverUser->password                = $password;
			        $receiverUser->password_confirmation   = $password;
			        $receiverUser->mobile                  = $row[9];
			        $receiverUser->role_id                 = 5;
			        $receiverUser->street_addr             = $row[10];
			        $receiverUser->created_at              = \Carbon\Carbon::now();
			        $receiverUser->updated_at              = \Carbon\Carbon::now();
			        if (!$receiverUser->save()){
		                throw new \Exception("receiver");
		            }

		            $city = \Spot\Shipment\Models\City::where('name','LIKE','%'.$row[12].'%')->first();
	           		$country = \RainLab\Location\Models\Country::where('name','LIKE','%'.$row[11].'%')->first();
			        $receiverAddr                          = new \Spot\Shipment\Models\Address;
			        $receiverAddr->user_id                 = $receiverUser->id;
			        $receiverAddr->name                    = $row[10];
			        $receiverAddr->street                  = $row[10];
			        $receiverAddr->country                 = ($country ? $country->id : $row[11]);//$row[11];
			        $receiverAddr->city                    = ($city ? $city->id : $row[12]);//$row[12];
			        $receiverAddr->lat                     = $row[13];
			        $receiverAddr->lng                     = $row[14];
			        $receiverAddr->default                 = 1;
			        $receiverAddr->created_at              = \Carbon\Carbon::now();
			        $receiverAddr->updated_at              = \Carbon\Carbon::now();
			        if (!$receiverAddr->save()){
		                throw new \Exception("receiverAddress");
		            }

			        $receiver_id                           = $receiverUser->id;
			        $receiver_address_id                   = $receiverAddr->id;	        		
	        	}

	        	$number = '';
		            for($x = 0; $x <= $tracking['numbers_order']; $x++){
		            $number .= '0';
		            }
		            $number .= \Spot\Shipment\Models\Order::withTrashed()->max('number')+1;
		            $number = substr($number, -$tracking['numbers_order']);

	        	if(Auth::getUser()->role_id == 5){

			        $sender_id                           =   Auth::getUser()->id;
			        $sender_address                      = \Spot\Shipment\Models\Address::where(['user_id'=>Auth::getUser()                                                                                    ->id])->first();
	        		$sender_address_id                   = $sender_address->id;

			        if($row[16]   ==   1) {
			            $delivery_cost  =   $fees['pickup_cost'];
			        }else{
			            $delivery_cost  =   $fees['delivery_cost'];
			        }
			        $return_courier_fee     =   null;

			        if(isset($row[31]) && $row[31] != ''){
			            if($row[34]  ==  1){
			                $return_courier_fee  =   $fees['delivery_cost_back_receiver'];
			            }else{
			                $return_courier_fee  =   $fees['delivery_cost_back_sender'];
			            }
			        }

			        if(isset($receiver_address_id) && $receiver_address_id   !=   '') {
			            $sender_address_id      =   \Spot\Shipment\Models\Address::find($sender_address_id);
			            $receiver_address_id    =   \Spot\Shipment\Models\Address::find($receiver_address_id);

			            $feesRow   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->county)->where('to',$receiver_address_id->county)->where('type',4)->first();
			            if(!$feesRow){
			                $feesRow   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->city)->where('to',$receiver_address_id->city)->where('type',3)->first();
			                if(!$feesRow){
			                    $feesRow   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->state)->where('to',$receiver_address_id->state)->where('type',2)->first();
			                    if(!$feesRow){
			                        $feesRow   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->country)->where('to',$receiver_address_id->country)->where('type',1)->first();
			                    }
			                }
			            }

			            if($feesRow){
			                if($row[16]   ==   1) {
			                    $delivery_cost  =   $feesRow->pickup_cost;
			                }else{
			                    $delivery_cost  =   $feesRow->delivery_cost;
			                }
			                if($feesRow->packaging == 1 && isset($row[17]) && $row[17] != ''){
			                    foreach($feesRow->packaging_fees as $package_fee   =>  $value){
			                        if($package_fee ==  $row[17]){
			                            $delivery_cost  +=   $value;
			                        }
			                    }
			                }
			                if(isset($row[31]) && $row[31] != ''){
			                    if($row[34]  ==  1){
			                        $return_courier_fee  =   $fees->delivery_cost_back_receiver;
			                    }else{
			                        $return_courier_fee  =   $fees->delivery_cost_back_sender;
			                    }
			                }
			            }

			        }

			        $row[33]                        =   $return_courier_fee;
			        $row[30]                        =   $delivery_cost;
			        $row[27]                        =   $taxes['percent'];
			        $row[28]                        =   $taxes['insurance'];
			        $row[29]                        =   0;
			        $status_shipment                =   $tracking['default_status'];
			        $row[37]                        =   $tracking['default_deliverytime'];
			    }else{
			    	//sender
			    	$senderUser                          = new \RainLab\User\Models\User;
			        $senderUser->name                    = $row[0];
			        $password                            = \Hash::make(123);
			        $senderUser->password                = $password;
			        $senderUser->password_confirmation   = $password;
			        $senderUser->mobile                  = $row[1];
			        $senderUser->role_id                 = 5;
			        $senderUser->street_addr             = $row[2];
			        $senderUser->created_at              = \Carbon\Carbon::now();
			        $senderUser->updated_at              = \Carbon\Carbon::now();
			        if (!$senderUser->save()){
	                throw new \Exception("sender");
	           		}

	           		$city = \Spot\Shipment\Models\City::where('name','LIKE','%'.$row[4].'%')->first();
	           		$country = \RainLab\Location\Models\Country::where('name','LIKE','%'.$row[3].'%')->first();
			        $senderAddr                          = new \Spot\Shipment\Models\Address;
			        $senderAddr->user_id                 = $senderUser->id;
			        $senderAddr->name                    = $row[2];
			        $senderAddr->street                  = $row[2];
			        $senderAddr->country                 = ($country ? $country->id : $row[3]);//$row[3];
			        $senderAddr->city                    = ($city ? $city->id : $row[4]);//$row[4];
			        $senderAddr->lat                     = $row[5];
			        $senderAddr->lng                     = $row[6];
			        $senderAddr->default                 = 1;
			        $senderAddr->created_at              = \Carbon\Carbon::now();
			        $senderAddr->updated_at              = \Carbon\Carbon::now();
			        if (!$senderAddr->save()){
	                throw new \Exception("senderAddress");
	           		}

			        $sender_id                           = $senderUser->id;
			        $sender_address_id                   = $senderAddr->id;	
			        $status_shipment                     = 19;
			    }

			    $prev   =   \Spot\Shipment\Models\Order::where('number', $number)->first();
			    if($prev){
			        throw new ApplicationException($this['theme_lang']['another_order_with_the_same_numbers']);
			    }

			    $item                   = new \Spot\Shipment\Models\Order;
			    $item->sender_id        = $sender_id;
			    $item->sender_address_id= $sender_address_id;
			    $item->type             = $row[16];
			    foreach ($packaging as $package_val) {
			        	if($package_val->name == strtoupper($row[17]) || $package_val->name == strtolower($row[17]) ||          $package_val->name == ucfirst(strtolower($row[17]) ) )
			        	{
			        		$item->packaging_id = $package_val->id;		
			        	}else{
			        		$item->packaging_id = 1;
			        	}
			        }
			    foreach ($offices as $office) {
			        	if($office->name == strtoupper($row[18]) || $office->name == strtolower($row[18]) ||                   $office->name == ucfirst( strtolower($row[18]) ) )
			        	{
			        		$item->office_id = $office->id;		
			        	}else{
			        		$item->office_id = 1;
			        	}
			        }
			    $item->ship_date                      = $date=\Carbon\Carbon::instance( \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[19]) ); 

			    if($row[16]    ==  2 or $row[7] == 1){
			        $item->receiver_id      = $receiver_id;
			        $item->receiver_address_id= $receiver_address_id;
			    }
			    $item->payment_type     = $row[15];
			    if(isset($row[31]) && $row[31] != '' && $row[31] != 2){
			        $item->return_defray    = $row[31];
			        $item->package_fee      = $row[32];
			        $item->return_package_fee= $row[34];
			        $item->return_courier_fee= $row[33];
			    }
			    $item->number           = $number;
			    $item->tax              = $row[27];
			    $item->insurance        = $row[28];
			    if(isset($row[35]) && $row[35] != '') { // mode
			    	foreach ($modes as $mode) {
			        	if($mode->name == strtoupper($row[35]) || $mode->name == strtolower($row[35])  ||                       $mode->name == ucfirst(strtolower($row[35]) ) )
			        	{
			        		$item->mode_id = $mode->id;		
			        	}else{
			        		$item->mode_id = 1;
			        	}
			        }
			                  
			    }
			    $item->customs_value    = $row[29];
			    if(isset($row[36]) && $row[36] != ''){//company
			    	foreach ($couriers as $courier) {
			        	if($courier->name == strtoupper($row[36]) || $courier->name == strtolower($row[36]) ||                 $courier->name == ucfirst(strtolower($row[36]) ) )
			        	{
			        		$item->courier_id = $courier->id;		
			        	}else{
			        		$item->courier_id = 1;
			        	}
			        }
			               
			    }
			    $item->courier_fee      = $row[30];
			    foreach ($deliverytimes as $deliverytime) {//delivery time id
			        	if($deliverytime->name == $row[37])
			        	{
			        		$item->delivery_time_id = $deliverytime->id;		
			        	}else{
			        		$item->delivery_time_id = 1;
			        	}
			        }
			    
			    $item->status_id        = $status_shipment ;
			    if(isset($row[38]) && $row[38] != ''){ //assign_id
			    	foreach ($employees as $employee) {
			        	if($employee->name == strtoupper($row[38]) || $employee->name == strtolower($row[38]) ||             $employee->name == ucfirst(strtolower($row[38]) ) )
			        	{
			        		$item->assigned_id = $employee->id;		
			        	}else{
			        		$item->assigned_id = $employees[0]->id;
			        	}
			        }
			          
			    }
			    $item->currency_id      = \Responsiv\Currency\Models\Currency::where('is_primary', 1)->first()->id;
			    $item->channel          = 'backend';
			    $item->created_at       = \Carbon\Carbon::now();
			    $item->updated_at       = \Carbon\Carbon::now();
			    $item->barcode          = $number;
			    $item->save();

			    

			    $shipdate               = \Carbon\Carbon::parse($item->ship_date);
			    $deliverydate           = (($item->deliverytime) ? $shipdate->addHours($item->deliverytime->count):null);
			    $item->delivery_date    = $deliverydate;
			    $item->update();

			    
	            $subitem                    = new \Spot\Shipment\Models\Item;
	            $subitem->order_id          = $item->id;
	            $categoryID=null;
		        foreach ($categories as $category) {
		        	if($category->name == strtoupper($row[20]) || $category->name == strtolower($row[20]) ||                    $category->name == ucfirst(strtolower($row[20])) )
		        	{
		        		$categoryID = $category->id;
		        		//$subitem->category_id = $category->id;		
		        	}
		        }
		        if($categoryID != null){
		        	$subitem->category_id = $categoryID;	
		        }else{
	        		$category       =new \Spot\Shipment\Models\Category;
	        		$category->name = $row[20];
	        		$category->save();
	        		$subitem->category_id = $category->id;
	        	}
	            $subitem->description       = $row[21];
	            $subitem->quantity          = $row[22];
	            $subitem->weight            = $row[23];
	            $subitem->length            = $row[24];
	            $subitem->width             = $row[25];
	            $subitem->height            = $row[26];
	            $subitem->save();


			   $total_payment = null;
		        $return_payment= null;
		        $return_cost_payment = null;

		        if(isset($item->customs_value) && $item->customs_value != 0){
		            $payment                    = new \Spot\Shipment\Models\Payment_v2;
		            if($item->payment_type == 1){
		                $payment->from_id            = $item->receiver_id;
		            }else{
		                $payment->from_id            = $item->sender_id;
		            }
		            $payment->for_id            = 1;
		            $payment->payment_with      = Auth::getUser()->id;
		            $payment->item_id           = $item->id;
		            $payment->amount            = $item->customs_value;
		            $payment->payment_method    = 'cash';
		            $payment->payment_status    = 0;
		            $payment->description       = 'customs_value';
		            $payment->date              = \Carbon\Carbon::parse($item->ship_date);
		            $payment->created_at        = \Carbon\Carbon::now();
		            $payment->updated_at        = \Carbon\Carbon::now();
		            $payment->save();

		            $total_payment +=$item->customs_value;
		        }

		        if( $this['settings']['taxes']['type'] == 1 ){
		            if(isset($item->tax) && $item->tax != 0){
		                $payment                    = new \Spot\Shipment\Models\Payment_v2;
		                if($item->payment_type == 1){
		                    $payment->from_id            = $item->receiver_id;
		                }else{
		                    $payment->from_id            = $item->sender_id;
		                }
		                $payment->for_id            = 1;
		                $payment->payment_with      = Auth::getUser()->id;
		                $payment->item_id           = $item->id;
		                $payment->amount            = ($item->tax*$item->courier_fee/100);
		                $payment->payment_method    = 'cash';
		                $payment->payment_status    = 0;
		                $payment->description       = 'tax';
		                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
		                $payment->created_at        = \Carbon\Carbon::now();
		                $payment->updated_at        = \Carbon\Carbon::now();
		                $payment->save();

		                $total_payment += ($item->tax*$item->courier_fee/100);
		            }
		        }else{
		            if(isset($item->tax_cgst) && $item->tax_cgst != 0){
		                $payment                    = new \Spot\Shipment\Models\Payment_v2;
		                if($item->payment_type == 1){
		                    $payment->from_id            = $item->receiver_id;
		                }else{
		                    $payment->from_id            = $item->sender_id;
		                }
		                $payment->for_id            = 1;
		                $payment->payment_with      = Auth::getUser()->id;
		                $payment->item_id           = $item->id;
		                $payment->amount            = ($item->tax_cgst*$item->courier_fee/100);
		                $payment->payment_method    = 'cash';
		                $payment->payment_status    = 0;
		                $payment->description       = 'tax_cgst';
		                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
		                $payment->created_at        = \Carbon\Carbon::now();
		                $payment->updated_at        = \Carbon\Carbon::now();
		                $payment->save();

		                $total_payment += ($item->tax_cgst*$item->courier_fee/100);
		            }

		            if(isset($item->tax_sgst) && $item->tax_sgst != 0){
		                $payment                    = new \Spot\Shipment\Models\Payment_v2;
		                if($item->payment_type == 1){
		                    $payment->from_id            = $item->receiver_id;
		                }else{
		                    $payment->from_id            = $item->sender_id;
		                }
		                $payment->for_id            = 1;
		                $payment->payment_with      = Auth::getUser()->id;
		                $payment->item_id           = $item->id;
		                $payment->amount            = ($item->tax_sgst*$item->courier_fee/100);
		                $payment->payment_method    = 'cash';
		                $payment->payment_status    = 0;
		                $payment->description       = 'tax_sgst';
		                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
		                $payment->created_at        = \Carbon\Carbon::now();
		                $payment->updated_at        = \Carbon\Carbon::now();
		                $payment->save();

		                $total_payment += ($item->tax_sgst*$item->courier_fee/100);
		            }

		        }
		        
		        if(isset($item->insurance) && $item->insurance != 0){
		            $payment                    = new \Spot\Shipment\Models\Payment_v2;
		            if($item->payment_type == 1){
		                $payment->from_id            = $item->receiver_id;
		            }else{
		                $payment->from_id            = $item->sender_id;
		            }
		            $payment->for_id            = 1;
		            $payment->payment_with      = Auth::getUser()->id;
		            $payment->item_id           = $item->id;
		            $payment->amount            = ($item->insurance*$item->courier_fee/100);
		            $payment->payment_method    = 'cash';
		            $payment->payment_status    = 0;
		            $payment->description       = 'insurance';
		            $payment->date              = \Carbon\Carbon::parse($item->ship_date);
		            $payment->created_at        = \Carbon\Carbon::now();
		            $payment->updated_at        = \Carbon\Carbon::now();
		            $payment->save();

		            $total_payment += ($item->insurance*$item->courier_fee/100);
		        }
		        if(isset($item->return_defray) && $item->return_defray == 1 && $item->sender_id && $item->receiver_id ){
		            $payment                    = new \Spot\Shipment\Models\Payment_v2;
		            $payment->for_id            = $item->sender_id;
		            $payment->from_id            = $item->receiver_id;
		            $payment->payment_with      = Auth::getUser()->id;
		            $payment->item_id           = $item->id;
		            $payment->amount            = $item->package_fee;
		            $payment->payment_method    = 'cash';
		            $payment->payment_status    = 0;
		            $payment->description       = 'return_package';
		            $payment->date              = \Carbon\Carbon::parse($item->ship_date);
		            $payment->created_at        = \Carbon\Carbon::now();
		            $payment->updated_at        = \Carbon\Carbon::now();
		            $payment->save();

		            $return_payment = $item->package_fee;
		            $return_cost_payment = $item->return_courier_fee;

		            if($item->return_package_fee == 2){
		                $payment                    = new \Spot\Shipment\Models\Payment_v2;
		                $payment->for_id            = 1;
		                $payment->from_id            = $item->sender_id;
		                $payment->payment_with      = Auth::getUser()->id;
		                $payment->item_id           = $item->id;
		                $payment->amount            = $item->return_courier_fee;
		                $payment->payment_method    = 'cash';
		                $payment->payment_status    = 0;
		                $payment->description       = 'return_package_fee';
		                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
		                $payment->created_at        = \Carbon\Carbon::now();
		                $payment->updated_at        = \Carbon\Carbon::now();
		                $payment->save();

		            }else{
		                $payment                    = new \Spot\Shipment\Models\Payment_v2;
		                $payment->for_id            = 1;
		                $payment->from_id            = $item->receiver_id;
		                $payment->payment_with      = Auth::getUser()->id;
		                $payment->item_id           = $item->id;
		                $payment->amount            = $item->return_courier_fee;
		                $payment->payment_method    = 'cash';
		                $payment->payment_status    = 0;
		                $payment->description       = 'return_package_fee';
		                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
		                $payment->created_at        = \Carbon\Carbon::now();
		                $payment->updated_at        = \Carbon\Carbon::now();
		                $payment->save();
		            }  
		        }


		        $payment                    = new \Spot\Shipment\Models\Payment_v2;
		        if($item->payment_type == 1){
		            $payment->from_id            = $item->receiver_id;
		        }else{
		            $payment->from_id            = $item->sender_id;
		        }
		        $payment->for_id            = 1;
		        $payment->payment_with      = Auth::getUser()->id;
		        $payment->item_id           = $item->id;
		        $payment->amount            = $item->courier_fee;
		        $payment->payment_method    = 'cash';
		        $payment->payment_status    = 0;
		        $payment->description       = 'courier_fee';
		        $payment->date              = \Carbon\Carbon::parse($item->ship_date);
		        $payment->created_at        = \Carbon\Carbon::now();
		        $payment->updated_at        = \Carbon\Carbon::now();
		        $payment->save();

		        $total_payment +=$item->courier_fee;

		        
		        if($item->payment_type == 1){
		            if($item->return_package_fee == 1){
		                $total_payment += $return_cost_payment;
		            }
		            else{
		                $transaction                    = new \Spot\Shipment\Models\Transaction;
		                $transaction->order_id = $item->id;
		                $transaction->user_id = $item->sender_id;
		                $transaction->amount = $return_cost_payment;
		                $transaction->status = 3; //Deduction from the wallet
		                $transaction->done   =0;
		                $transaction->date              = \Carbon\Carbon::parse($item->ship_date);
		                $transaction->created_at        = \Carbon\Carbon::now();
		                $transaction->updated_at        = \Carbon\Carbon::now();
		                $transaction->save();
		            }

		            $transaction                    = new \Spot\Shipment\Models\Transaction;
		            $transaction->order_id = $item->id;
		            $transaction->user_id = $item->receiver_id;
		            $transaction->amount = $total_payment + $return_payment;
		            $transaction->status = 3; //Deduction from the wallet
		            $transaction->done   =0;
		            $transaction->date              = \Carbon\Carbon::parse($item->ship_date);
		            $transaction->created_at        = \Carbon\Carbon::now();
		            $transaction->updated_at        = \Carbon\Carbon::now();
		            $transaction->save();

		            if(isset($item->return_defray) && $item->return_defray == 1 && $item->sender_id && $item->receiver_id ){
		                $transaction                    = new \Spot\Shipment\Models\Transaction;
		                $transaction->order_id = $item->id;
		                $transaction->user_id = $item->sender_id;
		                $transaction->amount = $return_payment;
		                $transaction->status = 4; //add from the wallet
		                $transaction->done   =0;
		                $transaction->date              = \Carbon\Carbon::parse($item->ship_date);
		                $transaction->created_at        = \Carbon\Carbon::now();
		                $transaction->updated_at        = \Carbon\Carbon::now();
		                $transaction->save();   
		            }

		        }else{
		            if($item->return_package_fee == 2){
		                $total_payment += $return_cost_payment;
		            }else{
		                $return_payment += $return_cost_payment;
		            }
		            $transaction                    = new \Spot\Shipment\Models\Transaction;
		            $transaction->order_id = $item->id;
		            $transaction->user_id = $item->sender_id;
		            $transaction->amount = $total_payment;
		            $transaction->status = 3; //Deduction from the wallet
		            $transaction->done   =0;
		            $transaction->date              = \Carbon\Carbon::parse($item->ship_date);
		            $transaction->created_at        = \Carbon\Carbon::now();
		            $transaction->updated_at        = \Carbon\Carbon::now();
		            $transaction->save();

		            if(isset($item->return_defray) && $item->return_defray == 1 && $item->sender_id && $item->receiver_id ){
		                $transaction                    = new \Spot\Shipment\Models\Transaction;
		                $transaction->order_id = $item->id;
		                $transaction->user_id = $item->receiver_id;
		                $transaction->amount = $return_payment;
		                $transaction->status = 4; //add from the wallet
		                $transaction->done   =0;
		                $transaction->date              = \Carbon\Carbon::parse($item->ship_date);
		                $transaction->created_at        = \Carbon\Carbon::now();
		                $transaction->updated_at        = \Carbon\Carbon::now();
		                $transaction->save();

		                $transaction                    = new \Spot\Shipment\Models\Transaction;
		                $transaction->order_id = $item->id;
		                $transaction->user_id = $item->sender_id;
		                $transaction->amount = $return_payment;
		                $transaction->status = 3; //Deduction from the wallet
		                $transaction->done   =0;
		                $transaction->date              = \Carbon\Carbon::parse($item->ship_date);
		                $transaction->created_at        = \Carbon\Carbon::now();
		                $transaction->updated_at        = \Carbon\Carbon::now();
		                $transaction->save();
		            }
		        }
	        }

        }


    }
}