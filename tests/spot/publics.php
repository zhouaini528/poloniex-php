<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Poloniex\PoloniexSpot;

require __DIR__ .'../../../vendor/autoload.php';

$poloniex=new PoloniexSpot();

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

try {
    $result=$poloniex->publics()->returnTicker();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->publics()->return24hVolume();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->publics()->returnOrderBook([
        'currencyPair'=>'BTC_ETH',
        'depth'=>'5',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->publics()->returnTradeHistory([
        'currencyPair'=>'BTC_ETH',
        'start'=>'1410158341',
        'end'=>'1410499372',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->publics()->returnChartData([
        'currencyPair'=>'USDT_BTC',
        'period'=>'1800',
        'start'=>'1410158341',
        'end'=>'1410499372',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

