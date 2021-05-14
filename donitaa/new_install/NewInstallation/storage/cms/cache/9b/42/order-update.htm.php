<?php 
class Cms5ffc0c1479283965836796_4d809e464e8deb6fc462b2c1de41f5f4Class extends Cms\Classes\PageCode
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
    $this['deliverytimes']  =   \Spot\Shipment\Models\DeliveryTime::select('id','name')->get();
    $this['offices']        =   \Spot\Shipment\Models\Office::select('id','name')->get();
    $this['categories']     =   \Spot\Shipment\Models\Category::select('id','name')->get();
    $this['countries']      =   \RainLab\Location\Models\Country::select('id','name')->where('is_enabled', 1)->get();
    $this['states']         =   \RainLab\Location\Models\State::select('id','name')->get();
    $this['cities']         =   \Spot\Shipment\Models\City::select('id','name')->get();
    $this['areas']          =   \Spot\Shipment\Models\Area::select('id','name')->get();
    $this['statuses']       =   \Spot\Shipment\Models\Status::select('id','name')->get();
    $this['max']            =   \Spot\Shipment\Models\Order::max('number')+1;
}
public function onSave()
{
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        throw new ApplicationException($this['theme_lang']['not_allowed']);
    }
    $data = post();
    if(Auth::getUser()->role_id == 5){
        throw new ApplicationException($this['theme_lang']['not_allowed']);
    }

    $item                   = \Spot\Shipment\Models\Order::find($this->param('id'));

    $item->packaging_id     = htmlspecialchars($data['packaging_id']);
    $item->office_id        = htmlspecialchars($data['office_id']);
    $item->ship_date        = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['ship_date']));
    $shipdate               = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['ship_date']));

    if(isset($item->deliverytime->count)){
        $deliverydate           = $shipdate->addHours($item->deliverytime->count);
        $item->delivery_date    = $deliverydate;
    }
    if(isset($data['status_id']) && $data['status_id'] != ''){
        $item->status_id    = htmlspecialchars($data['status_id']);
        $status             = \Spot\Shipment\Models\Status::find($data['status_id']);
        if($status->equal){
            $item->requested= $status->equal;
        }
    }
    $item->updated_at       = \Carbon\Carbon::now();
    $item->update();

    if($item->type == 1){
        if(isset($data['lat'])){
            \Spot\Shipment\Models\Address::where('id', $item->sender_address_id)->update(['lat' =>  $data['lat']]);
        }
        if(isset($data['lng'])){
            \Spot\Shipment\Models\Address::where('id', $item->sender_address_id)->update(['lng' =>  $data['lng']]);
        }
        if(isset($data['url'])){
            \Spot\Shipment\Models\Address::where('id', $item->sender_address_id)->update(['url' =>  $data['url']]);
        }
    }else{
        if(isset($data['lat'])){
            \Spot\Shipment\Models\Address::where('id', $item->receiver_address_id)->update(['lat' =>  $data['lat']]);
        }
        if(isset($data['lng'])){
            \Spot\Shipment\Models\Address::where('id', $item->receiver_address_id)->update(['lng' =>  $data['lng']]);
        }
        if(isset($data['url'])){
            \Spot\Shipment\Models\Address::where('id', $item->receiver_address_id)->update(['url' =>  $data['url']]);
        }
    }

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

    if(isset($data['note']) && $data['note'] != ''){
        $data = post();
        $note                               = new \Spot\Shipment\Models\Notes;
        $note->user_id                      = Auth::getUser()->id;
        $note->item_id                      = $this->param('id');
        $note->item_type                    = 1;
        $note->content                      = $data['note'];
        $note->created_at                   = \Carbon\Carbon::now();
        $note->updated_at                   = \Carbon\Carbon::now();
        $note->save();
    }



    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'updated';
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

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
    return Redirect::to('dashboard');
}
}
