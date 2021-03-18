<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Poloniex\PoloniexSpot;

require __DIR__ .'../../../vendor/autoload.php';

include 'key_secret.php';

$poloniex=new PoloniexSpot($key,$secret);

//You can set special needs
$poloniex->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,

    //If you are developing locally and need an agent, you can set this
    //'proxy'=>true,
    //More flexible Settings
    /* 'proxy'=>[
     'http'  => 'http://127.0.0.1:12333',
     'https' => 'http://127.0.0.1:12333',
     'no'    =>  ['.cn']
     ], */
    //Close the certificate
    //'verify'=>false,
]);

//Account
try {
    $result=$poloniex->privates()->getAccountList();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->privates()->getAccountOne(['asset'=>'USDT']);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//Order
try {
    $result=$poloniex->privates()->postOrder([
        'instrument_id'=>'BTC/USDT',
        'direction'=>'1',
        'price'=>'10000',
        'quantity'=>'0.1',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->privates()->postBatchOrder([
        [
            'instrument_id'=>'BTC/USDT',
            'direction'=>'1',
            'price'=>'10000',
            'quantity'=>'0.1',
        ],
        [
            'instrument_id'=>'BTC/USDT',
            'direction'=>'1',
            'price'=>'20000',
            'quantity'=>'0.2',
        ]
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->privates()->getOpenOrders([
        'instrument_id'=>'BTC/USDT',
        //'latestOrderId'=>'xxxxxxxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->privates()->getClosedOrders([
        'instrument_id'=>'BTC/USDT',
        //'latestOrderId'=>'xxxxxxxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->privates()->getOrderInfo([
        'order_id'=>'xxxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


try {
    $result=$poloniex->privates()->postCancelOrder([
        'order_id'=>'xxxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->privates()->postBatchCancelOrder([
        'orderIds'=>['xxxxxx','xxxxxxx'],
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

?>
