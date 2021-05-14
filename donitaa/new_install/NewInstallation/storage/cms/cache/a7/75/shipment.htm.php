<?php 
use \Spot\Shipment\Models\Settings;use \Spot\Shipment\Classes\PayPal_getway;use \Responsiv\Currency\Models\Currency;class Cms5ffc0c4f008e1487758732_d03d215276dd7a8d52a50f6d00007583Class extends Cms\Classes\PageCode
{

//

public function onStart(){
    if(!Auth::getUser()->hasUserPermission(["order"],'r')) {
        \Flash::error($this['theme_lang']['not_allowed']);
        return Redirect::to('dashboard/shipments/');
    }
    
    
    $this['order']      =   $order  =   $item   =   \Spot\Shipment\Models\Order::find($this->param('id'));
    $addShipmentForm  = Settings::get('addShipmentForm',true);
    //$pay =$order->all_payments()->where('description','courier_fee')->where('item_id',$order->id)->first();
    //dd($pay->payment_status);
    
    
    switch (Auth::getUser()->role_id) {
        case 6:
            if(!in_array($order->office_id, Auth::getUser()->manage->pluck('id')->toArray())){
                \Flash::error($this['theme_lang']['not_allowed']);
                return Redirect::to('dashboard/shipments/');
            }
            break;
        case 5:
            if($order->sender_id != Auth::getUser()->id && $order->receiver_id != Auth::getUser()->id && $order->created_by != Auth::getUser()->id){
                \Flash::error($this['theme_lang']['not_allowed']);
                return Redirect::to('dashboard/shipments/');
            }
            break;
        case 4:
            if(Auth::getUser()->is_superuser){

                if($order->assigned_id != Auth::getUser()->id){
                    if($order->manifest_id != null){
                        if($order->driver_id != Auth::getUser()->id && $order->employee_id != Auth::getUser()->id){
                            \Flash::error($this['theme_lang']['not_allowed']);
                            return Redirect::to('dashboard/shipments/');
                        }
                    }else{
                        if($order->office_id != Auth::getUser()->office){
                            \Flash::error($this['theme_lang']['not_allowed']);
                            return Redirect::to('dashboard/shipments/');
                        }
                    }
                }else{
                    if($order->office_id != Auth::getUser()->office){
                        \Flash::error($this['theme_lang']['not_allowed']);
                        return Redirect::to('dashboard/shipments/');
                    }
                }

            }else{
                if($order->assigned_id != Auth::getUser()->id){
                    if($order->manifest_id != null){
                        if($order->driver_id != Auth::getUser()->id && $order->employee_id != Auth::getUser()->id){
                            \Flash::error($this['theme_lang']['not_allowed']);
                            return Redirect::to('dashboard/shipments/');
                        }
                    }else{
                        \Flash::error($this['theme_lang']['not_allowed']);
                        return Redirect::to('dashboard/shipments/');
                    }
                }
            }
            break;
        case 3:
            $employees  =   \RainLab\User\Models\User::whereHas('groups',function($q){$q->whereIn('user_group_id', Auth::getUser()->groups->pluck('id')->toArray());})->pluck('id')->toArray();
            if(!in_array($order->assigned_id, $employees)){
                if($order->manifest_id != null){
                    if(!in_array($order->driver_id, $employees) && !in_array($order->employee_id, $employees)){
                        \Flash::error($this['theme_lang']['not_allowed']);
                        return Redirect::to('dashboard/shipments/');
                    }
                }else{
                    \Flash::error($this['theme_lang']['not_allowed']);
                    return Redirect::to('dashboard/shipments/');
                }
            }
            break;
    }

    if(!$order){
        \Flash::error($this['theme_lang']['404']);
        return Redirect::to('dashboard/shipments');
    }

    $this['offices']    =   \Spot\Shipment\Models\Office::where('id', '!=', $order->office_id)->get();
    $this['manifestes'] =   \Spot\Shipment\Models\Manifest::where('id', '!=', $order->manifest_id)->where('status',1)->get();
    $employees          =   \RainLab\User\Models\User::whereNotIn('role_id',[1,5])->where('id', '!=', $order->assigned_id)->select('id','name','places')->get()->toArray();
    $employees_data     =   array();

    $shipping_from_area = $shipping_to_area = $shipping_from_area_id = $shipping_to_area_id = null;
    if($order->sender_address){
        if($order->sender_address->area){
            $shipping_from_area =   4;
            $shipping_from_area_id =   $order->sender_address->area->id;
        }elseif($order->sender_address->thecity){
            $shipping_from_area =   3;
            $shipping_from_area_id =   $order->sender_address->thecity->id;
        }elseif($order->sender_address->thestate){
            $shipping_from_area =   2;
            $shipping_from_area_id =   $order->sender_address->thestate->id;
        }elseif($order->sender_address->thecountry){
            $shipping_from_area =   1;
            $shipping_from_area_id =   $order->sender_address->thecountry->id;
        }
    }
    if($order->receiver_address){
        if($order->receiver_address->area){
            $shipping_to_area =   4;
            $shipping_to_area_id =   $order->receiver_address->area->id;
        }elseif($order->receiver_address->thecity){
            $shipping_to_area =   3;
            $shipping_to_area_id =   $order->receiver_address->thecity->id;
        }elseif($order->receiver_address->thestate){
            $shipping_to_area =   2;
            $shipping_to_area_id =   $order->receiver_address->thestate->id;
        }elseif($order->receiver_address->thecountry){
            $shipping_to_area =   1;
            $shipping_to_area_id =   $order->receiver_address->thecountry->id;
        }
    }
    $shipping_area_type     =    (($order->type == 1) ? $shipping_from_area : $shipping_to_area);
    $shipping_area          =    (($order->type == 1) ? $shipping_from_area_id : $shipping_to_area_id);
    $shipping_address       =    (($order->type == 1) ? $order->sender_address : $order->receiver_address);

    foreach($employees as $employee){
        $areas          =   $employee['places'];
        if($areas){
            $covered = false;
            foreach($areas as $area){
                switch($area['type']){
                    case 1:
                        if($shipping_address->country   ==  $area['area']){
                            $covered = true;
                        }
                    break;
                    case 2:
                        if($shipping_address->state   ==  $area['area']){
                            $covered = true;
                        }
                    break;
                    case 3:
                        if($shipping_address->city   ==  $area['area']){
                            $covered = true;
                        }
                    break;
                    case 4:
                        if($shipping_address->county   ==  $area['area']){
                            $covered = true;
                        }
                    break;
                }
            }
            if($covered == true){
                $employees_data[]   =   $employee;
            }
        }
    }
    $this['employees']  =   $employees_data;

    if(empty($employees_data)){
        $this['no_employees']       =   true;
        $this['employees']          =   \RainLab\User\Models\User::whereNotIn('role_id',[1,5])->where('id', '!=', $order->assigned_id)->select('id','name','places')->get()->toArray();
    }

    if(!$order){
        return Redirect::to($this->page->child_of);
    }
    $progress           = 0;
    $progress_status    = 'warning';
    if($order->delivery_date){
        $deliverydate       = \Carbon\Carbon::parse($order->delivery_date);
    }else{
        if ( $addShipmentForm == "add_form_normal"){
            $shipdate           = \Carbon\Carbon::parse($order->created_at);
            $deliverydate       = $shipdate;
        }else
        {
            $shipdate           = \Carbon\Carbon::parse($order->ship_date);
            $deliverydate       = (($order->deliverytime)? $shipdate->addHours($order->deliverytime->count) :null);
        }
        
    }
    $today              = \Carbon\Carbon::now();

    $time_diff          = $today->diffInDays($deliverydate, false);

    switch($order->requested){
        case 0:
            $progress           = 0;
            break;
        case 1:
            $progress           = 30;
            break;
        case 2:
            $progress           = 100;
            break;
        case 3:
            $progress           = 60;
            break;
        case 4:
            $progress           = 100;
            break;
        case 9:
            $progress           = 50;
            break;
        default:
            $progress           = 100;
    }

    if($progress == 100){
        $progress_status    = 'success';
    }else{
        if($time_diff < 0){
            if($order->requested < 4 or $order->requested == 9){
                $progress_status    = 'danger';
            }
        }
    }

    $this['progress']               =   $progress;
    $this['progress_status']        =   $progress_status;
    $this['countries']      =   \RainLab\Location\Models\Country::select('id','name')->where('is_enabled', 1)->get();
    //$this['states']         =   \RainLab\Location\Models\State::select('id','name')->get();
    //$this['cities']         =   \Spot\Shipment\Models\City::select('id','name')->get();
    //$this['areas']          =   \Spot\Shipment\Models\Area::select('id','name')->get();
    $this['addShipmentForm']      =   Settings::get('addShipmentForm',true);
    $this['payment']        = $payment_setting =    Settings::get('payment', true);



    $sender_fees                =   $receiver_fees  =   0;
    $delivery_cost              =   $item->courier_fee;
    

    $this['sender_fees']     =   $sender_fees =   \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('from_id',$item->sender_id)->sum('amount');

    $this['sender_fee_unpaid']     =   $sender_fee_unpaid =   \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('from_id',$item->sender_id)->where('payment_status', '=', 0)->sum('amount');

    $this['receiver_fees']     =   $receiver_fees =   \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('from_id',$item->receiver_id)->sum('amount');

    $this['receiver_fee_unpaid']     =   $receiver_fee_unpaid =   \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('from_id',$item->receiver_id)->where('payment_status', '=', 0)->sum('amount');

    $this['total_received']     =   $total_received = ($sender_fees-$sender_fee_unpaid) + ($receiver_fees-$receiver_fee_unpaid);

    $this['total_remaining']    =  $total_remaining =   ($sender_fee_unpaid+$receiver_fee_unpaid);
    
    $this['deliver_cost']       =   $item->courier_fee+$item->return_courier_fee;
    $this['sender_fees']        =   $sender_fees;
    $this['receiver_fees']      =   $receiver_fees;


    /* paypal payment */
    $description = '';
    $total_quantity = 0;
    $status = 0;
    foreach( $order->items as $item){
        $total_quantity += $item->quantity;
        $description .= $item->category->name.':'.$item->description.' - Quantity '.$item->quantity.'\r\n';
    }

//dd('$receiver_fee_unpaid '.$receiver_fee_unpaid.' - $sender_fee_unpaid'.$sender_fee_unpaid );    
    if($order->payment_type == 2 ){    
        if($order->sender_id == Auth::getUser()->id){
            $itemPayment = \Spot\Shipment\Models\Payment_v2::where('item_id',$order->id)->where('from_id',$order->sender_id)->where('description','courier_fee')->first();
            $this['paymentStatus'] = $itemPayment->payment_status;
            $this->page->components['paypal']->setProperty('amount', $sender_fee_unpaid);     
            $this->page->components['paypal']->setProperty('quantity', $total_quantity);
            $this->page->components['paypal']->setProperty('description', $description);
        }elseif($order->receiver_id == Auth::getUser()->id){
            if($order->return_defray == 1 && $order->return_package_fee == 1){

                $itemPayment = \Spot\Shipment\Models\Payment_v2::where('item_id',$order->id)->where('from_id',$order->receiver_id)->where('description','return_package')->first();
                $this['paymentReturnStatus'] = $itemPayment->payment_status;
                $this->page->components['paypal']->setProperty('amount', $receiver_fee_unpaid);
                $this->page->components['paypal']->setProperty('quantity', 1);
                $this->page->components['paypal']->setProperty('description', 'Returned Package');
            }
        }
            
    }else{
        if($order->sender_id == Auth::getUser()->id){
            if($order->return_defray == 1 && $order->return_package_fee == 2){
                $itemPayment = \Spot\Shipment\Models\Payment_v2::where('item_id',$order->id)->where('from_id',$order->sender_id)->where('description','return_package')->first();
                $this['paymentReturnStatus'] = $itemPayment->payment_status;
                $this->page->components['paypal']->setProperty('amount', $sender_fee_unpaid);
                $this->page->components['paypal']->setProperty('quantity', 1);
                $this->page->components['paypal']->setProperty('description', 'Return Courier Fee');
            }
            
        }elseif($order->receiver_id == Auth::getUser()->id){
            $itemPayment = \Spot\Shipment\Models\Payment_v2::where('item_id',$order->id)->where('from_id',$order->receiver_id)->where('description','courier_fee')->first();
            $this['paymentStatus'] = $itemPayment->payment_status;
            $this->page->components['paypal']->setProperty('amount', $receiver_fee_unpaid);
            $this->page->components['paypal']->setProperty('quantity', $total_quantity);
            $this->page->components['paypal']->setProperty('description', $description);                            
        }
    }
    
    /* end paypal payment */


    $this['default_currency']   =  $default_currency  =   Currency::where('is_primary', 1)->first();
    
    $current_currency = ($order->currency ? $order->currency->currency_code :  $default_currency->currency_code ) ;
    
    if($order->payment_method == 'paystack'){
        if($payment_setting['enable_paystack'] == 1){
            if(Auth::getUser()->id == $order->sender_id){
                $this['paystack_amount']         =   round($this->currencyConverter($current_currency,'GHS', $sender_fees));
                //dd($sender_fees.','.$this['paystack_amount']);
            }elseif(Auth::getUser()->id == $order->receiver_id){
                $this['paystack_amount']         =   round($this->currencyConverter($current_currency,'GHS', $receiver_fees));
            }
        }
    }

    //if($item->requested == 12){
    //    $this['total_received']     =   $total_received =   \Spot\Shipment\Models\Payment::where('item_id', //$item->id)->where(function($q){
    //        $q->where(function($q){
    //            $q->where('payment_type', 'package_fee');
    //            $q->where(function($q){
    //                $q->where('payment_with', '!=', null);
    //                $q->orWhere('treasury_id', '!=', null);
    //            });
    //        });
    //        $q->orWhere(function($q){
    //            $q->where('payment_type', '!=', 'package_fee');
    //        });
    //    })->where('status', 5)->sum('amount');
    //}else{
    //    $this['total_received']     =   $total_received =   \Spot\Shipment\Models\Payment::where('item_id', //$item->id)->where(function($q){
    //        $q->where(function($q){
    //            $q->where('payment_type', 'package_fee');
    //            $q->where(function($q){
    //                $q->where('payment_with', '!=', null);
    //                $q->orWhere('treasury_id', '!=', null);
    //            });
    //        });
    //        $q->orWhere(function($q){
    //            $q->where('payment_type', '!=', 'package_fee');
    //        });
    //    })->where('for_id', '!=', null)->sum('amount');
    //}

    //$this['total_remaining']    =   ($sender_fees+$receiver_fees)-$total_received;
}
public function currencyConverter($fromCurrency,$toCurrency,$amount) {
    $url = file_get_contents('https://free.currconv.com/api/v7/convert?apiKey=do-not-use-this-key&q='.$fromCurrency.'_'.$toCurrency.'&compact=y');
    $json = json_decode($url, true);
    return $json[$fromCurrency.'_'.$toCurrency]['val']*$amount;
}
public function onEnd(){
    $this->page->title = $this['theme_lang']['shipment_view'].' #'.$this['order']->id;
}
public function onDelete()
{
    if(!Auth::getUser()->hasUserPermission(["order"],'d')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }

    $item = \Spot\Shipment\Models\Order::where('id',$this->param('id'))->first();

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'deleted';
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    $item->payments->each->delete();
    $item->activities->each->delete();
    $item->tasks->each->delete();
    $item->items->each->delete();
    $item->delete();
    return Redirect::to($this->page->child_of);
}
public function onAccept()
{
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }
    $status                 = \Spot\Shipment\Models\Status::where('equal', 1)->first();
    $item                   = \Spot\Shipment\Models\Order::find($this->param('id'));
    if($status){
        $item->status           = $status->id;
    }
    $item->requested        = 1;
    $item->updated_at       = \Carbon\Carbon::now();
    $item->update();

    $event_data =   array(
        'sender'            =>  Auth::getUser(),
        'shipping_sender'   =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'item'              =>  $item,
        'type'              =>  'approved_shipment',
        'thumb'             =>  'icon',
        'icon'              =>  'flaticon-gift',
        'subject'           =>  $this['theme_lang']['approved_shipment'],
        'message'           =>  $this['theme_lang']['approved_shipment'],
        'url'               =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'             =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'accepted';
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/shipments/'.$item->id.'/view');
}
public function onRefuse()
{
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }
    $status                 = \Spot\Shipment\Models\Status::where('equal', 2)->first();
    $item                   = \Spot\Shipment\Models\Order::find($this->param('id'));
    if($status){
        $item->status           = $status->id;
    }
    $item->requested        = 2;
    $item->updated_at       = \Carbon\Carbon::now();
    $item->update();

    \Spot\Shipment\Models\Payment::where('item_id', $item->id)->update(['status'    =>  2]);

    $event_data =   array(
        'sender'            =>  Auth::getUser(),
        'shipping_sender'   =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'item'              =>  $item,
        'type'              =>  'refused_shipment',
        'thumb'             =>  'icon',
        'icon'              =>  'flaticon-gift',
        'subject'           =>  $this['theme_lang']['refused_shipment'],
        'message'           =>  ((isset($data['message']) && $data['message'] != '') ? $data['message'] : $this['theme_lang']['refused_shipment']),
        'url'               =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'             =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'refused';
    if(isset($data['message']) && $data['message'] != ''){
        $activity->other            = htmlspecialchars($data['message']);
    }
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/shipments/'.$item->id.'/view');
}
public function onAssign()
{
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }
    $item                       = \Spot\Shipment\Models\Order::find($this->param('id'));
    if($item->requested == 1 ){
        $status                 = \Spot\Shipment\Models\Status::where('equal', 4)->first();
        if($status){
            $item->status           = $status->id;
            $item->requested        = $status->equal;
        }
    }
    if($item->requested == 9 || $item->requested == 7  ){
        $status                 = \Spot\Shipment\Models\Status::where('equal', 5)->first();
        if($status){
            $item->status           = $status->id;
            $item->requested        = $status->equal;
        }
    }
    if($item->requested == 8 || $item->requested == 11  ){
        $status                 = \Spot\Shipment\Models\Status::where('equal', 12)->first();
        if($status){
            $item->status           = $status->id;
            $item->requested        = $status->equal;
        }
    }
    $item->assigned_id          = htmlspecialchars($data['assigned_id']);
    $item->updated_at           = \Carbon\Carbon::now();
    $item->update();

    $event_data =   array(
        'sender'                =>  Auth::getUser(),
        'shipping_sender'       =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'shipping_responsible'  =>  $data['assigned_id'],
        'item'                  =>  $item,
        'type'                  =>  'assign_shipment',
        'thumb'                 =>  'icon',
        'icon'                  =>  'flaticon-gift',
        'subject'               =>  $this['theme_lang']['assign_shipment'],
        'message'               =>  $this['theme_lang']['assign_shipment'],
        'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'                 =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'assigned';
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/shipments/'.$item->id.'/view');
}
public function onReturnCOD()
{
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }
    $status                 = \Spot\Shipment\Models\Status::where('equal', 14)->first();
    $item                   = \Spot\Shipment\Models\Order::find($this->param('id'));
    if($status){
        $item->status           = $status->id;
    }
    $item->requested        = 14;
    $item->updated_at       = \Carbon\Carbon::now();
    $item->update();

    

    $event_data =   array(
        'sender'            =>  Auth::getUser(),
        'shipping_sender'   =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'item'              =>  $item,
        'type'              =>  'returned_shipment',
        'thumb'             =>  'icon',
        'icon'              =>  'flaticon-gift',
        'subject'           =>  $this['theme_lang']['activity_delivered'],
        'message'           =>  ((isset($data['message']) && $data['message'] != '') ? $data['message'] : $this['theme_lang']['refused_shipment']),
        'url'               =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'             =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'deliverd';
    if(isset($data['message']) && $data['message'] != ''){
        $activity->other            = htmlspecialchars($data['message']);
    }
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/shipments/'.$item->id.'/view');
}
public function onPostpone()
{
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }
    $item                   = \Spot\Shipment\Models\Order::find($this->param('id'));
    $item->delivery_date    = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['ship_date']));
    $item->postponed        = 1;
    $item->updated_at       = \Carbon\Carbon::now();
    $item->update();

    $event_data =   array(
        'sender'                =>  Auth::getUser(),
        'shipping_sender'       =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'item'                  =>  $item,
        'type'                  =>  'postponed_shipment',
        'thumb'                 =>  'icon',
        'icon'                  =>  'flaticon-gift',
        'subject'               =>  $this['theme_lang']['postponed_shipment'],
        'message'               =>  ((isset($data['message']) && $data['message'] != '') ? $data['message'] : $this['theme_lang']['postponed_shipment']),
        'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'                 =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'postponed';
    if(isset($data['message']) && $data['message'] != ''){
        $activity->other            = htmlspecialchars($data['message']);
    }
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/shipments/'.$item->id.'/view');
}
public function onTransfer()
{
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }
    $item                       = \Spot\Shipment\Models\Order::find($this->param('id'));
    $item->office_id            = htmlspecialchars($data['office_id']);
    $item->updated_at           = \Carbon\Carbon::now();
    $item->update();

    $office = \Spot\Shipment\Models\Office::find($data['office_id']);
    if($office->responsible_id == null){
        $responsible_id         =   $office->manger_id;
    }else{
        $responsible_id         =   $office->responsible_id;
    }

    $event_data =   array(
        'sender'                =>  Auth::getUser(),
        'shipping_sender'       =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'shipping_responsible'  =>  $responsible_id,
        'item'                  =>  $item,
        'type'                  =>  'transfered_shipment',
        'thumb'                 =>  'icon',
        'icon'                  =>  'flaticon-gift',
        'subject'               =>  $this['theme_lang']['transfered_shipment'].' '.$this['theme_lang']['to'].' '.$office->name,
        'message'               =>  $this['theme_lang']['transfered_shipment'],
        'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'                 =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'transfered';
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/shipments/'.$item->id.'/view');
}
public function onManifest()
{
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["manifest"],'c')){
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }
    $item                       = \Spot\Shipment\Models\Order::find($this->param('id'));
    $item->manifest_id          = htmlspecialchars($data['manifest_id']);
    $item->updated_at           = \Carbon\Carbon::now();
    $item->update();

    $manifest                   = \Spot\Shipment\Models\Manifest::find($data['manifest_id']);

    if($item->assigned_id){
        $shipping_responsible       =   $item->assigned_id;
    }elseif($item->manifest_id){
        if($item->manifest->driver_id){
            $shipping_responsible  =   $item->manifest->driver_id;
        }elseif($item->manifest->employee_id){
            $shipping_responsible  =   $item->manifest->employee_id;
        }
    }

    $event_data =   array(
        'sender'                =>  Auth::getUser(),
        'shipping_sender'       =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'shipping_responsible'  =>  $item->assigned_id,
        'item'                  =>  $item,
        'type'                  =>  'manifest_assigned',
        'thumb'                 =>  'icon',
        'icon'                  =>  'flaticon-gift',
        'subject'               =>  $this['theme_lang']['manifest_assigned'],
        'message'               =>  $this['theme_lang']['manifest_assigned'],
        'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'                 =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'manifest_assigned';
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/shipments/'.$item->id.'/view');
}
public function onStock()
{
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }


    $item                   = \Spot\Shipment\Models\Order::find($this->param('id'));

    $treasury            = \Spot\Shipment\Models\Treasury::where('office_id', $item->office_id)->first();
    if(!$treasury){
        $treasury            = \Spot\Shipment\Models\Treasury::where('default', 1)->first();
    }
    $employee_id = null;
    $employeeorder          = \Spot\Shipment\Models\Employeeorder::where('order_id', $item->id)->first();
    if($employeeorder){
      $employee_id            = $employeeorder->employee_id;
      $employeeorder->delete();
    }
    //if($employee_id){
    //  if(in_array($item->requested,[9,6])){
    //      $payments               = \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_with', //$employee_id)->where('status', 1)->get();
    //      foreach($payments as $old){
    //          $payment                    = new \Spot\Shipment\Models\Payment;
    //          $payment->type              = 1;
    //          $payment->payment_type      = $old->payment_type;
    //          $payment->item_id           = $old->item_id;
    //          $payment->payment_with      = $employee_id;
    //          $payment->movement          = 7; //Deduction from the balance of packages
    //          $payment->amount            = '-'.$old->amount;
    //          $payment->status            = 3;
    //          $payment->date              = \Carbon\Carbon::now();
    //          $payment->created_at        = \Carbon\Carbon::now();
    //          $payment->updated_at        = \Carbon\Carbon::now();
    //          $payment->save();


    //          $payment                    = new \Spot\Shipment\Models\Payment;
    //          $payment->type              = 3;
    //          $payment->payment_type      = $old->payment_type;
    //          $payment->item_id           = $old->item_id;
    //          $payment->movement          = 2; //Deduction from the balance of packages
    //          $payment->amount            = $old->amount;
    //          $payment->status            = 5;
    //          $payment->treasury_id       = $treasury->id;
    //          $payment->date              = \Carbon\Carbon::now();
    //          $payment->created_at        = \Carbon\Carbon::now();
    //          $payment->updated_at        = \Carbon\Carbon::now();
    //          $payment->save();


    //          $treasury->balance          = $treasury->balance+$old->amount;
    //          $treasury->updated_at       = \Carbon\Carbon::now();
    //          $treasury->save();
    //      }
    //  }
    //}

    $item->requested        = 7;
    $status                 = \Spot\Shipment\Models\Status::where('equal', 7)->first();
    $type                   = 'stock_saved';
    if($status){
        $item->status           = $status->id;
    }
    $item->assigned_id      = null;
    $item->manifest_id      = null;
    $item->updated_at       = \Carbon\Carbon::now();
    $item->update();

    $event_data =   array(
        'sender'                =>  Auth::getUser(),
        'shipping_sender'     =>  (($item->sender_id) ? $item->sender_id : null),
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'shipping_responsible'  =>  $item->assigned_id,
        'item'                  =>  $item,
        'type'                  =>  'stock_saved',
        'thumb'                 =>  'icon',
        'icon'                  =>  'flaticon-gift',
        'subject'               =>  $this['theme_lang']['stock_saved'],
        'message'               =>  $this['theme_lang']['stock_saved'],
        'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'                 =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'stock_saved';
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/shipments/'.$item->id.'/view');
}
public function onDeliverCOD(){
    $data = post();

    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }
    $item                       = \Spot\Shipment\Models\Order::find($this->param('id'));


    if($item->assigned_id){
        $responsiable   =   $item->assigned_id;
    }elseif($item->manifest_id){
        if($item->manifest->driver_id){
            $responsiable   =   $item->manifest->driver_id;
        }elseif($item->manifest->employee_id){
            $responsiable   =   $item->manifest->employee_id;
        }else{
            $responsiable   =   Auth::getUser()->id;
        }
    }else{
        $responsiable   =   Auth::getUser()->id;
    }

    $item->requested        = 13;
    $status                 = \Spot\Shipment\Models\Status::where('equal', 13)->first();
    $type                   = 'discards_driver_received';
    if($status){
        $item->status           = $status->id;
    }
    $item->updated_at       = \Carbon\Carbon::now();
    $item->update();


    if(isset($data['package_fee']) && $data['package_fee'] != ''){
        $payment                    = \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('description','return_package')->first();
        if(isset($payment->id)){
            $payment->for_id            = $item->sender_id;
            $payment->from_id            = $item->receiver_id;
            $payment->payment_with      = Auth::getUser()->id;
            $payment->item_id           = $item->id;
            $payment->amount            = htmlspecialchars($data['package_fee']);
            $payment->payment_method    = $item->payment_method;
            $payment->payment_status    = 2;
            $payment->description       = 'return_package';
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->update();
        }else{
            $payment                    = new \Spot\Shipment\Models\Payment_v2;
            $payment->for_id            = $item->sender_id;
            $payment->from_id            = $item->receiver_id;
            $payment->payment_with      = Auth::getUser()->id;
            $payment->item_id           = $item->id;
            $payment->amount            = htmlspecialchars($data['package_fee']);
            $payment->payment_method    = $item->payment_method;
            $payment->payment_status    = 2;
            $payment->description       = 'return_package';
            $payment->date              = \Carbon\Carbon::parse($item->ship_date);
            $payment->created_at        = \Carbon\Carbon::now();
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->save();
        }
        
    }

    $event_data =   array(
        'sender'                =>  Auth::getUser(),
        'shipping_sender'       =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'shipping_responsible'  =>  $responsiable,
        'item'                  =>  $item,
        'type'                  =>  $type,
        'thumb'                 =>  'icon',
        'icon'                  =>  'flaticon-gift',
        'subject'               =>  $this['theme_lang'][$type],
        'message'               =>  $this['theme_lang'][$type],
        'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'                 =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = $type;
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/shipments/'.$item->id.'/view');
    
}
public function onDeliver()
{
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }
    $item                   = \Spot\Shipment\Models\Order::find($this->param('id'));


    if($item->assigned_id){
        $responsiable   =   $item->assigned_id;
    }elseif($item->manifest_id){
        if($item->manifest->driver_id){
            $responsiable   =   $item->manifest->driver_id;
        }elseif($item->manifest->employee_id){
            $responsiable   =   $item->manifest->employee_id;
        }else{
            $responsiable   =   Auth::getUser()->id;
        }
    }else{
        $responsiable   =   Auth::getUser()->id;
    }

    if($item->requested ==  5){

        $item->requested        = 6;
        $status                 = \Spot\Shipment\Models\Status::where('equal', 6)->first();
        $type                   = 'discards_driver_received';
        if($status){
            $item->status           = $status->id;
        }
        $item->updated_at       = \Carbon\Carbon::now();
        $item->update();

    }elseif($item->requested ==  12){
        $item->requested        = 13;
        $status                 = \Spot\Shipment\Models\Status::where('equal', 13)->first();
        $type                   = 'discards_driver_received';
        if($status){
            $item->status           = $status->id;
        }
        $item->updated_at       = \Carbon\Carbon::now();
        $item->update();
    }
    //elseif($item->requested ==  10){


    //    if($item->assigned_id != null){
    //        $employee_id    =   $item->assigned_id;
    //    }elseif($item->manifest_id != null){
    //        if($item->manifest->driver_id){
    //            $employee_id   =   $item->manifest->driver_id;
    //        }elseif($item->manifest->employee_id){
    //            $employee_id   =   $item->manifest->employee_id;
    //        }else{
    //            $employee_id   =   Auth::getUser()->id;
    //        }
    //    }else{
    //        $employee_id   =   Auth::getUser()->id;
    //    }

    //    $payments   =   \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_type', 'package_fee')->where('treasury_id', '!=', null)->get();
    //    foreach($payments as $old){

    //            $payment                    = new \Spot\Shipment\Models\Payment;
    //            $payment->type              = 1;
    //            $payment->payment_type      = $old->payment_type;
    //            $payment->item_id           = $old->item_id;
    //            $payment->payment_with      = $employee_id;
    //            $payment->movement          = 8;
    //            $payment->status            = 3;
    //            $payment->amount            = $old->amount;
    //            $payment->date              = \Carbon\Carbon::now();
    //            $payment->created_at        = \Carbon\Carbon::now();
    //            $payment->updated_at        = \Carbon\Carbon::now();
    //            $payment->save();

    //            $payment                    = new \Spot\Shipment\Models\Payment;
    //            $payment->type              = 3;
    //            $payment->payment_type      = $old->payment_type;
    //            $payment->item_id           = $old->item_id;
    //            $payment->movement          = 1;
    //            $payment->status            = 3;
    //            $payment->amount            = '-'.$old->amount;
    //            $payment->treasury_id       = $old->treasury_id;
    //            $payment->date              = \Carbon\Carbon::now();
    //            $payment->created_at        = \Carbon\Carbon::now();
    //            $payment->updated_at        = \Carbon\Carbon::now();
    //            $payment->save();




    //            $treasury                   = \Spot\Shipment\Models\Treasury::find($old->treasury_id);
    //            $treasury->balance          = $treasury->balance-$old->amount;
    //            $treasury->updated_at       = \Carbon\Carbon::now();
    //            $treasury->save();

    //            $type   =   'return_discards';
    //    }

    //    $item->requested            = 11;
    //    $item->updated_at           = \Carbon\Carbon::now();
    //    $item->update();

    //}
    else{
        // //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received | 10 = return discards |


        $sender_fees                =   $receiver_fees  =   0;

        $sender_fees                =   $receiver_fees  =   0;
        $delivery_cost              =   ((isset($data['courier_fee']) && $data['courier_fee'] != '') ? $data['courier_fee'] : $item->courier_fee);

        if($item->customs_value != 0){
            $delivery_cost += $item->customs_value;
        }

        if($item->insurance != 0){
            $delivery_cost += ($item->insurance*$item->courier_fee/100);
        }

        if( $this['settings']['taxes']['type'] == 1 ){
            if($item->tax != 0)
                $delivery_cost += ($item->tax*$item->courier_fee/100);
        }else{
            if($item->tax_cgst != 0)
                $delivery_cost += ($item->tax_cgst*$item->courier_fee/100);
            if($item->tax_sgst != 0)
                $delivery_cost += ($item->tax_sgst*$item->courier_fee/100);    
        }



        if($item->payment_type  ==  1){
            $receiver_fees          =   $delivery_cost;
        }else{
            $sender_fees            =   $delivery_cost;
        }

        if(isset($data['return_defray']) && $data['return_defray'] != '' && $data['return_defray'] != 2){
            $payment                    = \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('description','return_package_fee')->first();
            if(isset($payment->id)){
                $payment->for_id            = 1;
                if($data['return_package_fee']  ==  2){
                    $payment->from_id            = $item->sender_id;
                }else{
                    $payment->from_id            = $item->receiver_id;
                }
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = htmlspecialchars($data['return_courier_fee']);
                $payment->payment_method    = $item->payment_method;
                $payment->payment_status    = 0;
                $payment->description       = 'return_package_fee';
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->update();
            }else{
                $payment                    = new \Spot\Shipment\Models\Payment_v2;
                $payment->for_id            = 1;
                if($data['return_package_fee']  ==  2){
                    $payment->from_id            = $item->sender_id;
                }else{
                    $payment->from_id            = $item->receiver_id;
                }
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = htmlspecialchars($data['return_courier_fee']);
                $payment->payment_method    = $item->payment_method;
                $payment->payment_status    = 0;
                $payment->description       = 'return_package_fee';
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
           // $delivery_cost  +=   htmlspecialchars($data['return_courier_fee']);
            if($data['return_package_fee']  ==  2){
                $sender_fees        +=   htmlspecialchars($data['return_courier_fee']);
            }else{
                $receiver_fees      +=   htmlspecialchars($data['return_courier_fee']);
            }
        }

        if(isset($data['package_fee']) && $data['package_fee'] != ''){
            $payment                    = \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('description','return_package')->first();
            if(isset($payment->id)){
                $payment->for_id            = $item->sender_id;
                $payment->from_id            = $item->receiver_id;
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = htmlspecialchars($data['package_fee']);
                $payment->payment_method    = $item->payment_method;
                $payment->payment_status    = 0;
                $payment->description       = 'return_package';
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->update();
            }else{
                $payment                    = new \Spot\Shipment\Models\Payment_v2;
                $payment->for_id            = $item->sender_id;
                $payment->from_id            = $item->receiver_id;
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = htmlspecialchars($data['package_fee']);
                $payment->payment_method    = $item->payment_method;
                $payment->payment_status    = 0;
                $payment->description       = 'return_package';
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
            $receiver_fees      +=   htmlspecialchars($data['package_fee']);
        }

        //if(isset($data['receiver_address_id']) && $data['receiver_address_id']   !=   '') {
        //    $sender_address_id      =   \Spot\Shipment\Models\Address::find($item->sender_address_id);
        //    $receiver_address_id    =   \Spot\Shipment\Models\Address::find($data['receiver_address_id']);

        //    $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->county)->where('to',$receiver_address_id->county)->where('type',4)->first();
        //    if(!$fees){
        //        $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->city)->where('to',$receiver_address_id->city)->where('type',3)->first();
        //        if(!$fees){
        //            $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->state)->where('to',$receiver_address_id->state)->where('type',2)->first();
        //            if(!$fees){
        //                $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->country)->where('to',$receiver_address_id->country)->where('type',1)->first();
        //            }
        //        }
        //    }

        //    if($fees){
        //        if($item->type   ==   1 && $item->receiver_address_id == null) {
        //            $delivery_cost  =   $fees->pickup_cost;
        //            $delivery_cost  +=   $fees->delivery_cost;
        //        }
        //        if($fees->packaging == 1 && isset($item->packaging_id) && $item->packaging_id != ''){
        //            foreach($fees->packaging_fees as $package_fee   =>  $value){
        //                if($package_fee ==  $item->packaging_id){
        //                    $delivery_cost  +=   $value;
        //                }
        //            }
        //        }
        //        if($fees->weight == 1 && isset($data['total_weight']) && $data['total_weight'] != ''){
        //            foreach($fees->weight_fees as $weight_fee   =>  $value){
        //                if($weight_fee ==  $data['total_weight']){
        //                    $delivery_cost  +=   $value;
        //                }
        //            }
        //        }
        //    }else{
        //        if($item->type   ==   1 && $item->receiver_address_id == null) {
        //            $delivery_cost  =   $this['settings']['fees']['pickup_cost'];
        //            $delivery_cost  +=   $this['settings']['fees']['delivery_cost'];
        //        }
        //    }
        //    if($item->payment_type  ==  1){
        //        $receiver_fees          =   $delivery_cost;
        //    }else{
        //        $sender_fees            =   $delivery_cost;
        //    }
        //    if(isset($data['return_defray']) && $data['return_defray'] != '' && $data['return_defray'] != 2){
        //        //$delivery_cost  +=   htmlspecialchars($data['return_courier_fee']);
        //        if($data['return_package_fee']  ==  2){
        //            $sender_fees        +=   htmlspecialchars($data['return_courier_fee']);
        //        }else{
        //            $receiver_fees      +=   htmlspecialchars($data['return_courier_fee']);
        //        }
        //    }

        //    if(isset($data['package_fee']) && $data['package_fee'] != ''){
        //        $receiver_fees      +=   htmlspecialchars($data['package_fee']);
        //    }

        //}


        if($item->type     ==   1){

            $item->requested            = 9;
            $status                     = \Spot\Shipment\Models\Status::where('equal', 9)->first();
            $type                       = 'received';
            if($status){
                $item->status           = $status->id;
            }
            $item->type                 = 2;
            $item->receiver_id          = htmlspecialchars($data['receiver_id']);
            $item->receiver_address_id  = htmlspecialchars($data['receiver_address_id']);
            if(isset($data['return_defray']) && $data['return_defray'] != '' && $data['return_defray'] != 2){
                $item->return_defray    = htmlspecialchars($data['return_defray']);
                $item->package_fee      = htmlspecialchars($data['package_fee']);
                $item->return_package_fee= htmlspecialchars($data['return_package_fee']);
                $item->return_courier_fee= htmlspecialchars($data['return_courier_fee']);
            }
            $item->courier_fee          = $delivery_cost;
            $item->updated_at           = \Carbon\Carbon::now();
            $item->update();




            if($item->assigned_id != null){
                $employee_id    =   $item->assigned_id;
            }elseif($item->manifest_id != null){
                if($item->manifest->driver_id){
                    $employee_id   =   $item->manifest->driver_id;
                }elseif($item->manifest->employee_id){
                    $employee_id   =   $item->manifest->employee_id;
                }else{
                    $employee_id   =   Auth::getUser()->id;
                }
            }else{
                $employee_id   =   Auth::getUser()->id;
            }

            if($item->payment_type  ==  2){
                if( \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('from_id', $item->sender_id)->where('payment_method', '!=','cash')->first()  ){

                }else{
                    $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('from_id', $item->sender_id)->get();
                    foreach($payments as $payment){
                        $payment->payment_status = 1;
                        $payment->payment_with      = $employee_id;
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->update();
                    }
                }
            }

            //if( \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('for_id', $item->sender_id)->where('payment_method', 'online')->pluck('status')->first() == 3 ){

            //}else{


            //    if($item->payment_type  ==  2){
            //        $total                      = $item->courier_fee+$item->customs_value;
            //        $total                      = $total+($item->tax*$item->courier_fee/100);
            //        $total                      = $total+($item->insurance*$item->courier_fee/100);
            //        if($item->return_package_fee == 1){
            //            $total                  += $item->return_courier_fee;
            //        }
            //        if($item->return_defray == 1){
            //            $total                  += $item->package_fee;
            //        }
            //        if($item->customs_value != 0){
            //            $payment                    = new \Spot\Shipment\Models\Payment;
            //            $payment->type              = 1;
            //            $payment->payment_type      = 'customs';
            //            $payment->item_id           = $item->id;
            //            $payment->for_id            = $item->sender_id;
            //            $payment->payment_with      = $employee_id;
            //            $payment->movement          = 8; //Add  to the balance of packages
            //            $payment->amount            = $item->customs_value;
            //            $payment->status            = 3;
            //            $payment->date              = \Carbon\Carbon::now();
            //            $payment->created_at        = \Carbon\Carbon::now();
            //            $payment->updated_at        = \Carbon\Carbon::now();
            //            $payment->save();
            //        }
            //        if($item->tax != 0){
            //            $payment                    = new \Spot\Shipment\Models\Payment;
            //            $payment->type              = 1;
            //            $payment->payment_type      = 'tax';
            //            $payment->item_id           = $item->id;
            //            $payment->for_id            = $item->sender_id;
            //            $payment->payment_with      = $employee_id;
            //            $payment->status            = 3;
            //            $payment->movement          = 8; //Add  to the balance of packages
            //            $payment->amount            = ($item->tax*$item->courier_fee/100);
            //            $payment->date              = \Carbon\Carbon::now();
        //                $payment->created_at        = \Carbon\Carbon::now();
        //                $payment->updated_at        = \Carbon\Carbon::now();
        //                $payment->save();
        //            }
        //            if($item->insurance != 0){
        //                $payment                    = new \Spot\Shipment\Models\Payment;
        //                $payment->type              = 1;
        //                $payment->payment_type      = 'insurance';
        //                $payment->item_id           = $item->id;
        //                $payment->for_id            = $item->sender_id;
        //                $payment->payment_with      = $employee_id;
        //                $payment->movement          = 8; //Add  to the balance of packages
        //                $payment->status            = 3;
        //                $payment->amount            = '-'.($item->insurance*$item->courier_fee/100);
        //                $payment->date              = \Carbon\Carbon::now();
        //                $payment->created_at        = \Carbon\Carbon::now();
        //                $payment->updated_at        = \Carbon\Carbon::now();
        //                $payment->save();
        //            }


        //            $payment                    = new \Spot\Shipment\Models\Payment;
        //            $payment->type              = 1;
        //            $payment->item_id           = $item->id;
        //           $payment->payment_type      = 'courier_fee';
        //            $payment->for_id            = $item->sender_id;
        //            $payment->payment_with      = $employee_id;
        //            $payment->movement          = 8; //Add  to the balance of packages
        //            $payment->status            = 3;
        //            $payment->amount            = $item->courier_fee;
        //            $payment->date              = \Carbon\Carbon::now();
        //            $payment->created_at        = \Carbon\Carbon::now();
        //            $payment->updated_at        = \Carbon\Carbon::now();
        //            $payment->save();

        //            if($item->return_package_fee == 2 && $item->return_courier_fee){
        //                $payment                    = new \Spot\Shipment\Models\Payment;
        //                $payment->type              = 1;
        //                $payment->item_id           = $item->id;
        //                $payment->payment_type      = 'return_package_fee';
        //                $payment->for_id            = $item->sender_id;
        //                $payment->payment_with      = $employee_id;
        //                $payment->movement          = 8; //Add  to the balance of packages
        //                $payment->status            = 3;
        //                $payment->amount            = $item->return_courier_fee;
        //                $payment->date              = \Carbon\Carbon::now();
        //                $payment->created_at        = \Carbon\Carbon::now();
        //                $payment->updated_at        = \Carbon\Carbon::now();
        //                $payment->save();
        //            }
        //        }

        //    }
        }else{

            if($item->assigned_id != null){
                $employee_id    =   $item->assigned_id;
            }elseif($item->manifest_id != null){
                if($item->manifest->driver_id){
                    $employee_id   =   $item->manifest->driver_id;
                }elseif($item->manifest->employee_id){
                    $employee_id   =   $item->manifest->employee_id;
                }else{
                    $employee_id   =   Auth::getUser()->id;
                }
            }else{
                $employee_id   =   Auth::getUser()->id;
            }

            $item->requested        = 3;
            $status                 = \Spot\Shipment\Models\Status::where('equal', 3)->first();
            $type                   = 'driver_received';
            if($status){
                $item->status           = $status->id;
            }
            $item->updated_at       = \Carbon\Carbon::now();
            $item->update();

        }

        Db::table('spot_shipment_employee_order')->insert(
            ['order_id' => $item->id, 'employee_id' => $employee_id]
        );

    }

    $event_data =   array(
        'sender'                =>  Auth::getUser(),
        'shipping_sender'       =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'shipping_responsible'  =>  $responsiable,
        'item'                  =>  $item,
        'type'                  =>  $type,
        'thumb'                 =>  'icon',
        'icon'                  =>  'flaticon-gift',
        'subject'               =>  $this['theme_lang'][$type],
        'message'               =>  $this['theme_lang'][$type],
        'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'                 =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = $type;
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/shipments/'.$item->id.'/view');
}
public function onCheckpaypal(){
    $data = post(); 

    $payObj = new PayPal_getway();
    $payObj->pay("camera",10.00);   
}
public function onCheckpaystack()
{
    $data = post();

    $authUrl =  url('/').'dashboard/shipments/'.$this->param('id').'/view';

    $result = array();
    $url = 'https://api.paystack.co/transaction/verify/'.$data['reference'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt(
        $ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer '.$this['settings']['payment']['paystack_secret']]
    );
    $request = curl_exec($ch);
    curl_close($ch);


    $item   =   \Spot\Shipment\Models\Order::find($this->param('id'));

    $employee_id    =   null;
    if($item->assigned_id != null){
        $employee_id    =   $item->assigned_id;
    }elseif($item->manifest_id != null){
        if($item->manifest->driver_id){
            $employee_id   =   $item->manifest->driver_id;
        }elseif($item->manifest->employee_id){
            $employee_id   =   $item->manifest->employee_id;
        }
    }


    $treasury            = \Spot\Shipment\Models\Treasury::where('office_id', $item->office_id)->first();
    if(!$treasury){
        $treasury            = \Spot\Shipment\Models\Treasury::where('default', 1)->first();
    }

    $sender_fees                =   $receiver_fees  =   0;
    $delivery_cost              =   $item->courier_fee;

    if($item->payment_type  ==  1){
        $receiver_fees          =   $delivery_cost;
    }else{
        $sender_fees            =   $delivery_cost;
    }

    if(isset($item->receiver_address_id) && $item->receiver_address_id   !=   '') {
        if(isset($item->return_defray) && $item->return_defray != '' && $item->return_defray != 2){
            $delivery_cost  +=   $item->return_courier_fee;
            if($item->return_package_fee  ==  2){
                $sender_fees        +=   $item->return_courier_fee;
            }else{
                $receiver_fees      +=   $item->return_courier_fee;
            }
        }

        if(isset($item->package_fee) && $item->package_fee != ''){
            $receiver_fees      +=   $item->package_fee;
        }
    }else{
        if($item->payment_type  ==  1   &&  $item->receiver_address_id  &&  $item->receiver_address_id   !=   ''){
            $receiver_fees          +=   $this['settings']['fees']['delivery_cost'];
        }else{
            $sender_fees            +=   $this['settings']['fees']['delivery_cost'];
        }
    }


        if(Auth::getUser()->id == $item->sender_id){
            $paystack_amount         =   round($this->currencyConverter($item->currency->currency_code,'GHS', $sender_fees));
        }elseif(Auth::getUser()->id == $item->receiver_id){
            $paystack_amount         =   round($this->currencyConverter($item->currency->currency_code,'GHS', $receiver_fees));
        }


    $amount = $paystack_amount*100;


    if ($request) {
        $result = json_decode($request, true);
        if($result){
            if($result['data']){
                if($result['data']['status'] == 'success'){

                    if(Auth::getUser()->id == $item->sender_id && $item->payment_type  ==  2){
                        if($amount == $result['data']['amount'])
                        {
                            $total                      = $item->courier_fee+$item->customs_value;
                            $total                      = $total+($item->tax*$item->courier_fee/100);
                            $total                      = $total+($item->insurance*$item->courier_fee/100);
                            if($item->return_package_fee == 1){
                                $total                  += $item->return_courier_fee;
                            }
                            if($item->return_defray == 1){
                                $total                  += $item->package_fee;
                            }
                            if($item->customs_value != 0){
                                $payment                    = new \Spot\Shipment\Models\Payment;
                                $payment->type              = 3;
                                $payment->payment_type      = 'customs';
                                $payment->item_id           = $item->id;
                                $payment->for_id            = $item->sender_id;
                                $payment->treasury_id       = $treasury->id;
                                $payment->movement          = 2;
                                $payment->amount            = $item->customs_value;
                                $payment->status            = 3;
                                $payment->payment_method    = 'online';
                                $payment->payment_gateway   = 'paystack';
                                $payment->date              = \Carbon\Carbon::now();
                                $payment->created_at        = \Carbon\Carbon::now();
                                $payment->updated_at        = \Carbon\Carbon::now();
                                $payment->save();
                            }
                            if($item->tax != 0){
                                $payment                    = new \Spot\Shipment\Models\Payment;
                                $payment->type              = 3;
                                $payment->payment_type      = 'tax';
                                $payment->item_id           = $item->id;
                                $payment->for_id            = $item->sender_id;
                                $payment->treasury_id       = $treasury->id;
                                $payment->status            = 3;
                                $payment->movement          = 2;
                                $payment->amount            = ($item->tax*$item->courier_fee/100);
                                $payment->payment_method    = 'online';
                                $payment->payment_gateway   = 'paystack';
                                $payment->date              = \Carbon\Carbon::now();
                                $payment->created_at        = \Carbon\Carbon::now();
                                $payment->updated_at        = \Carbon\Carbon::now();
                                $payment->save();
                            }
                            if($item->insurance != 0){
                                $payment                    = new \Spot\Shipment\Models\Payment;
                                $payment->type              = 3;
                                $payment->payment_type      = 'insurance';
                                $payment->item_id           = $item->id;
                                $payment->for_id            = $item->sender_id;
                                $payment->treasury_id       = $treasury->id;
                                $payment->movement          = 2;
                                $payment->status            = 3;
                                $payment->amount            = ($item->insurance*$item->courier_fee/100);
                                $payment->payment_method    = 'online';
                                $payment->payment_gateway   = 'paystack';
                                $payment->date              = \Carbon\Carbon::now();
                                $payment->created_at        = \Carbon\Carbon::now();
                                $payment->updated_at        = \Carbon\Carbon::now();
                                $payment->save();
                            }


                            $payment                    = new \Spot\Shipment\Models\Payment;
                            $payment->type              = 3;
                            $payment->item_id           = $item->id;
                            $payment->payment_type      = 'courier_fee';
                            $payment->for_id            = $item->sender_id;
                            $payment->treasury_id       = $treasury->id;
                            $payment->movement          = 2;
                            $payment->status            = 3;
                            $payment->amount            = $item->courier_fee;
                            $payment->payment_method    = 'online';
                            $payment->payment_gateway   = 'paystack';
                            $payment->date              = \Carbon\Carbon::now();
                            $payment->created_at        = \Carbon\Carbon::now();
                            $payment->updated_at        = \Carbon\Carbon::now();
                            $payment->save();

                            if($item->return_package_fee == 2 && $item->return_courier_fee){
                                $payment                    = new \Spot\Shipment\Models\Payment;
                                $payment->type              = 3;
                                $payment->item_id           = $item->id;
                                $payment->payment_type      = 'return_package_fee';
                                $payment->for_id            = $item->sender_id;
                                $payment->treasury_id       = $treasury->id;
                                $payment->movement          = 2;
                                $payment->status            = 3;
                                $payment->amount            = $item->return_courier_fee;
                                $payment->payment_method    = 'online';
                                $payment->payment_gateway   = 'paystack';
                                $payment->date              = \Carbon\Carbon::now();
                                $payment->created_at        = \Carbon\Carbon::now();
                                $payment->updated_at        = \Carbon\Carbon::now();
                                $payment->save();
                            }
                        }
                    }

                    if(Auth::getUser()->id == $item->receiver_id && $item->payment_type  ==  1){
                        if($amount == $result['data']['amount'])
                        {
                            if($item->customs_value != 0){
                                $payment                    = new \Spot\Shipment\Models\Payment;
                                $payment->type              = 3;
                                $payment->payment_type      = 'customs';
                                $payment->item_id           = $item->id;
                                $payment->for_id            = $item->receiver_id;
                                $payment->treasury_id       = $treasury->id;
                                $payment->movement          = 2;
                                $payment->amount            = $item->customs_value;
                                $payment->status            = 3;
                                $payment->payment_method    = 'online';
                                $payment->payment_gateway   = 'paystack';
                                $payment->date              = \Carbon\Carbon::now();
                                $payment->created_at        = \Carbon\Carbon::now();
                                $payment->updated_at        = \Carbon\Carbon::now();
                                $payment->save();
                            }
                            if($item->tax != 0){
                                $payment                    = new \Spot\Shipment\Models\Payment;
                                $payment->type              = 3;
                                $payment->payment_type      = 'tax';
                                $payment->item_id           = $item->id;
                                $payment->for_id            = $item->receiver_id;
                                $payment->treasury_id       = $treasury->id;
                                $payment->status            = 3;
                                $payment->movement          = 2;
                                $payment->amount            = ($item->tax*$item->courier_fee/100);
                                $payment->payment_method    = 'online';
                                $payment->payment_gateway   = 'paystack';
                                $payment->date              = \Carbon\Carbon::now();
                                $payment->created_at        = \Carbon\Carbon::now();
                                $payment->updated_at        = \Carbon\Carbon::now();
                                $payment->save();
                            }
                            if($item->insurance != 0){
                                $payment                    = new \Spot\Shipment\Models\Payment;
                                $payment->type              = 3;
                                $payment->payment_type      = 'insurance';
                                $payment->item_id           = $item->id;
                                $payment->for_id            = $item->receiver_id;
                                $payment->treasury_id       = $treasury->id;
                                $payment->movement          = 2;
                                $payment->status            = 3;
                                $payment->amount            = ($item->insurance*$item->courier_fee/100);
                                $payment->payment_method    = 'online';
                                $payment->payment_gateway   = 'paystack';
                                $payment->date              = \Carbon\Carbon::now();
                                $payment->created_at        = \Carbon\Carbon::now();
                                $payment->updated_at        = \Carbon\Carbon::now();
                                $payment->save();
                            }


                            $payment                    = new \Spot\Shipment\Models\Payment;
                            $payment->type              = 3;
                            $payment->item_id           = $item->id;
                            $payment->payment_type      = 'courier_fee';
                            $payment->for_id            = $item->receiver_id;
                            $payment->treasury_id       = $treasury->id;
                            $payment->movement          = 2;
                            $payment->status            = 3;
                            $payment->amount            = $item->courier_fee;
                            $payment->payment_method    = 'online';
                            $payment->payment_gateway   = 'paystack';
                            $payment->date              = \Carbon\Carbon::now();
                            $payment->created_at        = \Carbon\Carbon::now();
                            $payment->updated_at        = \Carbon\Carbon::now();
                            $payment->save();

                            if($item->return_courier_fee){
                                $payment                    = new \Spot\Shipment\Models\Payment;
                                $payment->type              = 3;
                                $payment->item_id           = $item->id;
                                $payment->payment_type      = 'return_package_fee';
                                $payment->for_id            = $item->receiver_id;
                                $payment->treasury_id       = $treasury->id;
                                $payment->movement          = 2;
                                $payment->status            = 3;
                                $payment->amount            = $item->return_courier_fee;
                                $payment->payment_method    = 'online';
                                $payment->payment_gateway   = 'paystack';
                                $payment->date              = \Carbon\Carbon::now();
                                $payment->created_at        = \Carbon\Carbon::now();
                                $payment->updated_at        = \Carbon\Carbon::now();
                                $payment->save();

                                if($item->return_package_fee == 1){
                                    $payment                    = new \Spot\Shipment\Models\Payment;
                                    $payment->type              = 3;
                                    $payment->item_id           = $item->id;
                                    $payment->payment_type      = 'return_package_fee';
                                    $payment->for_id            = $item->receiver_id;
                                    $payment->treasury_id       = $treasury->id;
                                    $payment->movement          = 2;
                                    $payment->status            = 3;
                                    $payment->amount            = $item->return_courier_fee;
                                    $payment->payment_method    = 'online';
                                    $payment->payment_gateway   = 'paystack';
                                    $payment->date              = \Carbon\Carbon::now();
                                    $payment->created_at        = \Carbon\Carbon::now();
                                    $payment->updated_at        = \Carbon\Carbon::now();
                                    $payment->save();
                                }
                            }
                        }
                    }



                    \Flash::success($this['theme_lang']['updated_successfully']);
                }else{
                    throw new ApplicationException('ERROR!');
                }
            }else{
                throw new ApplicationException('ERROR!');
            }
        }else{
            throw new ApplicationException('ERROR!');
        }
    }else{
        throw new ApplicationException('ERROR!');
    }
}
public function onConfirmfees()
{
    $data = post();


    $item                       =   \Spot\Shipment\Models\Order::find($this->param('id'));

    $sender_fees                =   $receiver_fees  =   0;
    $delivery_cost              =   $item->courier_fee;

    

    if(isset($data['receiver_address_id']) && $data['receiver_address_id']   !=   '') {
        $sender_address_id      =   \Spot\Shipment\Models\Address::find($item->sender_address_id);
        $receiver_address_id    =   \Spot\Shipment\Models\Address::find($data['receiver_address_id']);

        $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->county)->where('to',$receiver_address_id->county)->where('type',4)->first();
        if(!$fees){
            $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->city)->where('to',$receiver_address_id->city)->where('type',3)->first();
            if(!$fees){
                $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->state)->where('to',$receiver_address_id->state)->where('type',2)->first();
                if(!$fees){
                    $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->country)->where('to',$receiver_address_id->country)->where('type',1)->first();
                }
            }
        }

        if($fees){
            if($item->type   ==   1 && $item->receiver_address_id == null) {
                $delivery_cost  =   $fees->pickup_cost;
            }else{
                $delivery_cost  =   $fees->pickup_cost;
                $delivery_cost  +=   $fees->delivery_cost;

            }
            if($fees->packaging == 1 && isset($item->packaging_id) && $item->packaging_id != ''){
                foreach($fees->packaging_fees as $package_fee   =>  $value){
                    if($package_fee ==  $item->packaging_id){
                        $delivery_cost  +=   $value;
                    }
                }
            }
            if($fees->weight == 1 && isset($item->total_weight) && $item->total_weight != ''){

                foreach($fees->weight_fees as $weight_fee   =>  $value){
                    if($weight_fee ==  $item->total_weight){
                        $delivery_cost  +=   $value;
                    }
                }
            }
        }
        
        

    }

    if($item->customs_value != 0){
        $delivery_cost += $item->customs_value;
    }

    if($item->insurance != 0){
        $delivery_cost += ($item->insurance*$item->courier_fee/100);
    }

    if( $this['settings']['taxes']['type'] == 1 ){
        if($item->tax != 0)
            $delivery_cost += ($item->tax*$item->courier_fee/100);
    }else{
        if($item->tax_cgst != 0)
            $delivery_cost += ($item->tax_cgst*$item->courier_fee/100);
        if($item->tax_sgst != 0)
            $delivery_cost += ($item->tax_sgst*$item->courier_fee/100);    
    }
    

    if($item->payment_type  ==  1){
        $receiver_fees          =   $delivery_cost;
    }else{
        $sender_fees            =   $delivery_cost;
    }

    if(isset($data['return_defray']) && $data['return_defray'] != '' && $data['return_defray'] != 2){
        //$delivery_cost  +=   htmlspecialchars($data['return_courier_fee']);
        if($data['return_package_fee']  ==  2){
            $sender_fees        +=   htmlspecialchars($data['return_courier_fee']);
        }else{
            $receiver_fees      +=   htmlspecialchars($data['return_courier_fee']);
        }
    }
    
    if(isset($data['package_fee']) && $data['package_fee'] != ''){
        $receiver_fees      +=   htmlspecialchars($data['package_fee']);
    }

    //if( \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('for_id', //$item->sender_id)->where('payment_method', 'online')->pluck('status')->first() == 3 ){
   //     $sender_fees            =   0;
   // }else{
   //     $sender_fees            =   $sender_fees;
   // }

    //if( \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('for_id', //$item->receiver_id)->where('payment_method', 'online')->pluck('status')->first() == 3 ){
    //    $receiver_fees            =   0;
    //}else{
    //    $receiver_fees            =   $receiver_fees;
   // }

    return array("delivery_cost" => $delivery_cost, "sender_fees" => $sender_fees, "receiver_fees" => $receiver_fees);
    // return array("delivery_cost" => Currency::format($delivery_cost), "sender_fees" => Currency::format($sender_fees), "receiver_fees" => Currency::format($receiver_fees));
}
public function onDiscards()
{
    $data = post();

    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }
    $item                       = \Spot\Shipment\Models\Order::find($this->param('id'));


    if($item->requested ==  4){

            if($item->assigned_id != null){
                $employee_id    =   $item->assigned_id;
            }else{
                if($item->manifest_id != null){
                    if($item->manifest->driver_id){
                        $employee_id   =   $item->manifest->driver_id;
                    }elseif($item->manifest->employee_id){
                        $employee_id   =   $item->manifest->employee_id;
                    }
                }
            }
            $payments   =   \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_with',  $employee_id)->where('status', 1)->get();

            if(!$payments || empty($payments->toArray())){
                if($item->payment_type  ==  2){
                    if($item->return_defray == 1 && $item->return_package_fee == 1  ){
                        $payments   =   \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_with', '!=', null)->whereIn('payment_type',['customs','tax','insurance','courier_fee','package_fee','return_package_fee'])->where('treasury_id', null)->get();
                    }else{
                        if($item->return_defray == 1){
                            $payments   =   \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_with', '!=', null)->whereIn('payment_type',['customs','tax','insurance','courier_fee','package_fee'])->where('treasury_id', null)->get();
                        }else{
                            $payments   =   \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_with', '!=', null)->whereIn('payment_type',['customs','tax','insurance','courier_fee'])->where('treasury_id', null)->get();
                        }
                    }
                }else{
                    if($item->return_defray == 1 && $item->return_package_fee == 1){
                        $payments   =   \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_with', '!=', null)->whereIn('payment_type',['package_fee','return_package_fee'])->where('treasury_id', null)->get();
                    }else{
                        $payments   =   \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_with', '!=', null)->whereIn('payment_type',['package_fee'])->where('treasury_id', null)->get();
                    }
                }
            }

            if(isset($payments) && $payments){
                foreach($payments as $old){
                    $old->status            = 5;
                    $old->updated_at        = \Carbon\Carbon::now();
                    $old->update();

                    $payment                    = new \Spot\Shipment\Models\Payment;
                    $payment->type              = 1;
                    $payment->payment_type      = $old->payment_type;
                    $payment->item_id           = $old->item_id;
                    $payment->payment_with      = $old->payment_with;
                    $payment->movement          = 7; //Deduction from the balance of packages
                    $payment->amount            = '-'.$old->amount;
                    $payment->status            = 5;
                    $payment->date              = \Carbon\Carbon::now();
                    $payment->created_at        = \Carbon\Carbon::now();
                    $payment->updated_at        = \Carbon\Carbon::now();
                    $payment->save();


                    $treasury            = \Spot\Shipment\Models\Treasury::where('office_id', $item->office_id)->first();
                    if(!$treasury){
                        $treasury            = \Spot\Shipment\Models\Treasury::where('default', 1)->first();
                    }


                    $payment                    = new \Spot\Shipment\Models\Payment;
                    $payment->type              = 3;
                    $payment->payment_type      = $old->payment_type;
                    $payment->item_id           = $old->item_id;
                    $payment->movement          = 2; //Deduction from the balance of packages


                    $amount                     = $old->amount;
                    if($item->return_defray == 1 && $item->return_package_fee == 2 && $old->payment_type == 'package_fee'){
                        $amount                 = ($old->amount-$item->return_courier_fee);
                    }
                    $payment->amount            = $amount;
                    $payment->status            = 5;
                    $payment->treasury_id       = $treasury->id;
                    $payment->date              = \Carbon\Carbon::now();
                    $payment->created_at        = \Carbon\Carbon::now();
                    $payment->updated_at        = \Carbon\Carbon::now();
                    $payment->save();

                    $treasury->balance          = $treasury->balance+$old->amount;
                    $treasury->updated_at       = \Carbon\Carbon::now();
                    $treasury->save();
                }


                $amount                     = $item->package_fee;
                if($item->return_defray == 1 && $item->return_package_fee == 2 && $old->payment_type == 'package_fee'){
                    $amount                 = ($item->package_fee-$item->return_courier_fee);

                    $oldpayment = \Spot\Shipment\Models\Payment::where('item_id',$item->id)->where('for_id',$item->sender_id)->where('movement',4)->where('type', 1)->where('amount', $item->package_fee)->first();
                }
                if(isset($oldpayment) && $oldpayment){
                    $oldpayment->amount         = $amount;
                    $oldpayment->updated_at     = \Carbon\Carbon::now();
                    $oldpayment->save();
                }

                if($item->return_defray == 1 && $item->return_package_fee == 2){
                    $payment                    = new \Spot\Shipment\Models\Payment;
                    $payment->type              = 3;
                    $payment->item_id           = $item->id;
                    $payment->payment_type      = 'return_package_fee';
                    $payment->treasury_id       = $treasury->id;
                    $payment->status            = 3;
                    $payment->movement          = 8; //Add  to the balance of packages
                    $payment->amount            = $item->return_courier_fee;
                    $payment->date              = \Carbon\Carbon::now();
                    $payment->created_at        = \Carbon\Carbon::now();
                    $payment->updated_at        = \Carbon\Carbon::now();
                    $payment->save();
                }
            }

            $status                     = \Spot\Shipment\Models\Status::where('equal', 10)->first();
            if($status){
                $item->status           = $status->id;
            }
            $item->assigned_id          = null;
            $item->manifest_id          = null;
            $item->requested            = 10;
            $item->updated_at           = \Carbon\Carbon::now();
            $item->update();


    }elseif($item->requested ==  11){

        if($item->assigned_id != null){
            $employee_id    =   $item->assigned_id;
        }else{
            if($item->manifest_id != null){
                if($item->manifest->driver_id){
                    $employee_id   =   $item->manifest->driver_id;
                }elseif($item->manifest->employee_id){
                    $employee_id   =   $item->manifest->employee_id;
                }
            }
        }

        $payments               = \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_with', $employee_id)->where('payment_type','package_fee')->get();

        $amount                         =   $item->package_fee;
        if($item->return_defray == 1 && $item->return_package_fee == 2){
            $amount                 =   $amount-$item->return_courier_fee;
        }

        $payment                    = new \Spot\Shipment\Models\Payment;
        $payment->type              = 1;
        $payment->payment_type      = 'package_fee';
        $payment->item_id           = $item->id;
        $payment->payment_with      = $employee_id;
        $payment->movement          = 7; //Deduction from the balance of packages
        $payment->amount            = '-'.str_replace('-','',$amount);
        $payment->date              = \Carbon\Carbon::now();
        $payment->created_at        = \Carbon\Carbon::now();
        $payment->updated_at        = \Carbon\Carbon::now();
        $payment->save();

        $payment                    = new \Spot\Shipment\Models\Payment;
        $payment->type              = 1;
        $payment->payment_type      = 'package_fee';
        $payment->for_id            = $item->sender_id;
        $payment->payment_with      = $item->sender_id;
        $payment->item_id           = $item->id;
        $payment->movement          = 3;
        $payment->amount            = '-'.str_replace('-','',$amount);
        $payment->date              = \Carbon\Carbon::now();
        $payment->created_at        = \Carbon\Carbon::now();
        $payment->updated_at        = \Carbon\Carbon::now();
        $payment->save();



        $status                     = \Spot\Shipment\Models\Status::where('equal', 12)->first();
        if($status){
            $item->status           = $status->id;
        }
        $item->assigned_id          = null;
        $item->manifest_id          = null;
        $item->requested            = 12;
        $item->updated_at           = \Carbon\Carbon::now();
        $item->update();

    }else{

        $status                     = \Spot\Shipment\Models\Status::where('equal', 5)->first();

        $payments                   = \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where(function($q){
                                                $q->where('status', 1)->orWhere('status', 4);
                                        })->get();
        foreach($payments as $payment){
            if(isset($data['payments']) && in_array($payment->id, $data['payments'])){
                $payment->status    = 3;
                if($item->assigned_id){
                    $payment->payment_with      = $item->assigned_id;
                }elseif($item->manifest_id){


                    if($item->manifest->driver_id){
                        $payment->payment_with   =   $item->manifest->driver_id;
                    }elseif($item->manifest->employee_id){
                        $payment->payment_with   =   $item->manifest->employee_id;
                    }
                }
            }else{
                if($payment->payment_type   ==  'package_fee'){
                    $payment->status    = 2;
                }else{
                    $payment->for_id    = $item->sender_id;
                    $payment->payment_with      = $item->sender_id;
                }
            }
            $payment->updated_at    = \Carbon\Carbon::now();
            $payment->update();
        }

        if($item->return_package_fee  ==  1){
            $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_receiver'];
        }else{
            $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_sender'];
        }

        if(isset($item->receiver_address_id) && $item->receiver_address_id   !=   '') {
            $sender_address_id      =   \Spot\Shipment\Models\Address::find($item->sender_address_id);
            $receiver_address_id    =   \Spot\Shipment\Models\Address::find($item->receiver_address_id);

            $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->county)->where('to',$receiver_address_id->county)->where('type',4)->first();
            if(!$fees){
                $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->city)->where('to',$receiver_address_id->city)->where('type',3)->first();
                if(!$fees){
                    $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->state)->where('to',$receiver_address_id->state)->where('type',2)->first();
                    if(!$fees){
                        $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->country)->where('to',$receiver_address_id->country)->where('type',1)->first();
                    }
                }
            }

            if($fees){

                if($data['return_package_fee']  ==  1){
                    $return_courier_fee  =   $fees->delivery_cost_back_receiver;
                }else{
                    $return_courier_fee  =   $fees->delivery_cost_back_sender;
                }
            }

        }

        if($status){
            $item->status           = $status->id;
        }
        $item->requested            = 5;
        $item->return_package_fee   = (($data['message'] != 2) ? $data['return_package_fee'] : 2);
        $item->return_courier_fee   = $return_courier_fee;
        $item->updated_at           = \Carbon\Carbon::now();
        $item->update();

        $return_payment             = \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_type','return_package_fee')->first();
        if(!$return_payment){

            $payment                    = new \Spot\Shipment\Models\Payment;
            $payment->type              = 1;
            $payment->payment_type      = 'return_package_fee';
            $payment->item_id           = $item->id;
            if($data['message'] == 2){
                $payment->for_id            = $item->sender_id;
            }else{
                if($item->receiver_id){
                    if($data['return_package_fee']  ==  1){
                        $payment->for_id            = $item->receiver_id;
                        $payment->status            = 3;
                        if($item->assigned_id){
                            $payment->payment_with      = $item->assigned_id;
                        }elseif($item->manifest_id){
                            if($item->manifest->driver_id){
                                $payment->payment_with   =   $item->manifest->driver_id;
                            }elseif($item->manifest->employee_id){
                                $payment->payment_with   =   $item->manifest->employee_id;
                            }
                        }
                    }else{
                        $payment->for_id            = $item->sender_id;
                        $payment->payment_with      = $item->sender_id;
                    }
                }else{
                    $payment->for_id            = $item->sender_id;
                    $payment->payment_with      = $item->sender_id;
                }
            }
            $payment->movement          = 3; //Deduction from the wallet
            $payment->amount            = '-'.$item->return_courier_fee;
            $payment->date              = \Carbon\Carbon::parse($item->ship_date);
            $payment->created_at        = \Carbon\Carbon::now();
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->save();
        }

        $event_data =   array(
            'sender'                =>  Auth::getUser(),
            'shipping_sender'       =>  $item->sender_id,
            'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
            'shipping_responsible'  =>  $item->assigned_id,
            'item'                  =>  $item,
            'type'                  =>  'discards_request',
            'thumb'                 =>  'icon',
            'icon'                  =>  'flaticon-gift',
            'subject'               =>  $this['theme_lang']['discards_request'],
            'message'               =>  $this['theme_lang']['discards_request'],
            'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
            'badge'                 =>  'success',
        );
        \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

        $activity                   = new \Spot\Shipment\Models\Activity;
        $activity->user_id          = Auth::getUser()->id;
        $activity->order_id         = $item->id;
        $activity->description      = 'discards_request';
        if(isset($data['message']) && $data['message'] != ''){
            switch($data['message']){
                case 1:
                    $activity->other            = $this['theme_lang']['receiver_request'];
                break;
                case 2:
                    $activity->other            = $this['theme_lang']['receiver_evade'];
                break;
                case 3:
                    $activity->other            = $this['theme_lang']['sender_request'];
                break;
                default:
                    $activity->other            = htmlspecialchars($data['message']);
            }
        }
        $activity->created_at       = \Carbon\Carbon::now();
        $activity->updated_at       = \Carbon\Carbon::now();
        $activity->save();

    }

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/shipments/'.$item->id.'/view');
}
public function onDelivery()
{
    $data = post();

    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }
    $item                       = \Spot\Shipment\Models\Order::find($this->param('id'));


    if($item->assigned_id){
        $shipping_responsible       =   $item->assigned_id;
    }elseif($item->manifest_id){
        if($item->manifest->driver_id){
            $shipping_responsible  =   $item->manifest->driver_id;
        }elseif($item->manifest->employee_id){
            $shipping_responsible  =   $item->manifest->employee_id;
        }
    }

    $payments                   = \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where(function($q){
                                            $q->where('status', 1)->orWhere('status', 4);
                                    })->get();

    if($item->requested ==  5 or $item->requested ==  6){
        $item->requested        = 8;
        $status                 = \Spot\Shipment\Models\Status::where('equal', 8)->first();
        $type                   = 'returned';
        if($status){
            $item->status           = $status->id;
        }
        $item->updated_at       = \Carbon\Carbon::now();
        $item->update();

        foreach($payments as $payment){
            if($payment->for_id    ==   $item->sender_id){
                $payment->status    = 3;
                if($item->assigned_id){
                    $payment->payment_with      = $item->assigned_id;
                }elseif($item->manifest_id){
                    if($item->manifest->driver_id){
                        $payment->payment_with   =   $item->manifest->driver_id;
                    }elseif($item->manifest->employee_id){
                        $payment->payment_with   =   $item->manifest->employee_id;
                    }
                }
                $payment->updated_at    = \Carbon\Carbon::now();
                $payment->update();
            }
        }
    }else{
        $item->requested        = 4;
        $item->postponed        = null;
        $status                 = \Spot\Shipment\Models\Status::where('equal', 4)->first();
        $type                   = 'delivered';
        if($status){
            $item->status           = $status->id;
        }


        $employeeorder          = \Spot\Shipment\Models\Employeeorder::where('order_id', $item->id)->first();
        $employee_id            = $employeeorder->employee_id;
        $employeeorder->delete();

        if($item->payment_type  ==  2){

            $total                      = $item->courier_fee+$item->customs_value;
            $total                      = $total+($item->tax*$item->courier_fee/100);
            $total                      = $total+($item->insurance*$item->courier_fee/100);
            if($item->return_package_fee == 1){
                $total                  += $item->return_courier_fee;
            }
            if($item->return_defray == 1){
                $total                  += $item->package_fee;
            }
            if($item->customs_value != 0){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'customs';
                $payment->item_id           = $item->id;
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $employee_id;
                $payment->movement          = 8; //Add  to the balance of packages
                $payment->amount            = $item->customs_value;
                $payment->date              = \Carbon\Carbon::now();
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
            if($item->tax != 0){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'tax';
                $payment->item_id           = $item->id;
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $employee_id;
                $payment->movement          = 8; //Add  to the balance of packages
                $payment->amount            = ($item->tax*$item->courier_fee/100);
                $payment->date              = \Carbon\Carbon::now();
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
            if($item->insurance != 0){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'insurance';
                $payment->item_id           = $item->id;
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $employee_id;
                $payment->movement          = 8; //Add  to the balance of packages
                $payment->amount            = '-'.($item->insurance*$item->courier_fee/100);
                $payment->date              = \Carbon\Carbon::now();
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }


            $payment                    = new \Spot\Shipment\Models\Payment;
            $payment->type              = 1;
            $payment->item_id           = $item->id;
            $payment->payment_type      = 'courier_fee';
            $payment->for_id            = $item->sender_id;
            $payment->payment_with      = $employee_id;
            $payment->movement          = 8; //Add  to the balance of packages
            $payment->amount            = $item->courier_fee;
            $payment->date              = \Carbon\Carbon::now();
            $payment->created_at        = \Carbon\Carbon::now();
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->save();


            if($item->return_defray == 1){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->item_id           = $item->id;
                $payment->payment_type      = 'package_fee';
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $employee_id;
                $payment->movement          = 8; //Add  to the balance of packages
                $payment->amount            = $item->package_fee;
                $payment->date              = \Carbon\Carbon::now();
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();

                if($item->return_package_fee == 1){
                    $payment                    = new \Spot\Shipment\Models\Payment;
                    $payment->type              = 1;
                    $payment->item_id           = $item->id;
                    $payment->payment_type      = 'return_package_fee';
                    $payment->for_id            = $item->sender_id;
                    $payment->payment_with      = $employee_id;
                    $payment->movement          = 8; //Add  to the balance of packages
                    $payment->amount            = $item->return_courier_fee;
                    $payment->date              = \Carbon\Carbon::now();
                    $payment->created_at        = \Carbon\Carbon::now();
                    $payment->updated_at        = \Carbon\Carbon::now();
                    $payment->save();
                }
            }

        }else{

            if($item->return_defray == 1){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->item_id           = $item->id;
                $payment->payment_type      = 'package_fee';
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $employee_id;
                $payment->movement          = 8; //Add  to the balance of packages
                $payment->amount            = $item->package_fee;
                $payment->date              = \Carbon\Carbon::now();
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();

                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->item_id           = $item->id;
                $payment->payment_type      = 'package_fee';
                $payment->for_id            = $item->sender_id;
                $payment->movement          = 4;
                $payment->amount            = $item->package_fee;
                $payment->date              = \Carbon\Carbon::now();
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();

                if($item->return_package_fee == 1){
                    $payment                    = new \Spot\Shipment\Models\Payment;
                    $payment->type              = 1;
                    $payment->item_id           = $item->id;
                    $payment->payment_type      = 'return_package_fee';
                    $payment->for_id            = $item->sender_id;
                    $payment->payment_with      = $employee_id;
                    $payment->movement          = 8; //Add  to the balance of packages
                    $payment->amount            = $item->return_courier_fee;
                    $payment->date              = \Carbon\Carbon::now();
                    $payment->created_at        = \Carbon\Carbon::now();
                    $payment->updated_at        = \Carbon\Carbon::now();
                    $payment->save();
                }
            }
        }

        $item->updated_at       = \Carbon\Carbon::now();
        $item->update();
    }

    $event_data =   array(
        'sender'                =>  Auth::getUser(),
        'shipping_sender'       =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'shipping_responsible'  =>  $shipping_responsible,
        'item'                  =>  $item,
        'type'                  =>  $type,
        'thumb'                 =>  'icon',
        'icon'                  =>  'flaticon-gift',
        'subject'               =>  $this['theme_lang'][$type],
        'message'               =>  $this['theme_lang'][$type],
        'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'                 =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = $type;
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/shipments/'.$item->id.'/view');
}
public function onGetclients()
{
    $data = post();
    $item = '';
    $array = array();
    if(isset($data['term']) && $data['term'] != ''){
        $item = $data['term'];
        $order  =   \Spot\Shipment\Models\Order::find($this->param('id'));

        $items = \RainLab\User\Models\User::where('role_id', 5)
                    ->where('id', '!=', $order->sender_id)
                    ->where(function($q) use($item){
                        $q->where('id', 'like', "%$item%");
                        $q->orWhere('name', 'like', "%$item%");
                        $q->orWhere('username', 'like', "%$item%");
                        $q->orWhere('email', 'like', "%$item%");
                        $q->orWhere('phone', 'like', "%$item%");
                        $q->orWhere('mobile', 'like', "%$item%");
                    })
                    ->get();

        $array = array();
        foreach($items as $item){
            $array[] = array("id"=>$item->id, "text"=>$item->name, "mobile"=>$item->mobile);
        }
    }
    if(Auth::getUser()->hasUserPermission(["client"],'c')) {
        $array[] = array("id"=>'new', "text"=>'<i class="flaticon2-add"></i>&nbsp;'.$this['theme_lang']['add_new']);
    }
    return $array;
}
public function onNewclient(){
    $data = post();
    if(isset($data['connect'])){
        \RainLab\User\Models\User::extend(function($model){
            $myrules['email'] = 'required|between:6,255|email|unique:users';
            $myrules['mobile'] = 'required|unique:users';
            $myrules['username'] = 'required|between:2,255|unique:users';
            $myrules['password'] = 'required';
            $model->rules = $myrules;
            $model->customMessages['mobile.unique'] = $this['theme_lang']['mobile_already_registered'];
            $model->customMessages['email.unique'] = $this['theme_lang']['email_already_registered'];
            $model->customMessages['username.unique'] = $this['theme_lang']['username_already_registered'];
        });
    }else{
        \RainLab\User\Models\User::extend(function($model){
            $myrules['mobile'] = 'required|unique:users';
            $myrules['password'] = 'required';
            $model->rules = $myrules;
            $model->customMessages['mobile.mobile'] = $this['theme_lang']['mobile_already_registered'];
        });
    }

    $item                   = new \RainLab\User\Models\User;
    $item->name             = htmlspecialchars($data['name']);
    if(isset($data['connect'])){
        $item->username         = htmlspecialchars($data['username']);
        $item->email            = htmlspecialchars($data['email']);
        if(isset($data['password']) && $data['password'] != null && !empty($data['password']) && $data['password'] != ''){
            $password                       = \Hash::make($data['password']);
            $item->password                 = $password;
            $item->password_confirmation    = $password;
        }
    }else{
        $password                       = \Hash::make(123);
        $item->password                 = $password;
        $item->password_confirmation    = $password;
    }
    $item->mobile           = htmlspecialchars($data['mobile']);
    $item->gender           = (isset($data['gender']) ? $data['gender'] : null);
    $item->role_id          = 5;
    $item->created_at       = \Carbon\Carbon::now();
    $item->updated_at       = \Carbon\Carbon::now();
    $item->save();

    $subitem                    = new \Spot\Shipment\Models\Address;
    $subitem->user_id           = $item->id;
    $subitem->name              = (isset($data['street_addr']) ? htmlspecialchars($data['street_addr']) : null);
    $subitem->street            = (isset($data['street_addr']) ? htmlspecialchars($data['street_addr']) : null);
    $subitem->lat               = (isset($data['lat']) ? htmlspecialchars($data['lat']) : 0);
    $subitem->lng               = (isset($data['lng']) ? htmlspecialchars($data['lng']) : 0);
    $subitem->url               = (isset($data['url']) ? htmlspecialchars($data['url']) : null);
    $subitem->county            = (isset($data['area_id']) ? htmlspecialchars($data['area_id']) : 0);
    $subitem->city              = htmlspecialchars($data['city_id']);
    $subitem->zipcode           = (isset($data['postal_code']) ? htmlspecialchars($data['postal_code']) : 0);
    $subitem->state             = (isset($data['state_id']) ? htmlspecialchars($data['state_id']) : 0);
    $subitem->country            = htmlspecialchars($data['country_id']);
    $subitem->default           = 1;
    $subitem->created_at        = \Carbon\Carbon::now();
    $subitem->updated_at        = \Carbon\Carbon::now();
    $subitem->save();

    if(isset($data['connect'])){
        $event_data =   array(
            'persons'   =>  [$item->id],
            'sender'    =>  Auth::getUser(),
            'item'      =>  $item,
            'type'      =>  'new_account',
            'thumb'     =>  'icon',
            'icon'      =>  'flaticon-gift',
            'subject'   =>  $this['theme_lang']['new_account'],
            'message'   =>  $this['theme_lang']['new_account'],
            'url'       =>  url('dashboard/shipments/'.$item->id.'/view'),
            'badge'     =>  'success',
        );
        \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);
    }
    return array("id"=>$item->id, "name"=>$item->name, 'address_id' => $subitem->id, 'address_name' => $subitem->name);
}
public function onNewclientaddress(){
    $data = post();

    \Spot\Shipment\Models\Address::where('user_id', $data['client_id'])->update(['default' => 0]);

    $subitem                    = new \Spot\Shipment\Models\Address;
    $subitem->user_id           = htmlspecialchars($data['client_id']);
    $subitem->name              = (isset($data['street_addr']) ? htmlspecialchars($data['street_addr']) : null);
    $subitem->street            = (isset($data['street_addr']) ? htmlspecialchars($data['street_addr']) : null);
    $subitem->lat               = (isset($data['lat']) ? htmlspecialchars($data['lat']) : 0);
    $subitem->lng               = (isset($data['lng']) ? htmlspecialchars($data['lng']) : 0);
    $subitem->url               = (isset($data['url']) ? htmlspecialchars($data['url']) : null);
    $subitem->county            = (isset($data['area_id']) ? htmlspecialchars($data['area_id']) : 0);
    $subitem->city              = htmlspecialchars($data['city_id']);
    $subitem->zipcode           = (isset($data['postal_code']) ? htmlspecialchars($data['postal_code']) : 0);
    $subitem->state             = (isset($data['state_id']) ? htmlspecialchars($data['state_id']) : 0);
    $subitem->country           = htmlspecialchars($data['country_id']);
    $subitem->default           = 1;
    $subitem->created_at        = \Carbon\Carbon::now();
    $subitem->updated_at        = \Carbon\Carbon::now();
    $subitem->save();

    $addresses = \Spot\Shipment\Models\Address::where('user_id', $data['client_id'])->get();
    $html = '<option data-hidden="true"></option>';
    $default = 'new';
    if($addresses){
        foreach($addresses as $address){
            if($address->default == 1){
                $default = $address->id;
            }
            $html .= '<option value="'.$address->id.'">'.$address->name.'</option>';
        }
    }
    if(Auth::getUser()->hasUserPermission(["client"],'c')) {
        $html .= '<option value="new" data-icon="flaticon2-add">'.$this['theme_lang']['add_new'].'</option>';
    }
    return array("html" => $html, "default" => $default);
}
public function onClientaddresses(){
    $data = post();

    $addresses = \Spot\Shipment\Models\Address::where('user_id', $data['id'])->get();
    $html = '<option data-hidden="true"></option>';
    $default = 'new';
    if($addresses){
        foreach($addresses as $address){
            if($address->default == 1){
                $default = $address->id;
            }
            $html .= '<option value="'.$address->id.'">'.$address->name.'</option>';
        }
    }
    if(Auth::getUser()->hasUserPermission(["client"],'c')) {
        $html .= '<option value="new" data-icon="flaticon2-add">'.$this['theme_lang']['add_new'].'</option>';
    }
    return array("html" => $html, "default" => $default);
}
public function onListstates(){
    $data = post();

    $items = \RainLab\Location\Models\State::where('country_id', $data['id'])->get();
    $html = '<option data-hidden="true"></option>';
    if($items){
        foreach($items as $item){
            $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
        }
    }
    return array("html" => $html);
}
public function onListcities(){
    $data = post();

    $items = \Spot\Shipment\Models\City::where('state_id', $data['id'])->get();
    $html = '<option data-hidden="true"></option>';
    if($items){
        foreach($items as $item){
            $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
        }
    }
    return array("html" => $html);
}
public function onListareas(){
    $data = post();

    $items = \Spot\Shipment\Models\Area::where('city_id', $data['id'])->get();
    $html = '<option data-hidden="true"></option>';
    if($items){
        foreach($items as $item){
            $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
        }
    }
    return array("html" => $html);
}
public function onChangefees(){
    $data = post();

    $item                       = \Spot\Shipment\Models\Order::find($this->param('id'));
    if($item->type   ==   1) {
        $delivery_cost  =   $this['settings']['fees']['pickup_cost'];
    }else{
        $delivery_cost  =   $this['settings']['fees']['delivery_cost'];
    }
    if($data['return_package_fee']  ==  1){
        $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_receiver'];
    }else{
        $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_sender'];
    }

    if(isset($data['receiver_address_id']) && $data['receiver_address_id']   !=   '') {
        $sender_address_id      =   \Spot\Shipment\Models\Address::find($item->sender_address_id);
        $receiver_address_id    =   \Spot\Shipment\Models\Address::find($data['receiver_address_id']);

        $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->county)->where('to',$receiver_address_id->county)->where('type',4)->first();
        if(!$fees){
            $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->city)->where('to',$receiver_address_id->city)->where('type',3)->first();
            if(!$fees){
                $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->state)->where('to',$receiver_address_id->state)->where('type',2)->first();
                if(!$fees){
                    $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->country)->where('to',$receiver_address_id->country)->where('type',1)->first();
                }
            }
        }

        if($fees){
            if($item->type   ==   1) {
                $delivery_cost  =   $fees->pickup_cost;
            }else{
                $delivery_cost  =   $fees->delivery_cost;
            }
            if($fees->packaging == 1 && isset($item->packaging_id) && $item->packaging_id != ''){
                foreach($fees->packaging_fees as $package_fee   =>  $value){
                    if($package_fee ==  $item->packaging_id){
                        $delivery_cost  +=   $value;
                    }
                }
            }
            if(isset($data['return_defray']) && $data['return_defray'] != ''){
                if($data['return_package_fee']  ==  1){
                    $return_courier_fee  =   $fees->delivery_cost_back_receiver;
                }else{
                    $return_courier_fee  =   $fees->delivery_cost_back_sender;
                }
            }
        }

    }

    return array("delivery_cost" => $delivery_cost,"return_courier_fee" => $return_courier_fee);
}
public function onNote()
{
    $data = post();

    $note                               = new \Spot\Shipment\Models\Notes;
    $note->user_id                      = Auth::getUser()->id;
    $note->item_id                      = $this->param('id');
    $note->item_type                    = 1;
    $note->content                      = $data['note'];
    $note->created_at                   = \Carbon\Carbon::now();
    $note->updated_at                   = \Carbon\Carbon::now();
    $note->save();


    $item                               = \Spot\Shipment\Models\Order::find($this->param('id'));

    $event_data =   array(
        'sender'                =>  Auth::getUser(),
        'shipping_sender'       =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'shipping_responsible'  =>  $item->assigned_id,
        'item'                  =>  $item,
        'type'                  =>  'new_note',
        'thumb'                 =>  'icon',
        'icon'                  =>  'flaticon-gift',
        'subject'               =>  $this['theme_lang']['new_note'],
        'message'               =>  $this['theme_lang']['new_note'],
        'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'                 =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'new_note';
    $activity->other            = $data['note'];
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    return array('type' => 'success', 'message' => $this['theme_lang']['created_successfully'], '#notes' => $this->renderPartial('notes',['item'=> $item]));
}
}
