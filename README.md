### It is recommended that you read the official document first

Spot Document [https://docs.poloniex.com/#cancelloanoffer](https://docs.poloniex.com/#cancelloanoffer) 

Future Document [https://futures-docs.poloniex.com/#get-position-list](https://futures-docs.poloniex.com/#get-position-list)

All interface methods are initialized the same as those provided by Poloniex. See details [src/api](https://github.com/zhouaini528/poloniex-php/tree/master/src/Api)

Most of the interface is now complete, and the user can continue to extend it based on my design, working with me to improve it.

[中文文档](https://github.com/zhouaini528/poloniex-php/blob/master/README_CN.md)

### Other exchanges API

[Exchanges](https://github.com/zhouaini528/exchanges-php) It includes all of the following exchanges and is highly recommended.

[Bitmex](https://github.com/zhouaini528/bitmex-php) Support [Websocket](https://github.com/zhouaini528/bitmex-php/blob/master/README.md#Websocket)

[Okex](https://github.com/zhouaini528/okex-php) Support [Websocket](https://github.com/zhouaini528/okex-php/blob/master/README.md#Websocket)

[Huobi](https://github.com/zhouaini528/huobi-php) Support [Websocket](https://github.com/zhouaini528/huobi-php/blob/master/README.md#Websocket)

[Binance](https://github.com/zhouaini528/binance-php) Support [Websocket](https://github.com/zhouaini528/binance-php/blob/master/README.md#Websocket)

[Kucoin/Kumex](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/zb-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Kraken](https://github.com/zhouaini528/kraken-php)

[Gate](https://github.com/zhouaini528/gate-php)   Support V2/V4

[Bigone](https://github.com/zhouaini528/bigone-php)   

[Crex24](https://github.com/zhouaini528/crex24-php)   

[Bybit](https://github.com/zhouaini528/bybit-php)  

[Coinbene](https://github.com/zhouaini528/coinbene-php)   Support V3 

[Bitget](https://github.com/zhouaini528/bitget-php)   Support SwapV3 SpotV1 

[Poloniex](https://github.com/zhouaini528/poloniex-php)

**If you don't find the exchange SDK you want, you can tell me and I'll join them.**

#### Installation
```
composer require linwj/poloniex
```

Support for more request Settings
```php
$poloniex=new PoloniexSpot();
//or
$poloniex=new PoloniexFuture();

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
```

### Spot API

Public API [More](https://github.com/zhouaini528/poloniex-php/blob/master/tests/spot/publics.php)
```php
$poloniex=new PoloniexSpot();

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
```

Private API [More](https://github.com/zhouaini528/poloniex-php/blob/master/tests/spot/privates.php)
```php
$poloniex=new PoloniexSpot($key,$secret);

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
```

[More Test](https://github.com/zhouaini528/poloniex-php/tree/master/tests/spot)

[More Api](https://github.com/zhouaini528/poloniex-php/tree/master/src/Api/Spot)


### Future API

Market API [More](https://github.com/zhouaini528/poloniex-php/blob/master/tests/future_v1/market.php)
```php
$poloniex=new PoloniexFuture();
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
```

Trade API [More](https://github.com/zhouaini528/poloniex-php/blob/master/tests/future_v1/trade.php)
```php
$poloniex=new PoloniexFuture($key,$secret,$passphrase);
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
```

User API [More](https://github.com/zhouaini528/poloniex-php/blob/master/tests/future_v1/user.php)
```php
$poloniex=new PoloniexFuture($key,$secret,$passphrase);

try {
    $result=$poloniex->user()->getAccountOverview([
        //'currency'=>'USDT'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$poloniex->user()->getTransactionHistory();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```

[More Test](https://github.com/zhouaini528/poloniex-php/tree/master/tests/future_v1)

[More Api](https://github.com/zhouaini528/poloniex-php/tree/master/src/Api/FutureV1)
