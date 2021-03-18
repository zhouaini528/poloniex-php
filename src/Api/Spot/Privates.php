<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Poloniex\Api\Spot;

use Lin\Poloniex\Request;

class Privates extends Request
{
    /**
     *command=returnBalances&nonce=154264078495300
     * */
    public function returnBalances(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='returnBalances';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=returnCompleteBalances&nonce=154264078495300"
     * */
    public function returnCompleteBalances(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='returnCompleteBalances';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=returnDepositAddresses&nonce=154264078495300
     * */
    public function returnDepositAddresses(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='returnDepositAddresses';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=generateNewAddress&nonce=154264078495300&currency=ETH
     * */
    public function generateNewAddress(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='generateNewAddress';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=returnDepositsWithdrawals&start=1539954535&end=1540314535&nonce=154264078495300
     * */
    public function returnDepositsWithdrawals(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='returnDepositsWithdrawals';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=returnOpenOrders&currencyPair=BTC_ETH&nonce=154264078495300
     * */
    public function returnOpenOrders(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='returnOpenOrders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=returnTradeHistory&currencyPair=BTC_ETH&nonce=154264078495300
     * */
    public function returnTradeHistory(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='returnTradeHistory';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=returnOrderTrades&orderNumber=96238912841&nonce=154264078495300
     * */
    public function returnOrderTrades(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='returnOrderTrades';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=returnOrderStatus&orderNumber=96238912841&nonce=154264078495300
     * */
    public function returnOrderStatus(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='returnOrderStatus';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=buy&currencyPair=BTC_ETH&rate=0.01&amount=1&clientOrderId=12345&nonce=154264078495300
     * */
    public function buy(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='buy';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=sell&currencyPair=BTC_ETH&rate=10.0&amount=1&clientOrderId=12345&nonce=154264078495300
     * */
    public function sell(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='sell';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=cancelOrder&orderNumber=514845991795&nonce=154264078495300
     * */
    public function cancelOrder(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='cancelOrder';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=cancelAllOrders&nonce=1559587794133
     * */
    public function cancelAllOrders(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='cancelAllOrders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=moveOrder&orderNumber=514851026755&rate=0.00015&clientOrderId=12345&nonce=154264078495300
     * */
    public function moveOrder(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='moveOrder';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=withdraw&currency=ETH&amount=2&address=0x84a90e21d9d02e30ddcea56d618aa75ba90331ff&nonce=154264078495300
     * */
    public function withdraw(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='withdraw';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=returnFeeInfo&nonce=154264078495300
     * */
    public function returnFeeInfo(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='returnFeeInfo';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=returnAvailableAccountBalances&nonce=154264078495300
     * */
    public function returnAvailableAccountBalances(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='returnAvailableAccountBalances';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=returnTradableBalances&nonce=154264078495300
     * */
    public function returnTradableBalances(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='returnTradableBalances';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=transferBalance&currency=BTC&amount=0.5&fromAccount=lending&toAccount=exchange&nonce=154264078495300
     * */
    public function transferBalance(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='transferBalance';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=returnMarginAccountSummary&nonce=154264078495300
     * */
    public function returnMarginAccountSummary(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='returnMarginAccountSummary';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=marginBuy&currencyPair=BTC_ETH&rate=0.0035&amount=20&clientOrderId=12345&nonce=154264078495300
     * */
    public function marginBuy(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='marginBuy';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=marginSell&currencyPair=BTC_ETH&rate=0.0035&amount=20&clientOrderId=12345&nonce=154264078495300
     * */
    public function marginSell(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='marginSell';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=getMarginPosition&currencyPair=BTC_ETH&nonce=154264078495300
     * */
    public function getMarginPosition(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='getMarginPosition';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=closeMarginPosition&currencyPair=BTC_ETH&nonce=15426407849530
     * */
    public function closeMarginPosition(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='closeMarginPosition';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=createLoanOffer&currency=BTC&amount=0.1&duration=2&autoRenew=0&lendingRate=0.015&nonce=154264078495
     * */
    public function createLoanOffer(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='createLoanOffer';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=cancelLoanOffer&orderNumber=1002013188&nonce=1542640784953
     * */
    public function cancelLoanOffer(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='cancelLoanOffer';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=returnOpenLoanOffers&nonce=154264078495300
     * */
    public function returnOpenLoanOffers(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='returnOpenLoanOffers';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=returnActiveLoans&nonce=154264078495
     * */
    public function returnActiveLoans(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='returnActiveLoans';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=returnLendingHistory&start=1483228800&end=1483315200&limit=100&nonce=15426407849
     * */
    public function returnLendingHistory(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='returnLendingHistory';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=toggleAutoRenew&orderNumber=1002013188&nonce=15426407849
     * */
    public function toggleAutoRenew(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='toggleAutoRenew';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *echo -n "command=swapCurrencies&nonce=154264078495300&fromCurrency=BTC&toCurrency=WBTC&amount=25.0
     * */
    public function swapCurrencies(array $data=[]){
        $this->type='POST';
        $this->path='/tradingAp';
        $data['command']='swapCurrencies';
        $this->data=$data;
        return $this->exec();
    }
}
