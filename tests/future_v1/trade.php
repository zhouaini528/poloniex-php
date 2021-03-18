<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Poloniex\PoloniexFuture;

require __DIR__ .'../../../vendor/autoload.php';

include 'key_secret.php';

$poloniex=new PoloniexFuture($key,$secret,$passphrase);

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

//order
try {
    $result=$poloniex->trade()->postOrders([
        'clientOid'=>'123456',
        'side'=>'buy',
        'symbol'=>'BTCUSDTPERP',
        'type'=>'market',
        'size'=>'20',
        //'quantity'=>'',
        'leverage'=>'20',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->trade()->deleteOrder([
        'order-id'=>'123456',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->trade()->deleteOrders([
        'symbol'=>'BTCUSDTPERP',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->trade()->getOrder([
        'order-id'=>'123456',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->trade()->getOrders([
        'status'=>'active',
        'symbol'=>'BTCUSDTPERP',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//position
try {
    $result=$poloniex->trade()->getPosition([
        'symbol'=>'BTCUSDTPERP',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->trade()->getPositions();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->trade()->postPositionMarginAutoDepositStatus([
        'symbol'=>'BTCUSDTPERP',
        'status'=>true
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


