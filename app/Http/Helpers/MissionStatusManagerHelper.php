<?php

namespace App\Http\Helpers;

use App\ClientShipmentLog;
use App\Mission;
use App\Client;
use App\Shipment;
use App\Transaction;
use DB;

class MissionStatusManagerHelper
{


    //Mission Status Manager

    public function change_mission_status($missions, $to, $captain_id = null,$params=array())
    {

        //dd($to);
        $response = array();
        $response['success'] = 1;
        $response['error_msg'] = '';
        try {
            DB::beginTransaction();
            $transaction = new TransactionHelper();
            foreach ($missions as $mission_id) {
                $mission = Mission::withoutGlobalScope('restriction')->find($mission_id);
                //dd($mission);
                $mission->updated_at =  date('Y-m-d H:i:s');
                $shipment = $mission->shipmentMissionID->shipment;
                            
                if($mission->status_id == $to)
                {
                    throw new \Exception("Out of status changer scope");
                }
                if ($mission != null) {
                    
                    $oldStatus = $mission->status_id;
                    if ($to == Mission::APPROVED_STATUS) {
                        


                        if ($mission->getOriginal('type') == Mission::PICKUP_TYPE) 
                        {
                            $shipment->status_id =Shipment::ASSIGNED_FOR_PICKUP;
                            $shipment->save();
                        }
                        if ($mission->getOriginal('type') == Mission::DELIVERY_TYPE) {
                            $shipment->status_id =Shipment::ASSIGNED_FOR_DELIVERY;
                            $shipment->save();
                        }
                        //dd($shipment);
                        

                        if ($mission->getOriginal('type') == Mission::TRANSFER_TYPE) {
                            
                        }

                        if ($mission->getOriginal('type') == Mission::RETURN_TYPE) {
                            
                        }

                        if ($mission->getOriginal('type') == Mission::SUPPLY_TYPE) {
                            
                        }

                        if ($mission->getOriginal('type') == Mission::PICKUP_TYPE) {

                        }

                        if($mission->getOriginal('type')  == Mission::SUPPLY_TYPE)
                        {

                        }


                        if ($captain_id != null) {
                            $mission->captain_id = $captain_id;
                           
                            if(isset($params['due_data']))
                            {
                                $mission->due_date = $params['due_data'];  
                            }
                        } else {
                            throw new \Exception("Captain is required in this step");
                        }
                        
                    }   
                     //dd($to);
                    if ($to == Mission::RECIVED_STATUS) 
                    {
                       
                        if ($mission->getOriginal('type') == Mission::PICKUP_TYPE) 
                        {
                            $shipment->status_id =Shipment::PACKAGE_PICKED_UP;
                            $shipment->save();
                        }

                        if ($mission->getOriginal('type') == Mission::DELIVERY_TYPE) {
                            $shipment->status_id =Shipment::DELIVERED_STATUS;
                            $shipment->save();
                        }

                        if ($mission->getOriginal('type') == Mission::TRANSFER_TYPE) {
                            
                        }

                        if ($mission->getOriginal('type') == Mission::RETURN_TYPE) {
                            
                        }

                        if ($mission->getOriginal('type') == Mission::SUPPLY_TYPE) {
                            
                        }

                        if ($mission->getOriginal('type') == Mission::PICKUP_TYPE) {

                        }

                        if($mission->getOriginal('type')  == Mission::SUPPLY_TYPE)
                        {

                        }
                        

                        if(isset($params['amount']))
                        {
                            $mission->amount = $params['amount'];
                            
                            if ($mission->getOriginal('type') == Mission::PICKUP_TYPE) {
                                $transaction->create_mission_transaction($mission->id,$params['amount'],Transaction::CAPTAIN,$mission->captain_id,Transaction::CREDIT);
                            }
                            
                            
                        }
                        
                        if($mission->getOriginal('type')  == Mission::SUPPLY_TYPE)
                        {


                            $amount_to_bo_collected = 0 ;
                            foreach ($mission->shipment_mission as $shipment_mission)
                            {
                                $amount_to_bo_collected += $shipment_mission->shipment->amount_to_be_collected; 
                            }
                            $client = $mission->client;
                            $cost=$client->supply_cost;
                            if($client->supply_cost<=0)
                            {
                                $cost = convert_price(\App\ShipmentSetting::getVal('def_supply_cost_'.$shipment->receiver->userReceiver->user->country->iso2));
                            }
                            $transaction->create_mission_transaction($mission->id,$cost,Transaction::CAPTAIN,$mission->captain_id,Transaction::CREDIT);
                            
                        }

                    }

                    if ($to == Mission::DONE_STATUS) {

                        if ($mission->getOriginal('type') == Mission::PICKUP_TYPE) {
                            $shipment->status_id =Shipment::PACKAGE_PICKUP_COMPLETED;
                            $shipment->save();
                        }

                        if ($mission->getOriginal('type') == Mission::DELIVERY_TYPE) {
                            $shipment->status_id =Shipment::PACKAGE_DELIVERY_COMPLETED;
                            $shipment->save();   
                        }
                        //dd($shipment);

                        if ($mission->getOriginal('type') == Mission::TRANSFER_TYPE) {
                            
                        }

                        if ($mission->getOriginal('type') == Mission::RETURN_TYPE) {
                            
                        }

                        if ($mission->getOriginal('type') == Mission::SUPPLY_TYPE) {
                            
                        }

                        if ($mission->getOriginal('type') == Mission::PICKUP_TYPE) {

                        }

                        if($mission->getOriginal('type')  == Mission::SUPPLY_TYPE)
                        {

                        }
                        

                        if ($mission->getOriginal('type') == Mission::TRANSFER_TYPE) {
                            foreach (\App\ShipmentMission::withoutGlobalScope('restriction')->where('mission_id', $mission->id)->pluck('shipment_id') as $shipment_id) {
                                $shipment = \App\Shipment::withoutGlobalScope('restriction')->find($shipment_id);
                                $oldClientStatus = $shipment->client_status;
                                $shipment->client_status = Shipment::CLIENT_STATUS_RECEIVED_BRANCH;
                                $log = new ClientShipmentLog();
                                $log->from = $oldClientStatus;
                                $log->to = Shipment::CLIENT_STATUS_RECEIVED_BRANCH;
                                $log->shipment_id = $shipment->id;
                                $log->created_by = \Auth::user()->id;
                                $log->save();
                            }
                        }
                        if ($mission->getOriginal('type') == Mission::DELIVERY_TYPE) {
                            $captain_amount = $transaction->calcMissionShipmentsAmount($mission->getOriginal('type'), $mission->id);
                            //dd($captain_amount);

                            $amount_to_bo_collected = 0 ;
                            foreach ($mission->shipment_mission as $shipment_mission)
                            {
                                $amount_to_bo_collected += $shipment_mission->shipment->amount_to_be_collected; 
                            }

                            $transaction->create_mission_transaction($mission->id,$captain_amount,Transaction::CAPTAIN,$mission->captain_id,Transaction::CREDIT);
                            $transaction->create_mission_transaction($mission->id,$amount_to_bo_collected,Transaction::CLIENT,$mission->client_id,Transaction::CREDIT);

                            if (\Schema::hasTable('shipment_mission') && class_exists("\App\ShipmentMission") && class_exists("\App\Shipment") && class_exists("\App\Http\Helpers\StatusManagerHelper")) {
                                foreach (\App\ShipmentMission::withoutGlobalScope('restriction')->where('mission_id', $mission->id)->pluck('shipment_id') as $shipment_id) {
                                    $shipment = \App\Shipment::withoutGlobalScope('restriction')->find($shipment_id);
                                    $change_status_to_be_approved = new \App\Http\Helpers\StatusManagerHelper();
                                    $change_status_to_be_approved->change_shipment_status([$shipment->id], \App\Shipment::RECIVED_STATUS);
                                }
                            }
                            //dd($shipment);
                        }

                        
                        if (\Schema::hasTable('shipment_mission') && class_exists("\App\ShipmentMission") && class_exists("\App\Shipment") && class_exists("\App\Http\Helpers\StatusManagerHelper")) {
                            if ($mission->getOriginal('type') == Mission::PICKUP_TYPE) {
                                //Hook shipment backend in Mission status changed

                                foreach (\App\ShipmentMission::withoutGlobalScope('restriction')->where('mission_id', $mission->id)->pluck('shipment_id') as $shipment_id) {
                                    $shipment = \App\Shipment::withoutGlobalScope('restriction')->find($shipment_id);
                                    $change_status_to_be_approved = new \App\Http\Helpers\StatusManagerHelper();
                                    $change_status_to_be_approved->change_shipment_status([$shipment->id], \App\Shipment::APPROVED_STATUS);
                                }
                                
                            }
                            //dd($shipment);


                            if ($mission->getOriginal('type') == Mission::DELIVERY_TYPE) {
                                foreach (\App\ShipmentMission::withoutGlobalScope('restriction')->where('mission_id', $mission->id)->pluck('shipment_id') as $shipment_id) {
                                    
                                    $shipment = \App\Shipment::withoutGlobalScope('restriction')->find($shipment_id);
                                    if($shipment->status_id == \App\Shipment::RETURNED_STATUS){
                                        $change_status_to_be_approved = new \App\Http\Helpers\StatusManagerHelper();
                                        $change_status_to_be_approved->change_shipment_status([$shipment->id], \App\Shipment::RETURNED_STOCK);
                                    }else{
                                        $change_status_to_be_approved = new \App\Http\Helpers\StatusManagerHelper();
                                        $change_status_to_be_approved->change_shipment_status([$shipment->id], \App\Shipment::PACKAGE_DELIVERY_COMPLETED);
                                    }
                                }
                            }
                            //dd($shipment);


                            if ($mission->getOriginal('type') == Mission::TRANSFER_TYPE) {
                                foreach (\App\ShipmentMission::withoutGlobalScope('restriction')->where('mission_id', $mission->id)->pluck('shipment_id') as $shipment_id) {
                                    $shipment = \App\Shipment::withoutGlobalScope('restriction')->find($shipment_id);
                                    $oldClientStatus = $shipment->client_status;
                                    $shipment->prev_branch = $shipment->branch_id;
                                    $shipment->branch_id = $mission->to_branch_id;
                                    $shipment->save();
                                    $shipment->client_status = Shipment::CLIENT_STATUS_TRANSFERED;
                                    $log = new ClientShipmentLog();
                                    $log->from = $oldClientStatus;
                                    $log->to = Shipment::CLIENT_STATUS_TRANSFERED;
                                    $log->shipment_id = $shipment->id;
                                    $log->created_by = \Auth::user()->id;
                                    $log->save();
                                }
                            }

                            if ($mission->getOriginal('type') == Mission::RETURN_TYPE) {
                                foreach (\App\ShipmentMission::withoutGlobalScope('restriction')->where('mission_id', $mission->id)->pluck('shipment_id') as $shipment_id) {
                                    $shipment = \App\Shipment::withoutGlobalScope('restriction')->find($shipment_id);
                                    if($shipment->status_id == \App\Shipment::RETURNED_STOCK){
                                        $change_status_to_be_approved = new \App\Http\Helpers\StatusManagerHelper();
                                        $change_status_to_be_approved->change_shipment_status([$shipment->id], \App\Shipment::RETURNED_CLIENT_GIVEN);
                                    }
                                }
                            }

                            if ($mission->getOriginal('type') == Mission::SUPPLY_TYPE) {
                                foreach (\App\ShipmentMission::withoutGlobalScope('restriction')->where('mission_id', $mission->id)->pluck('shipment_id') as $shipment_id) {
                                    $shipment = \App\Shipment::withoutGlobalScope('restriction')->find($shipment_id);
                                    $change_status_to_be_approved = new \App\Http\Helpers\StatusManagerHelper();
                                    $change_status_to_be_approved->change_shipment_status([$shipment->id], \App\Shipment::SUPPLIED_STATUS);
                                }
                            }
                        }
                        // if(in_array($mission->getOriginal('type'),[Mission::PICKUP_TYPE,Mission::DELIVERY_TYPE,Mission::RETURN_TYPE,Mission::SUPPLY_TYPE]))
                        // {
                        //     $transaction->create_mission_transaction($mission->id,$mission->amount,Transaction::CAPTAIN,$mission->captain_id,Transaction::CREDIT);
                        //     $transaction->create_mission_transaction($mission->id,$mission->amount,Transaction::CLIENT,$mission->client_id,Transaction::CREDIT);
                        // }

                    }

                    $mission->status_id = $to;
                    if (!$mission->save()) {
                        throw new \Exception("can't change mission status");
                    }
                    //After change action 
                    if ($to == Mission::APPROVED_STATUS) {
                        if ($mission->getOriginal('type') == Mission::PICKUP_TYPE) {
                            
                        }
                        if ($mission->getOriginal('type') == Mission::DELIVERY_TYPE) {

                            //Hook shipment backend in Mission status changed
                            if (\Schema::hasTable('shipment_mission') && class_exists("\App\ShipmentMission") && class_exists("\App\Shipment") && class_exists("\App\Http\Helpers\StatusManagerHelper")) {

                                foreach (\App\ShipmentMission::withoutGlobalScope('restriction')->where('mission_id', $mission->id)->pluck('shipment_id') as $shipment_id) {
                                    $shipment = \App\Shipment::withoutGlobalScope('restriction')->find($shipment_id);
                                    $change_status_to_be_approved = new \App\Http\Helpers\StatusManagerHelper();
                                    $change_status_to_be_approved->change_shipment_status([$shipment->id], \App\Shipment::ASSIGNED_FOR_DELIVERY, $mission->id);
                                }
                            }
                        }
                    }

                    if ($to == Mission::CLOSED_STATUS || $to == Mission::DONE_STATUS ) 
                    {
                        $shipments = \App\Shipment::withoutGlobalScope('restriction')->where('mission_id',$mission_id)->get();
                        foreach ($shipments as $shipment) 
                        {
                            $shipment->mission_id = null ;
                            $shipment->save();
                        }
                    }

                } else {
                    throw new \Exception("There is no mission with this Code");
                }
            }
            DB::commit();
        } catch (\Exception $e) {
            //dd($e->getMessage());
            //echo $e->getMessage();exit;
            DB::rollback();
            $response['success'] = 0;
            $response['error_msg'] = $e->getMessage();
        }
        return $response;
    }
}
