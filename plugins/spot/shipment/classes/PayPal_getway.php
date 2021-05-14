<?php namespace Spot\Shipment\Classes;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

class PayPal_getway {

    protected static $instance;
    protected  $apiContext;
    protected  $secret;
    protected  $clientID;

   

    public function __construct()
    {
        // $this->clientID = 'AQ7s2zX_0AuDURoZTNv5-6py1ZqohURiw8w8hv0fXDlKt-gbRTDTTMrxImV7bSDInBtHEQqxo3s8V2SE';
        // $this->secret = 'EBjnaonYaVecSCiJSrOrOIDEoDp8utBuEGu8sZrjScDAIV9nGXOhftCks3-4xETpk5qP_gt3IGYvnzaY';

        $this->clientID = 'ATfc5DjHuq6qOEYbVbmICtAnc-HFDSpi0odbj-iSZqbw7lJ9-XuvngTtgR4LAyvJuvH_oyBAwIKYpNsg';
        $this->secret = 'ED4_0LS9sZ5ITPEqefE6Tzh7rpoOuUpB-l48tMqByEYsNKApO1HuqSIV4ynyrXjQjG86YRCC3zEuQc9j';

        $this->apiContext = new ApiContext(new OAuthTokenCredential($this->clientID,$this->secret )); 
        $this->apiContext->setConfig(
            array(
                'mode' => 'sandbox',
                'http.ConnectionTimeOut' => 3000,

                //'log.LongEnabled' => true,
                //'log.FileName' => storage_path().'/logs/paypal.log',

                //'log.LogLevel' => 'DEBUG',
            )
        );
    }

    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            return static::$instance = new static();
        }

        return static::$instance;
    }

    private static function initParam($clientID,$secret){
        return array(
            'sandbox.client_id' => 'AQasJubAUoP-pIHVeX8h8eteuU5lOTeKyNewWJizo_9gGL4wtRLcje-lLVFGuyAmeZ_RnnKMmuwaItKV',
            'sandbox.secret' => 'EGdv5YPMBCmy9U-2oSkeKigiZ4WgW52Kdp--wCVmq1wdqpDCQ8jF8EHVqGhkBGVbyb6l4c4nGAuhaD5U',

            'settings' => [
                'http.ConnectionTimeOut' => 3000,

                'log.LongEnabled' => true,
                'log.FileName' => storage_path().'/logs/paypal.log',

                'log.LogLevel' => 'DEBUG',
            ]

        );
    }
    
    public  function pay($item,$price)
    {
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $item1 = new Item();
        $item1->setName('Ground Coffee 40 oz')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice(20);

        $itemList = new ItemList();
        $itemList->setItems(array($item1));

        // $details = new Details();
        // $details->setShipping(1.2)
        //     ->setTax(1.3)
        //     ->setSubtotal(17.50);

        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal(20);
            //->setDetails($details);
        
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description");
            //->setInvoiceNumber(uniqid()); 

        //$baseUrl = getBaseUrl();
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("https://spotlayer.com/cargodev/en/dashboard")
            ->setCancelUrl("https://spotlayer.com/cargodev/en/dashboard");       

        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        //$request = clone $payment;
        
            
        try {
            $payment->create($this->apiContext);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            // ResultPrinter::printError("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", null, $request, $ex);
            dd($ex);
        }

        $approvalUrl = $payment->getApprovalLink();
       // dd($approvalUrl);
        return $approvalUrl;

    }

    




    
}