<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Poloniex\Api\Spot;

use Lin\Poloniex\Request;

class Publics extends Request
{
    /**
     *curl "https://poloniex.com/public?command=returnTicker"
     * */
    public function returnTicker(array $data=[]){
        $this->type='GET';
        $this->path='/public?command=returnTicker';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *curl "https://poloniex.com/public?command=return24hVolume"
     * */
    public function return24hVolume(array $data=[]){
        $this->type='GET';
        $this->path='/public?command=return24hVolume';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *curl "https://poloniex.com/public?command=returnOrderBook&currencyPair=BTC_ETH&depth=10"
     * */
    public function returnOrderBook(array $data=[]){
        $this->type='GET';
        $this->path='/public?command=returnOrderBook';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *curl "https://poloniex.com/public?command=returnTradeHistory&currencyPair=BTC_ETH"
    curl "https://poloniex.com/public?command=returnTradeHistory&currencyPair=BTC_ETH&start=1410158341&end=1410499372"
     * */
    public function returnTradeHistory(array $data=[]){
        $this->type='GET';
        $this->path='/public?command=returnTradeHistory';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *curl "https://poloniex.com/public?command=returnChartData&currencyPair=BTC_XMR&start=1546300800&end=1546646400&period=14400"
     * */
    public function returnChartData(array $data=[]){
        $this->type='GET';
        $this->path='/public?command=returnChartData';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *curl "https://poloniex.com/public?command=returnCurrencies"
     * */
    public function returnCurrencies(array $data=[]){
        $this->type='GET';
        $this->path='/public?command=returnCurrencies';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *curl "https://poloniex.com/public?command=returnLoanOrders&currency=BTC"
     * */
    public function returnLoanOrders(array $data=[]){
        $this->type='GET';
        $this->path='/public?command=returnLoanOrders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *
     * */
    /*public function get(array $data=[]){
        $this->type='GET';
        $this->path='';
        $this->data=$data;
        return $this->exec();
    }*/
}
