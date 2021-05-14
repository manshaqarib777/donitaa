<?php 
class Cms5ffc0c424e75d434989405_3cf7ddf943b47b4f7a25c73c62eee0c9Class extends Cms\Classes\PartialCode
{
public function onStart(){
        $data = post();
        $this['user']   =   Auth::getUser();
        if(isset($data['start']) && isset($data['end'])){


            $start   =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['start']));
            $end     =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['end']));


            $start          = $start->copy()->startOfDay();
            $end            = $end->copy()->endOfDay();


            $this['shipments']             =   \Spot\Shipment\Models\Order::where('created_at', '>=', $start)->where('created_at', '<=', $end)->where(function($q){
                if(Auth::getUser()->role_id == 6){
                    $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                }
            })->count();
            $this['PreAlerttoApprove']      =   \Spot\Shipment\Models\Order::where('requested', 0)->where('created_at', '>=', $start)->where('created_at', '<=', $end)->where(function($q){
                if(Auth::getUser()->role_id == 6){
                    $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                }
            })->count();
            $this['delayed']                =   \Spot\Shipment\Models\Order::whereIn('requested', [0,1,3])
                                                    ->where('delivery_date', '>',\Carbon\Carbon::now())
                                                    ->where('created_at', '>=', $start)->where('created_at', '<=', $end)->where(function($q){
                                                        if(Auth::getUser()->role_id == 6){
                                                            $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                                                        }
                                                    })->count();
            $this['PickupList']             =   \Spot\Shipment\Models\Order::where('requested', 0)->where('created_at', '>=', $start)->where('created_at', '<=', $end)->where(function($q){
                if(Auth::getUser()->role_id == 6){
                    $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                }
            })->count();
            $this['Delivered']              =   \Spot\Shipment\Models\Order::whereIn('requested', [6,10,11,8])->where('created_at', '>=', $start)->where('created_at', '<=', $end)->where(function($q){
                if(Auth::getUser()->role_id == 6){
                    $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                }
            })->count();
            if(Auth::getUser()->role_id == 1){
                $this['NewCustomers']           =   \RainLab\User\Models\User::where('created_at', '>=', $start)->where('created_at', '<=', $end)->where('role_id', 5)->count();
            }

            $unpaidDelivered = 0 ; $paidDelivered = 0;
            $allDelivered              =   \Spot\Shipment\Models\Order::whereIn('requested', [6,10,11,8])->where('created_at', '>=', $start)->where('created_at', '<=', $end)->where(function($q){
                if(Auth::getUser()->role_id == 6){
                    $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                }
            })->get();
            if($allDelivered){
                foreach( $allDelivered as $shipment){
                    if($shipment->all_payments){
                        foreach( $shipment->all_payments as $payment){
                            if($payment->description == 'courier_fee' && $payment->payment_status == 0 )
                                $unpaidDelivered += 1;
                            elseif($payment->description == 'courier_fee' && $payment->payment_status != 0)
                                $paidDelivered += 1;    
                        }
                    }
                    
                }

            }

            $this['unpaidDelivered']  = $unpaidDelivered ;
            $this['paidDelivered']  = $paidDelivered ;
        }else{
            $this['shipments']             =   \Spot\Shipment\Models\Order::where(function($q){
                if(Auth::getUser()->role_id == 6){
                    $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                }
            })->count();
            $this['PreAlerttoApprove']      =   \Spot\Shipment\Models\Order::where('requested', 0)->where(function($q){
                if(Auth::getUser()->role_id == 6){
                    $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                }
            })->count();
            $this['delayed']                =   \Spot\Shipment\Models\Order::whereIn('requested', [0,1,3])
                                                    ->where('delivery_date', '<',\Carbon\Carbon::now())
                                                    ->where(function($q){
                                                        if(Auth::getUser()->role_id == 6){
                                                            $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                                                        }
                                                    })->count();
            $this['PickupList']             =   \Spot\Shipment\Models\Order::where('requested', 0)->where(function($q){
                if(Auth::getUser()->role_id == 6){
                    $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                }
            })->count();
            $this['Delivered']   =  \Spot\Shipment\Models\Order::whereIn('requested', [6,10,11,8])->where(function($q){
                if(Auth::getUser()->role_id == 6){
                    $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                }
            })->count();
            if(Auth::getUser()->role_id == 1){
                $this['NewCustomers']           =   \RainLab\User\Models\User::where('role_id', 5)->count();
            }


            $unpaidDelivered = 0 ; $paidDelivered = 0;
            $allDelivered   =   \Spot\Shipment\Models\Order::whereIn('requested', [6,10,11,8])->where(function($q){
                if(Auth::getUser()->role_id == 6){
                    $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                }
            })->get();
            if($allDelivered){
                foreach( $allDelivered as $shipment){
                    if($shipment->all_payments){
                        foreach( $shipment->all_payments as $payment){
                            if($payment->description == 'courier_fee' && $payment->payment_status == 0 )
                                $unpaidDelivered += 1;
                            elseif($payment->description == 'courier_fee' && $payment->payment_status != 0)
                                $paidDelivered += 1;    
                        }
                    }
                    
                }

            }

            $this['unpaidDelivered']  = $unpaidDelivered ;
            $this['paidDelivered']  = $paidDelivered ;
            //dd('$uppaidDelivered = '.$unpaidDelivered.' , $paidDelivered = '.$paidDelivered);

            

        }

    }
}
