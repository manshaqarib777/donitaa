<?php

namespace App\Http\Helpers;

use App\Mission;
use App\Shipment;

class ShipmentActionHelper{

    private $actions;
	public function __construct() {
		$this->actions = array();
	}

    public function get($status,$type=null)
    {
        if($status == Shipment::REQUESTED_STATUS)
        {
            if($type == Shipment::DROPOFF)
            {
                return $this->requested();
            }elseif($type == Shipment::PICKUP)
            {
                return $this->requestedPickup();
            }
            
        }elseif($status == Shipment::SAVED_STATUS)
        {
            if($type == Shipment::DROPOFF)
            {
                return $this->saved();
            }elseif($type == Shipment::PICKUP)
            {
                return $this->savedPickup();
            }
            
        }
        elseif($status == Shipment::APPROVED_STATUS || $status == Shipment::DOMESTIC_FACILITY || (($status == Shipment::PACKAGE_DEPARTED) && !isset($_GET['action'])))
        {
            return $this->accepted();
        }elseif($status == Shipment::CAPTAIN_ASSIGNED_STATUS)
        {
            return $this->assigned();
        }elseif($status == Shipment::CLOSED_STATUS)
        {
            return $this->closed();
        }elseif($status == Shipment::RETURNED_STATUS)
        {
            return $this->returned();
        }elseif($status == Shipment::RETURNED_STOCK)
        {
            return $this->returned_stock();
        }elseif($status == Shipment::DELIVERED_STATUS)
        {
            return $this->deliverd();
        }
        else
        {
            return $this->default();
        }
    }
    static public function permission_info()
    {
        return [
            [
                "text"=> translate('Approve  Shipment Action'),
                "permissions"=>1031,
            ],
            [
                "text"=> translate('Refuse Shipment Action'),
                "permissions"=>1032,
            ],
            [
                "text"=> translate('Confirm Shipment'),
                "permissions"=>1033,
            ],
            [
                "text"=> translate('Return Shipment Action'),
                "permissions"=>1034,
            ],
            [
                "text"=> translate('Create Return Mission'),
                "permissions"=>1035,
            ],
            [
                "text"=> translate('Create Delivery Mission to Receiver'),
                "permissions"=>1036,
            ],
            [
                "text"=> translate('Create Supply Mission'),
                "permissions"=>1040,
            ],
            [
                "text"=> translate('Create Transfer Mission'),
                "permissions"=>1200,
            ]
        ];  
    }
    private function saved()
    {
            $this->actions[count($this->actions)] = array();
            $this->actions[count($this->actions)-1]['title'] = translate('Approve');
            $this->actions[count($this->actions)-1]['icon'] = 'fa fa-check';
            $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action',['to'=>Shipment::APPROVED_STATUS]);
            $this->actions[count($this->actions)-1]['method'] = 'POST';
            $this->actions[count($this->actions)-1]['type'] = 1; 
            $this->actions[count($this->actions)-1]['permissions'] = 1031; 
            $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch']; 
            $this->actions[count($this->actions)-1]['index'] = true;
            
            $this->actions[count($this->actions)] = array();
            $this->actions[count($this->actions)-1]['title'] = translate('Close');
            $this->actions[count($this->actions)-1]['icon'] = 'fa fa-trash';
            $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action',['to'=>Shipment::CLOSED_STATUS]);
            $this->actions[count($this->actions)-1]['method'] = 'POST';
            $this->actions[count($this->actions)-1]['permissions'] = 1032; 
            $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch']; 
            $this->actions[count($this->actions)-1]['type'] = 1; 
            $this->actions[count($this->actions)-1]['index'] = true;
            
            

            return $this->actions;
    }

    private function savedPickup()
    {
            $this->actions[count($this->actions)] = array();
            $this->actions[count($this->actions)-1]['title'] = translate('Confirm Shipment');
            $this->actions[count($this->actions)-1]['icon'] = 'fa fa-check';
            $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action.create.pickup.mission',['type'=>Mission::PICKUP_TYPE]);
            $this->actions[count($this->actions)-1]['method'] = 'POST';
            $this->actions[count($this->actions)-1]['js_function_caller'] = 'openCaptainModel(this,event)';
            $this->actions[count($this->actions)-1]['permissions'] = 1033; 
            $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch','customer']; 
            $this->actions[count($this->actions)-1]['type'] = 1; 
            $this->actions[count($this->actions)-1]['index'] = true;

            $this->actions[count($this->actions)] = array();
            $this->actions[count($this->actions)-1]['title'] = translate('Print Label');
            $this->actions[count($this->actions)-1]['icon'] = 'fa fa-print';
            $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.print.stickers');
            $this->actions[count($this->actions)-1]['method'] = 'POST';
            $this->actions[count($this->actions)-1]['permissions'] = 1032; 
            $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch','customer']; 
            $this->actions[count($this->actions)-1]['type'] = 1; 
            $this->actions[count($this->actions)-1]['index'] = true;
            
            $this->actions[count($this->actions)] = array();
            $this->actions[count($this->actions)-1]['title'] = translate('Close');
            $this->actions[count($this->actions)-1]['icon'] = 'fa fa-trash';
            $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action',['to'=>Shipment::CLOSED_STATUS]);
            $this->actions[count($this->actions)-1]['method'] = 'POST';
            $this->actions[count($this->actions)-1]['permissions'] = 1032; 
            $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch']; 
            $this->actions[count($this->actions)-1]['type'] = 1; 
            $this->actions[count($this->actions)-1]['index'] = true;

            

            return $this->actions;
    }

    private function requested()
    {
            $this->actions[count($this->actions)] = array();
            $this->actions[count($this->actions)-1]['title'] = translate('Approve');
            $this->actions[count($this->actions)-1]['icon'] = 'fa fa-check';
            $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action',['to'=>Shipment::APPROVED_STATUS]);
            $this->actions[count($this->actions)-1]['method'] = 'POST';
            $this->actions[count($this->actions)-1]['permissions'] = 1031; 
            $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch']; 
            $this->actions[count($this->actions)-1]['type'] = 1; 
            $this->actions[count($this->actions)-1]['index'] = true;
            
            $this->actions[count($this->actions)] = array();
            $this->actions[count($this->actions)-1]['title'] = translate('Close');
            $this->actions[count($this->actions)-1]['icon'] = 'fa fa-trash';
            $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action',['to'=>Shipment::CLOSED_STATUS]);
            $this->actions[count($this->actions)-1]['method'] = 'POST';
            $this->actions[count($this->actions)-1]['permissions'] = 1032; 
            $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch']; 
            $this->actions[count($this->actions)-1]['type'] = 1; 
            $this->actions[count($this->actions)-1]['index'] = true;

            return $this->actions;
    }

    private function assigned()
    {
        // $this->actions[count($this->actions)] = array();
        // $this->actions[count($this->actions)-1]['title'] = translate('Return');
        // $this->actions[count($this->actions)-1]['icon'] = 'fa fa-check';
        // $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action',['to'=>Shipment::RETURNED_STATUS]);
        // $this->actions[count($this->actions)-1]['method'] = 'POST';
        // $this->actions[count($this->actions)-1]['permissions'] = 1034; 
        // $this->actions[count($this->actions)-1]['type'] = 1; 
        // $this->actions[count($this->actions)-1]['index'] = true;

        return $this->actions;
    }

    private function returned()
    {
        $this->actions[count($this->actions)] = array();
        $this->actions[count($this->actions)-1]['title'] = translate('To Returned Stock');
        $this->actions[count($this->actions)-1]['icon'] = 'fa fa-check';
        $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action',['to'=>Shipment::RETURNED_STOCK]);
        $this->actions[count($this->actions)-1]['method'] = 'POST';
        $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch']; 
        $this->actions[count($this->actions)-1]['type'] = 1; 
        $this->actions[count($this->actions)-1]['index'] = true;

        return $this->actions;
    }

    public function returned_stock()
    {
        $this->actions[count($this->actions)] = array();
        $this->actions[count($this->actions)-1]['title'] = translate('Create Return Mission');
        $this->actions[count($this->actions)-1]['icon'] = 'fa fa-check';
        $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action.create.return.mission',['type'=>Mission::RETURN_TYPE]);
        $this->actions[count($this->actions)-1]['method'] = 'POST';
        $this->actions[count($this->actions)-1]['js_function_caller'] = 'openCaptainModel(this,event)';
        $this->actions[count($this->actions)-1]['type'] = 1; 
        $this->actions[count($this->actions)-1]['permissions'] = 1035; 
        $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch']; 
        $this->actions[count($this->actions)-1]['index'] = true;
        return $this->actions;
    }

    private function requestedPickup()
    {

        // $this->actions[count($this->actions)] = array();
        // $this->actions[count($this->actions)-1]['title'] = translate('Approve');
        // $this->actions[count($this->actions)-1]['icon'] = 'fa fa-check';
        // $this->actions[count($this->actions)-1]['permissions'] = 1031; 
        // $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action',['to'=>Shipment::APPROVED_STATUS]);
        // $this->actions[count($this->actions)-1]['method'] = 'POST';
        // $this->actions[count($this->actions)-1]['type'] = 1; 
        // $this->actions[count($this->actions)-1]['index'] = true;
        
        // $this->actions[count($this->actions)] = array();
        // $this->actions[count($this->actions)-1]['title'] = translate('Close');
        // $this->actions[count($this->actions)-1]['icon'] = 'fa fa-trash';
        // $this->actions[count($this->actions)-1]['permissions'] = 1032; 
        // $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action',['to'=>Shipment::CLOSED_STATUS]);
        // $this->actions[count($this->actions)-1]['method'] = 'POST';
        // $this->actions[count($this->actions)-1]['type'] = 1; 
        // $this->actions[count($this->actions)-1]['index'] = true;

        

        return $this->actions;
    }

    private function accepted()
    {

        if(isset($_GET['zone']) && $_GET['zone']==1 && !isset($_GET['country_transfer']))
        {
            $this->actions[count($this->actions)] = array();
            $this->actions[count($this->actions)-1]['title'] = translate('Transfer To Branch');
            $this->actions[count($this->actions)-1]['icon'] = 'fa fa-check';
            $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action.create.transfer.branch.mission',['type'=>Mission::TRANSFER_TYPE]);
            $this->actions[count($this->actions)-1]['method'] = 'POST';
            $this->actions[count($this->actions)-1]['js_function_caller'] = 'openTransferShipmentBranchModel(this,event)';
            $this->actions[count($this->actions)-1]['type'] = 1; 
            $this->actions[count($this->actions)-1]['status'] = Shipment::PACKAGE_DEPARTED;
            $this->actions[count($this->actions)-1]['permissions'] = 1200; 
            $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch']; 
            $this->actions[count($this->actions)-1]['index'] = true;
        }
        else if(isset($_GET['zone']) && $_GET['zone']==2 && !isset($_GET['country_transfer']))
        {
            $this->actions[count($this->actions)] = array();
            $this->actions[count($this->actions)-1]['title'] = translate('Transfer To Country');
            $this->actions[count($this->actions)-1]['icon'] = 'fa fa-check';
            $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action.create.transfer.country.mission',['type'=>Mission::TRANSFER_TYPE]);
            $this->actions[count($this->actions)-1]['method'] = 'POST';
            $this->actions[count($this->actions)-1]['status'] = Shipment::PACKAGE_DEPARTED;
            $this->actions[count($this->actions)-1]['js_function_caller'] = 'openTransferShipmentCountryModel(this,event)';
            $this->actions[count($this->actions)-1]['type'] = 1; 
            $this->actions[count($this->actions)-1]['permissions'] = 1200; 
            $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch']; 
            $this->actions[count($this->actions)-1]['index'] = true;
        }
        else if(!isset($_GET['country_transfer']))
        {
            
            $this->actions[count($this->actions)] = array();
            $this->actions[count($this->actions)-1]['title'] = translate('Create Delivery Mission to Receiver');
            $this->actions[count($this->actions)-1]['icon'] = 'fa fa-check';
            $this->actions[count($this->actions)-1]['text'] =  translate('PACKAGE DEPARTED');

            $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action.create.delivery.mission',['type'=>Mission::DELIVERY_TYPE]);
            $this->actions[count($this->actions)-1]['method'] = 'POST';
            $this->actions[count($this->actions)-1]['js_function_caller'] = 'openAssignShipmentCaptainModel(this,event)';
            $this->actions[count($this->actions)-1]['type'] = 1; 
            $this->actions[count($this->actions)-1]['permissions'] = 1036; 
            $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch']; 
            $this->actions[count($this->actions)-1]['index'] = true;

            // $this->actions[count($this->actions)] = array();
            // $this->actions[count($this->actions)-1]['title'] = translate('Transfer To Branch');
            // $this->actions[count($this->actions)-1]['icon'] = 'fa fa-check';
            // $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action.create.transfer.mission',['type'=>Mission::TRANSFER_TYPE]);
            // $this->actions[count($this->actions)-1]['method'] = 'POST';
            // $this->actions[count($this->actions)-1]['js_function_caller'] = 'openTransferShipmentCaptainModel(this,event)';
            // $this->actions[count($this->actions)-1]['type'] = 1; 
            // $this->actions[count($this->actions)-1]['permissions'] = 1200; 
            // $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch']; 
            // $this->actions[count($this->actions)-1]['index'] = true;
            
        }



        if(isset($_GET['country_transfer']) && $_GET['country_transfer']==2)
        {
            $this->actions[count($this->actions)] = array();
            $this->actions[count($this->actions)-1]['title'] = translate('Transfer To Country');
            $this->actions[count($this->actions)-1]['icon'] = 'fa fa-check';
            $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action.create.transfer.country2.mission',['type'=>Mission::TRANSFER_TYPE]);
            $this->actions[count($this->actions)-1]['method'] = 'POST';
            $this->actions[count($this->actions)-1]['status'] = Shipment::DOMESTIC_FACILITY;
            $this->actions[count($this->actions)-1]['js_function_caller'] = 'openTransferShipmentCountry2Model(this,event)';
            $this->actions[count($this->actions)-1]['type'] = 1; 
            $this->actions[count($this->actions)-1]['permissions'] = 1200; 
            $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch']; 
            $this->actions[count($this->actions)-1]['index'] = true;
        }
        else if(isset($_GET['country_transfer']) && $_GET['country_transfer']==1)
        {
            
            $this->actions[count($this->actions)] = array();
            $this->actions[count($this->actions)-1]['title'] = translate('Create Delivery Mission to Receiver');
            $this->actions[count($this->actions)-1]['text'] =  translate('DOMESTIC FACILITY');
            $this->actions[count($this->actions)-1]['icon'] = 'fa fa-check';
            $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action.create.delivery.mission',['type'=>Mission::DELIVERY_TYPE]);
            $this->actions[count($this->actions)-1]['method'] = 'POST';
            $this->actions[count($this->actions)-1]['js_function_caller'] = 'openAssignShipmentCaptainModel(this,event)';
            $this->actions[count($this->actions)-1]['type'] = 1; 
            $this->actions[count($this->actions)-1]['permissions'] = 1036; 
            $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch']; 
            $this->actions[count($this->actions)-1]['index'] = true;
        }

            // $this->actions[count($this->actions)] = array();
            // $this->actions[count($this->actions)-1]['title'] = translate('Transfer To Branch');
            // $this->actions[count($this->actions)-1]['icon'] = 'fa fa-check';
            // $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action.create.transfer.mission',['type'=>Mission::TRANSFER_TYPE]);
            // $this->actions[count($this->actions)-1]['method'] = 'POST';
            // $this->actions[count($this->actions)-1]['js_function_caller'] = 'openTransferShipmentCaptainModel(this,event)';
            // $this->actions[count($this->actions)-1]['type'] = 1; 
            // $this->actions[count($this->actions)-1]['permissions'] = 1200; 
            // $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch']; 
            // $this->actions[count($this->actions)-1]['index'] = true;


            $this->actions[count($this->actions)] = array();
            $this->actions[count($this->actions)-1]['title'] = translate('Close');
            $this->actions[count($this->actions)-1]['icon'] = 'fa fa-trash';
            $this->actions[count($this->actions)-1]['permissions'] = 1032; 
            $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action',['to'=>Shipment::CLOSED_STATUS]);
            $this->actions[count($this->actions)-1]['method'] = 'POST';
            $this->actions[count($this->actions)-1]['type'] = 1; 
            $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch']; 
            $this->actions[count($this->actions)-1]['index'] = true;
            return $this->actions;
    }
    private function closed()
    {
            $this->actions[count($this->actions)] = array();
            $this->actions[count($this->actions)-1]['title'] = translate('Approve');
            $this->actions[count($this->actions)-1]['icon'] = 'fa fa-check';
            $this->actions[count($this->actions)-1]['permissions'] = 1031; 
            $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action',['to'=>Shipment::APPROVED_STATUS]);
            $this->actions[count($this->actions)-1]['method'] = 'POST';
            $this->actions[count($this->actions)-1]['type'] = 1; 
            $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch','customer']; 
            $this->actions[count($this->actions)-1]['index'] = true;
            return $this->actions;
    }
    private function deliverd()
    {
            $this->actions[count($this->actions)] = array();
            $this->actions[count($this->actions)-1]['title'] = translate('Create Supply Mission');
            $this->actions[count($this->actions)-1]['icon'] = 'fa fa-check';
            $this->actions[count($this->actions)-1]['url'] = route('admin.shipments.action.create.supply.mission',['type'=>Mission::SUPPLY_TYPE]);
            $this->actions[count($this->actions)-1]['method'] = 'POST';
            $this->actions[count($this->actions)-1]['js_function_caller'] = 'openCaptainModel(this,event)';
            $this->actions[count($this->actions)-1]['permissions'] = 1040; 
            $this->actions[count($this->actions)-1]['type'] = 1; 
            $this->actions[count($this->actions)-1]['user_role'] = ['admin','branch','customer']; 
            $this->actions[count($this->actions)-1]['index'] = true;
            return $this->actions;
    }
    private function default()
    {
           
            return $this->actions;
    }
}