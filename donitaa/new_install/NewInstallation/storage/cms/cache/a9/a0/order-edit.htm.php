<?php 
use \Spot\Shipment\Models\Settings;
class Cms5ffc0b65221bd827996282_37383c2a4735490c310ac2b444eecfbeClass extends Cms\Classes\PageCode
{
public function onStart() {
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        \Flash::error($this['theme_lang']['not_allowed']);
        return Redirect::to('dashboard/settings');
    }

    $this->page->stretch        = true;


    $this['order']      =   $order  =   \Spot\Shipment\Models\Order::find($this->param('id'));


    switch (Auth::getUser()->role_id) {
        case 6:
            if(!in_array($order->office_id, Auth::getUser()->manage->pluck('id')->toArray())){
                \Flash::error($this['theme_lang']['not_allowed']);
                return Redirect::to('dashboard/shipments/');
            }
            break;
        case 5:
            if($order->sender_id != Auth::getUser()->id && $order->receiver_id != Auth::getUser()->id){
                \Flash::error($this['theme_lang']['not_allowed']);
                return Redirect::to('dashboard/shipments/');
            }
            break;
        case 4:
            if(Auth::getUser()->is_superuser){
                if($order->office_id != Auth::getUser()->office){
                    \Flash::error($this['theme_lang']['not_allowed']);
                    return Redirect::to('dashboard/shipments/');
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

    $this['primary_currency']=   \Responsiv\Currency\Models\Currency::where('is_primary', 1)->first();
    $this['employees']      =   \RainLab\User\Models\User::whereNotIn('role_id',[1,5])->select('id','name')->get();
    $this['packaging']      =   \Spot\Shipment\Models\Packaging::select('id','name')->get();
    $this['modes']          =   \Spot\Shipment\Models\Mode::select('id','name')->get();
    $this['couriers']       =   \Spot\Shipment\Models\Courier::select('id','name')->get();
    $this['labels']       =   \Spot\Shipment\Models\Label::select('id','name')->get();
    $this['handlers']       =   \Spot\Shipment\Models\Handler::select('id','name')->get();
    $this['breakdowns']       =   \Spot\Shipment\Models\Breakdown::select('id','name')->get();
    $this['languages']      =   \RainLab\Translate\Models\Locale::select('id', 'name','code')->get();
    $this['deliverytimes']  =   \Spot\Shipment\Models\DeliveryTime::select('id','name')->get();
    $this['offices']        =   \Spot\Shipment\Models\Office::select('id','name')->get();
    $this['categories']     =   \Spot\Shipment\Models\Category::select('id','name')->get();
    $this['countries']      =   \RainLab\Location\Models\Country::select('id','name')->where('is_enabled', 1)->get();
    //$this['states']         =   \RainLab\Location\Models\State::select('id','name')->get();
    //$this['cities']         =   \Spot\Shipment\Models\City::select('id','name')->get();
    //$this['areas']          =   \Spot\Shipment\Models\Area::select('id','name')->get();
    $this['statuses']       =   \Spot\Shipment\Models\Status::select('id','name','equal')->get();
    $this['max']            =   \Spot\Shipment\Models\Order::max('number')+1;
    $this['updateShipmentForm']      =   Settings::get('updateShipmentForm',true);
    $this['addShipmentForm']      =   Settings::get('addShipmentForm',true);
    $this['payment']      =   Settings::get('payment', true);
    $payment                    = \Spot\Shipment\Models\Payment_v2::where('item_id', $order->id)->where('description','customs_value')->get();
}
public function onSave()
{
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        throw new ApplicationException($this['theme_lang']['not_allowed']);
    }
    $data = post();
    $updateShipmentForm  = Settings::get('updateShipmentForm',true);
    $addShipmentForm     = Settings::get('addShipmentForm',true);
    $companyData            =   Settings::get('company', true);
    if ( $addShipmentForm == "add_form_normal"){
        
        $item                   = \Spot\Shipment\Models\Order::find($this->param('id'));

        if(isset($data['sender_id']) && $data['sender_id'] != ''){
            $item->sender_id        = htmlspecialchars($data['sender_id']);
        }
        if(isset($data['sender_address_id']) && $data['sender_address_id'] != ''){
            $item->sender_address_id= htmlspecialchars($data['sender_address_id']);
        }
        
        if(isset($data['number']) && $data['number'] != ''){
            $item->number                = htmlspecialchars($data['number']);
            $item->barcode                = htmlspecialchars($data['number']);
        }
        
        if(isset($data['airwaybill']) && $data['airwaybill'] != ''){
            $item->airWayBill                = htmlspecialchars($data['airwaybill']);
        }
        if(isset($data['location']) && $data['location'] != ''){
            $item->location                = htmlspecialchars($data['location']);
        }
        if(isset($data['cc']) && $data['cc'] != ''){
            $item->cc                = htmlspecialchars($data['cc']);
        }

        if(isset($data['transfer'])){
            $item->transfer_jost                = 1;
        }
        if(isset($data['label_id']) && $data['label_id'] != '' && $data['label_id'] != 'other'){
            $item->label_id                = htmlspecialchars($data['label_id']);
        }elseif(isset($data['label_id']) && $data['label_id'] != '' && $data['label_id'] == 'other'){
            $label = new \Spot\Shipment\Models\Label;
            $label->name = htmlspecialchars($data['label_other']);
            $label->save();
            $item->label_id = $label->id;
        }
        if(isset($data['handler_id']) && $data['handler_id'] != ''){
            $item->handler_id                = htmlspecialchars($data['handler_id']);
        }
        if(isset($data['breakdown_id']) && $data['breakdown_id'] != ''){
            $item->breakdown_id                = htmlspecialchars($data['breakdown_id']);
        }
        if(isset($data['remarks']) && $data['remarks'] != ''){
            $item->remarks                = htmlspecialchars($data['remarks']);
        }
        if(isset($data['notes']) && $data['notes'] != ''){
            $item->released_note                = htmlspecialchars($data['notes']);
        }
        if(isset($data['courier_id']) && $data['courier_id'] != ''){
            $item->courier_id           = htmlspecialchars($data['courier_id']);
        }
        
        if(isset($data['clearance']) && $data['clearance'] != ''){
            $item->custom_clearance                    = htmlspecialchars($data['clearance']);
        }
        if(isset($data['fiscal']) && $data['fiscal'] != ''){
            $item->fiscal_representation        = htmlspecialchars($data['fiscal']);
        }
        if(isset($data['payment_term']) && $data['payment_term'] != ''){
            $item->payment_term                 = htmlspecialchars($data['payment_term']);
        }
        if(isset($data['price_kg']) && $data['price_kg'] != ''){
            $item->price_kg                     = htmlspecialchars($data['price_kg']);
        }
        if(isset($data['storage_fee']) && htmlspecialchars($data['storage_fee']) == 'yes'){
            $item->storage_fee              = 1;
            $item->cost_24                      = htmlspecialchars($data['cost_24']);
            $item->cost_48                      = htmlspecialchars($data['cost_48']);
        }
        else 
            $item->storage_fee              = 2;  
        $item->created_at            = \Carbon\Carbon::now();
        $item->updated_at            = \Carbon\Carbon::now();
        
        if(isset($data['status_id']) && $data['status_id'] != ''){
            $status = explode("_" , htmlspecialchars($data['status_id']) );
            $item->status_id        = $status[0];
            $item->requested        = $status[1];
            //$item->status_id        = htmlspecialchars($data['status_id']);
        }
        if(isset($data['assigned_id']) && $data['assigned_id'] != ''){
            $item->assigned_id  = htmlspecialchars($data['assigned_id']);
        }
        $item->type                  =2;
        if(isset($data['alert_received'])){
        $item-> preAlert_received            = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['alert_received']));
        }
        if(isset($data['note_received'])){
        $item->releasedNote_received            = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['note_received']));
        }

        $item->update();
        
        $subitem         = \Spot\Shipment\Models\Item::where('order_id',$this->param('id'))->first();
        
        if(isset($data['weight']) && $data['weight'] != ''){
            $subitem->weight            = htmlspecialchars($data['weight']);
        }
        if(isset($data['num_boxes']) && $data['num_boxes'] != ''){
            $subitem->num_boxes            = htmlspecialchars($data['num_boxes']);
        }
        if(isset($data['num_pallets']) && $data['num_pallets'] != ''){
            $subitem->num_pallets            = htmlspecialchars($data['num_pallets']);
        }
        $subitem->update();
    }
    elseif ( $updateShipmentForm == "update_form_simple")
    {
        $item                   = \Spot\Shipment\Models\Order::find($this->param('id'));

        if(isset($data['status_id']) && $data['status_id'] != ''){
            $status = explode("_" , htmlspecialchars($data['status_id']) );
            $item->status_id        = $status[0];
            $item->requested        = $status[1];
            //$item->status_id        = htmlspecialchars($data['status_id']);
        }
        $item->updated_at       = \Carbon\Carbon::now();
        $item->update();
    }
    else{
        if(Auth::getUser()->role_id != 5){
            $prev   =   \Spot\Shipment\Models\Order::where('number', $data['number'])->where('id', '!=', $this->param('id'))->first();
            if($prev){
                throw new ApplicationException($this['theme_lang']['another_order_with_the_same_numbers']);
            }
        }

        $item                   = \Spot\Shipment\Models\Order::find($this->param('id'));

        if(isset($data['sender_id']) && $data['sender_id'] != ''){
            $item->sender_id        = htmlspecialchars($data['sender_id']);
        }
        if(isset($data['sender_address_id']) && $data['sender_address_id'] != ''){
            $item->sender_address_id= htmlspecialchars($data['sender_address_id']);
        }
        $item->type             = htmlspecialchars($data['type']);
        $item->packaging_id     = htmlspecialchars($data['packaging_id']);
        if(isset($data['office_id']) && $data['office_id'] != ''){
            $item->office_id        = htmlspecialchars($data['office_id']);
        }
        $item->ship_date        = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['ship_date']));
        $shipdate               = \Carbon\Carbon::parse($item->ship_date);
        $deliverydate           = $shipdate->addHours($item->deliverytime->count);
        $item->delivery_date    = $deliverydate;

        if($data['type']    ==  2){
            $item->receiver_id      = htmlspecialchars($data['receiver_id']);
            $item->receiver_address_id= htmlspecialchars($data['receiver_address_id']);
        }
        $item->payment_type     = htmlspecialchars($data['payment_type']);
        if(isset($data['return_defray']) && $data['return_defray'] != '' && $data['return_defray'] != 2){
            if(isset($data['return_defray']) && $data['return_defray'] != ''){
                $item->return_defray    = htmlspecialchars($data['return_defray']);
            }
            if(isset($data['package_fee']) && $data['package_fee'] != ''){
                $item->package_fee      = htmlspecialchars($data['package_fee']);
            }
            if(isset($data['return_package_fee']) && $data['return_package_fee'] != ''){
                $item->return_package_fee= htmlspecialchars($data['return_package_fee']);
            }
            if(isset($data['return_courier_fee']) && $data['return_courier_fee'] != ''){
                $item->return_courier_fee= htmlspecialchars($data['return_courier_fee']);
            }
        }
        if(isset($data['number']) && $data['number'] != ''){
            $item->number           = htmlspecialchars($data['number']);
        }
        if(isset($data['tax']) && $data['tax'] != ''){
            $item->tax              = htmlspecialchars($data['tax']);
        }
        if(isset($data['sgst']) && $data['sgst'] != ''){
            $item->tax_sgst              = htmlspecialchars($data['sgst']);
        }
        if(isset($data['cgst']) && $data['cgst'] != ''){
            $item->tax_cgst              = htmlspecialchars($data['cgst']);
        }
        if(isset($data['insurance']) && $data['insurance'] != ''){
            $item->insurance        = htmlspecialchars($data['insurance']);
        }
        if(isset($data['mode_id']) && $data['mode_id'] != ''){
            $item->mode_id          = htmlspecialchars($data['mode_id']);
        }
        if(isset($data['customs_value']) && $data['customs_value'] != ''){
            $item->customs_value    = htmlspecialchars($data['customs_value']);
        }
        if(isset($data['courier_id']) && $data['courier_id'] != ''){
            $item->courier_id       = htmlspecialchars($data['courier_id']);
        }
        if(isset($data['courier_fee']) && $data['courier_fee'] != ''){
            $item->courier_fee      = htmlspecialchars($data['courier_fee']);
        }
        if(isset($data['delivery_time_id']) && $data['delivery_time_id'] != ''){
            $item->delivery_time_id = htmlspecialchars($data['delivery_time_id']);
        }
        if(isset($data['status_id']) && $data['status_id'] != ''){
            $status = explode("_" , htmlspecialchars($data['status_id']) );
            $item->status_id        = $status[0];
            $item->requested        = $status[1];
            //$item->status_id        = htmlspecialchars($data['status_id']);
        }
        if(isset($data['assigned_id']) && $data['assigned_id'] != ''){
            $item->assigned_id  = htmlspecialchars($data['assigned_id']);
        }

        if(isset($data['payment_method']) && $data['payment_method'] != ''){
            $item->payment_method   = htmlspecialchars($data['payment_method']);
        }
        if(isset($data['total_weight']) && $data['total_weight'] != ''){
            $item->total_weight     = htmlspecialchars($data['total_weight']);
        }
        $item->updated_at       = \Carbon\Carbon::now();
        $item->update();

        if(isset($data['items']) && $data['items'] != '' && !empty($data['items'])){
            foreach($data['items'] as $shipping_item){
                if(isset($shipping_item['id'])){
                    $subitem                    = \Spot\Shipment\Models\Item::find($shipping_item['id']);
                    $subitem->category_id       = htmlspecialchars($shipping_item['category_id']);
                    $subitem->description       = htmlspecialchars($shipping_item['description']);
                    $subitem->quantity          = htmlspecialchars($shipping_item['quantity']);
                    $subitem->weight            = htmlspecialchars($shipping_item['weight']);
                    $subitem->length            = htmlspecialchars($shipping_item['length']);
                    $subitem->width             = htmlspecialchars($shipping_item['width']);
                    $subitem->height            = htmlspecialchars($shipping_item['height']);
                    $subitem->update();
                }else{
                    $subitem                    = new \Spot\Shipment\Models\Item;
                    $subitem->order_id          = $item->id;
                    $subitem->category_id       = htmlspecialchars($shipping_item['category_id']);
                    $subitem->description       = htmlspecialchars($shipping_item['description']);
                    $subitem->quantity          = htmlspecialchars($shipping_item['quantity']);
                    $subitem->weight            = htmlspecialchars($shipping_item['weight']);
                    $subitem->length            = htmlspecialchars($shipping_item['length']);
                    $subitem->width             = htmlspecialchars($shipping_item['width']);
                    $subitem->height            = htmlspecialchars($shipping_item['height']);
                    $subitem->save();
                }
            }
        }
    
    }



    $total_payment = null;
    $return_payment= null;
    $return_cost_payment = null;

    if($item->customs_value != 0){
        $payment                    = \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('description','customs_value')->first();
        //dd('custom');
        if(isset($payment->id)){
                if($item->payment_type == 1){
                    $payment->from_id            = $item->receiver_id;
                }else{
                    $payment->from_id            = $item->sender_id;
                }
                $payment->for_id            = 1;
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = $item->customs_value;
                $payment->payment_method    = htmlspecialchars($data['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'customs_value';
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->update();

                $total_payment +=$item->customs_value;
        }else{
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
            $payment->payment_method    = htmlspecialchars($data['payment_method']);
            $payment->payment_status    = 0;
            $payment->description       = 'customs_value';
            $payment->date              = \Carbon\Carbon::parse($item->ship_date);
            $payment->created_at        = \Carbon\Carbon::now();
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->save();

            $total_payment +=$item->customs_value;
        }
        
    }

    if( $this['settings']['taxes']['type'] == 1 && $item->tax){
        $payment                    = \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('description','tax')->first();
        if(isset($payment->id)){
            if($item->payment_type == 1){
                $payment->from_id            = $item->receiver_id;
            }else{
                $payment->from_id            = $item->sender_id;
            }
            $payment->for_id            = 1;
            $payment->payment_with      = Auth::getUser()->id;
            $payment->item_id           = $item->id;
            $payment->amount            = ($item->tax*$item->courier_fee/100);
            $payment->payment_method    = htmlspecialchars($data['payment_method']);
            $payment->payment_status    = 0;
            $payment->description       = 'tax';
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->update();

            $total_payment += ($item->tax*$item->courier_fee/100);
        }else{
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
            $payment->payment_method    = htmlspecialchars($data['payment_method']);
            $payment->payment_status    = 0;
            $payment->description       = 'tax';
            $payment->date              = \Carbon\Carbon::parse($item->ship_date);
            $payment->created_at        = \Carbon\Carbon::now();
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->save();

            $total_payment += ($item->tax*$item->courier_fee/100);
        }
    }else{
        if($item->tax_cgst){
            $payment                    = \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('description','tax_cgst')->first();
            if(isset($payment->id)){
                if($item->payment_type == 1){
                    $payment->from_id            = $item->receiver_id;
                }else{
                    $payment->from_id            = $item->sender_id;
                }
                $payment->for_id            = 1;
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = ($item->tax_cgst*$item->courier_fee/100);
                $payment->payment_method    = htmlspecialchars($data['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'tax_cgst';
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->update();

                $total_payment += ($item->tax_cgst*$item->courier_fee/100);
            }else{
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
                $payment->payment_method    = htmlspecialchars($data['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'tax_cgst';
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();

                $total_payment += ($item->tax_cgst*$item->courier_fee/100);
            }
        }

        if($item->tax_sgst){
            $payment                    = \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('description','tax_sgst')->first();
            if(isset($payment->id)){
                if($item->payment_type == 1){
                    $payment->from_id            = $item->receiver_id;
                }else{
                    $payment->from_id            = $item->sender_id;
                }
                $payment->for_id            = 1;
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = ($item->tax_sgst*$item->courier_fee/100);
                $payment->payment_method    = htmlspecialchars($data['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'tax_sgst';
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->update();

                $total_payment += ($item->tax_sgst*$item->courier_fee/100);
            }else{
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
                $payment->payment_method    = htmlspecialchars($data['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'tax_sgst';
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();

                $total_payment += ($item->tax_sgst*$item->courier_fee/100);
            }
        }

    }

    if($item->insurance){
        $payment                    = \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('description','insurance')->first();
            if(isset($payment->id)){
                if($item->payment_type == 1){
                    $payment->from_id            = $item->receiver_id;
                }else{
                    $payment->from_id            = $item->sender_id;
                }
                $payment->for_id            = 1;
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = ($item->insurance*$item->courier_fee/100);
                $payment->payment_method    = htmlspecialchars($data['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'insurance';
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->update();

                $total_payment += ($item->insurance*$item->courier_fee/100);
            }else{
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
                $payment->payment_method    = htmlspecialchars($data['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'insurance';
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();

                $total_payment += ($item->insurance*$item->courier_fee/100);
            }
    }



    if($item->return_defray && $item->sender_id && $item->receiver_id ){
        $payment                    = \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('description','return_package')->first();
        if(isset($payment->id)){
            $payment->for_id            = $item->sender_id;
            $payment->from_id            = $item->receiver_id;
            $payment->payment_with      = Auth::getUser()->id;
            $payment->item_id           = $item->id;
            $payment->amount            = $item->package_fee;
            $payment->payment_method    = htmlspecialchars($data['payment_method']);
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
            $payment->amount            = $item->package_fee;
            $payment->payment_method    = htmlspecialchars($data['payment_method']);
            $payment->payment_status    = 0;
            $payment->description       = 'return_package';
            $payment->date              = \Carbon\Carbon::parse($item->ship_date);
            $payment->created_at        = \Carbon\Carbon::now();
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->save();
        }

        $return_payment = $item->package_fee;
        $return_cost_payment = $item->return_courier_fee;

        if($item->return_package_fee == 2){
            $payment                    = \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('description','return_package_fee')->first();
            if(isset($payment->id)){
                $payment->for_id            = 1;
                $payment->from_id            = $item->sender_id;
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = $item->return_courier_fee;
                $payment->payment_method    = htmlspecialchars($data['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'return_package_fee';
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->update();
            }else{
                $payment                    = new \Spot\Shipment\Models\Payment_v2;
                $payment->for_id            = 1;
                $payment->from_id            = $item->sender_id;
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = $item->return_courier_fee;
                $payment->payment_method    = htmlspecialchars($data['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'return_package_fee';
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }

        }else{
            $payment                    = \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('description','return_package_fee')->first();
            if(isset($payment->id)){
                $payment->for_id            = 1;
                $payment->from_id            = $item->receiver_id;
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = $item->return_courier_fee;
                $payment->payment_method    = htmlspecialchars($data['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'return_package_fee';
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->update();
            }else{
                $payment                    = new \Spot\Shipment\Models\Payment_v2;
                $payment->for_id            = 1;
                $payment->from_id            = $item->receiver_id;
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = $item->return_courier_fee;
                $payment->payment_method    = htmlspecialchars($data['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'return_package_fee';
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
        }  
    }

    $payment                    = \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('description','courier_fee')->first();
    if(isset($payment->id)){

        if($item->payment_type == 1){
            $payment->from_id            = $item->receiver_id;
        }else{
            $payment->from_id            = $item->sender_id;
        }
        $payment->for_id            = 1;
        $payment->payment_with      = Auth::getUser()->id;
        $payment->item_id           = $item->id;
        $payment->amount            = $item->courier_fee;
        $payment->payment_method    = htmlspecialchars($data['payment_method']);
        $payment->payment_status    = 0;
        $payment->description       = 'courier_fee';
        $payment->updated_at        = \Carbon\Carbon::now();
        $payment->update();

        $total_payment +=$item->courier_fee;
    }else{
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
        $payment->payment_method    = htmlspecialchars($data['payment_method']);
        $payment->payment_status    = 0;
        $payment->description       = 'courier_fee';
        $payment->date              = \Carbon\Carbon::parse($item->ship_date);
        $payment->created_at        = \Carbon\Carbon::now();
        $payment->updated_at        = \Carbon\Carbon::now();
        $payment->save();

        $total_payment +=$item->courier_fee;
    }

    $transactions = \Spot\Shipment\Models\Transaction::where('order_id',$item->id)->get();
    //dd($transactions);
    $transactions->each->delete();

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


    $event_data =   array(
        'sender'                =>  Auth::getUser(),
        'shipping_sender'       =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'shipping_responsible'     =>  (($item->assigned_id) ? $item->assigned_id : null),
        'item'                  =>  $item,
        'type'      =>  'update_shipment',
        'thumb'     =>  'icon',
        'icon'      =>  'flaticon-gift',
        'subject'   =>  $this['theme_lang']['update_shipment'],
        'message'   =>  $this['theme_lang']['update_shipment'],
        'url'       =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'     =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

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
        $items = \RainLab\User\Models\User::where('role_id', 5)
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
    $addShipmentForm  = Settings::get('addShipmentForm',true);
    $data = post();
    if ( $addShipmentForm == "add_form_normal"){
        \RainLab\User\Models\User::extend(function($model){
            $myrules['email'] = 'required|between:6,255|email|unique:users';
            $myrules['mobile'] = 'required|unique:users,deleted_at,NULL';
            $model->rules = $myrules;
            $model->customMessages['email.unique'] = $this['theme_lang']['email_already_registered'];
        });

        $item                               = new \RainLab\User\Models\User;
        $item->name                         = htmlspecialchars($data['name']);
        $item->username                     = htmlspecialchars($data['name']);
        $item->email                        = htmlspecialchars($data['email']);
        $password                           = \Hash::make(123);
        $item->password                     = $password;
        $item->password_confirmation        = $password;
        
        $item->vat_number                   = htmlspecialchars($data['vat']);
        $item->mobile                       = htmlspecialchars($data['num']);
        $item->box                          = htmlspecialchars($data['box']);
        $item->budget                          = htmlspecialchars($data['budget']);
        $item->lang_id                     = htmlspecialchars($data['lang']);
        $item->custom_clearance                    = htmlspecialchars($data['clearance']);
        $item->fiscal_representation        = htmlspecialchars($data['fiscal']);
        $item->payment_term                 = htmlspecialchars($data['payment_term']);
        $item->price_kg                     = htmlspecialchars($data['price_kg']);
        if(htmlspecialchars($data['storage_fee']) == 'yes'){
            $item->storage_fee              = 1;
            $item->cost_24                      = htmlspecialchars($data['cost_24']);
            $item->cost_48                      = htmlspecialchars($data['cost_48']);
        }
        else 
            $item->storage_fee              = 2;   

        $item->role_id                      = 5;
        $item->created_at                   = \Carbon\Carbon::now();
        $item->updated_at                   = \Carbon\Carbon::now();
        $item->save();

        $subitem                    = new \Spot\Shipment\Models\Address;
        $subitem->user_id           = $item->id;
        $subitem->name              = htmlspecialchars($data['street_addr']);
        $subitem->street            = htmlspecialchars($data['street_addr']);
        $subitem->city              = htmlspecialchars($data['city_id']);
        $subitem->zipcode           = htmlspecialchars($data['postal_code']);
        $subitem->country            = htmlspecialchars($data['country_id']);
        $subitem->default           = 1;
        $subitem->created_at        = \Carbon\Carbon::now();
        $subitem->updated_at        = \Carbon\Carbon::now();
        $subitem->save();

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

        $resultArr = array(
                "id"=>$item->id, "name"=>$item->name, 'address_id' => $subitem->id, 'address_name' => $subitem->name,
                "clearance"=>$item->custom_clearance,"fiscal"=>$item->fiscal_representation,"payment_term"=>$item->payment_term,"price_kg"=>$item->price_kg,"storage_fee"=>$item->storage_fee,"cost_24"=>$item->cost_24,"cost_48"=>$item->cost_48  );
        
        return $resultArr;
        

    }else{
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
        $subitem->name              = htmlspecialchars($data['street_addr']);
        $subitem->street            = htmlspecialchars($data['street_addr']);
        $subitem->lat               = htmlspecialchars($data['lat']);
        $subitem->lng               = htmlspecialchars($data['lng']);
        $subitem->url               = htmlspecialchars($data['url']);
        $subitem->county            = htmlspecialchars($data['area_id']);
        $subitem->city              = htmlspecialchars($data['city_id']);
        $subitem->zipcode           = htmlspecialchars($data['postal_code']);
        $subitem->state             = htmlspecialchars($data['state_id']);
        $subitem->county            = htmlspecialchars($data['country_id']);
        $subitem->default           = 1;
        $subitem->created_at        = \Carbon\Carbon::now();
        $subitem->updated_at        = \Carbon\Carbon::now();
        $subitem->save();

        return array("id"=>$item->id, "name"=>$item->name, 'address_id' => $subitem->id, 'address_name' => $subitem->name);
    }
}
public function onNewclientaddress(){
    $addShipmentForm  = Settings::get('addShipmentForm',true);
    $data = post();

    \Spot\Shipment\Models\Address::where('user_id', $data['client_id'])->update(['default' => 0]);

    if ( $addShipmentForm == "add_form_normal"){
        $subitem = new \Spot\Shipment\Models\Address;
        $subitem->name              = htmlspecialchars($data['street_addr']);
        $subitem->user_id           = htmlspecialchars($data['client_id']);
        $subitem->street            = htmlspecialchars($data['street_addr']);
        $subitem->city              = htmlspecialchars($data['city_id']);
        $subitem->zipcode           = htmlspecialchars($data['postal_code']);
        $subitem->country            = htmlspecialchars($data['country_id']);
        $subitem->default           = 1;
        $subitem->created_at        = \Carbon\Carbon::now();
        $subitem->updated_at        = \Carbon\Carbon::now();
        $subitem->save();
    }
    else{

        $subitem                    = new \Spot\Shipment\Models\Address;
        $subitem->user_id           = htmlspecialchars($data['client_id']);
        $subitem->name              = htmlspecialchars($data['street_addr']);
        $subitem->street            = htmlspecialchars($data['street_addr']);
        $subitem->lat               = htmlspecialchars($data['lat']);
        $subitem->lng               = htmlspecialchars($data['lng']);
        $subitem->url               = htmlspecialchars($data['url']);
        $subitem->county            = htmlspecialchars($data['area_id']);
        $subitem->city              = htmlspecialchars($data['city_id']);
        $subitem->zipcode           = htmlspecialchars($data['postal_code']);
        $subitem->state             = htmlspecialchars($data['state_id']);
        $subitem->county            = htmlspecialchars($data['country_id']);
        $subitem->default           = 1;
        $subitem->created_at        = \Carbon\Carbon::now();
        $subitem->updated_at        = \Carbon\Carbon::now();
        $subitem->save();
    }
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
    $addShipmentForm  = Settings::get('addShipmentForm',true);
    $data = post();
    $item = \RainLab\User\Models\User::find($data['id']);
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
    if ( $addShipmentForm == "add_form_normal"){
        $resultArr = array("html" => $html, "default" => $default,"clearance"=>$item->custom_clearance,
                        "fiscal"=>$item->fiscal_representation,"payment_term"=>$item->payment_term,
                        "price_kg"=>$item->price_kg,"storage_fee"=>$item->storage_fee,"cost_24"=>$item->cost_24,
                        "cost_48"=>$item->cost_48 );
        return $resultArr;
    }else{
        return array("html" => $html, "default" => $default);
    }
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
    $addShipmentForm  = Settings::get('addShipmentForm',true);
    $data = post();
    if ( $addShipmentForm == "add_form_normal"){
        $items = \Spot\Shipment\Models\City::where('country_id', $data['id'])->get();
    }else{
        $items = \Spot\Shipment\Models\City::where('state_id', $data['id'])->get();
    }
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
    $addShipmentForm  = Settings::get('addShipmentForm',true);
            
    $data = post();
    
    if( $addShipmentForm == "add_form_normal")
    {
        $data['type'] =2;
        $data['return_package_fee']  = 1;
    }
    if($data['type']   == 1 ) {
        if($data['show_receiver_info'] == '1'){
            $delivery_cost  =   $this['settings']['fees']['pickup_cost'];
            $delivery_cost  +=   $this['settings']['fees']['delivery_cost'];
        }else{
            $delivery_cost  =   $this['settings']['fees']['pickup_cost'];
        }
    }else{
        $delivery_cost  =   $this['settings']['fees']['delivery_cost'];
    }

    if( $this['settings']['packaging_fees']['enable'] ==1 && isset($data['packaging_id']) && $data['packaging_id'] != ''){
        foreach($this['settings']['packaging_fees']['fees'] as $package_fee   =>  $value){
            if($package_fee ==  $data['packaging_id']){
                $delivery_cost  +=   $value;
            }
        }   
    }

    if($this['settings']['enable_fees_weight'] ==1  && isset($data['total_weight']) && $data['total_weight'] != ''){
        foreach($this['settings']['fees_weight'] as $weight_fee   =>  $value){
            if($weight_fee ==  $data['total_weight']){
                $delivery_cost  +=   $value;
            }
        }
    }


    if(isset($data['return_package_fee']) && $data['return_package_fee']  ==  1){
        $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_receiver'];
    }else{
        $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_sender'];
    }



    if(isset($data['receiver_address_id']) && $data['receiver_address_id']   !=   '' && isset($data['sender_address_id']) && $data['sender_address_id']   !=   '') {
        $sender_address_id      =   \Spot\Shipment\Models\Address::find($data['sender_address_id']);
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
            if($data['type']   ==   1) {
                if($data['show_receiver_info'] == '1'){
                    $delivery_cost  =   $fees->pickup_cost;
                    $delivery_cost  +=   $fees->delivery_cost;
                }else{
                    $delivery_cost  =   $fees->pickup_cost;
                }
            }else{
                $delivery_cost  =   $fees->delivery_cost;
            }
            if($fees->packaging == 1 && isset($data['packaging_id']) && $data['packaging_id'] != ''){
                foreach($fees->packaging_fees as $package_fee   =>  $value){
                    if($package_fee ==  $data['packaging_id']){
                        $delivery_cost  +=   $value;
                    }
                }
            }

            if($fees->weight == 1 && isset($data['total_weight']) && $data['total_weight'] != ''){
                foreach($fees->weight_fees as $weight_fee   =>  $value){
                    if($weight_fee ==  $data['total_weight']){
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
}
