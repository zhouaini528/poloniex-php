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

//account
try {
    $result=$poloniex->privates()->returnBalances();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->privates()->returnCompleteBalances();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->privates()->returnDepositAddresses();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->privates()->returnDepositsWithdrawals([
        'start'=>'1539954535',
        'end'=>'1540314535',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//order
try {
    $result=$poloniex->privates()->buy([
        'currencyPair'=>'USDT_BTC',
        'rate'=>'5000',
        'amount'=>'0.1',
        'clientOrderId'=>'123456',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->privates()->cancelOrder([
        'orderNumber'=>'123456',//(Optional) The identity number of the order to be canceled.
        //'clientOrderId'=>'123456',//(Optional) User specified 64-bit integer identifier.
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->privates()->cancelAllOrders([
        'currencyPair'=>'USDT_BTC',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->privates()->marginBuy([
        'currencyPair'=>'USDT_BTC',
        'rate'=>'5000',
        'amount'=>'0.1',
        'lendingRate'=>'0.03',
        'clientOrderId'=>'123456',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->privates()->getMarginPosition([
        'currencyPair'=>'USDT_BTC',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->privates()->closeMarginPosition([
        'currencyPair'=>'USDT_BTC',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->privates()->cancelLoanOffer([
        'orderNumber'=>'123456',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}



