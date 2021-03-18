<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Poloniex\Api\FutureV1;

use Lin\Poloniex\Request;

class Market extends Request
{
    protected $authentication=false;

    /**
     *GET /api/v1/contracts/active
     * */
    public function getContractsActive(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/contracts/active';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/contracts/{symbol}
     * */
    public function getContracts(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/contracts/'.$data['symbol'];
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/ticker
     * */
    public function getTicker(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/ticker';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/level2/snapshot
     * */
    public function getLevel2Snapshot(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/level2/snapshot';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/level2/depth
     * */
    public function getLevel2Depth(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/level2/depth';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/level2/message/query
     * */
    public function getLevel2MessageQuery(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/level2/message/query';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v2/level3/snapshot
     * */
    public function getLevel3Snapshot(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v2/level3/snapshot';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/trade/history
     * */
    public function getTradeHistory(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/trade/history';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/interest/query
     * */
    public function getInterestQuery(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/interest/query';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/index/query
     * */
    public function getIndexQuery(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/index/query';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/mark-price/{symbol}/current
     * */
    public function getMarkPriceCurrent(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/mark-price/'.$data['symbol'].'/current';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/premium/query
     * */
    public function getPremiumQuery(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/premium/query';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/funding-rate/{symbol}/current
     * */
    public function getFundingRateCurrent(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/funding-rate/'.$data['symbol'].'/current';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/timestamp
     * */
    public function getTimestamp(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/timestamp';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/status
     * */
    public function getStatus(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/status';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/kline/query
     * */
    public function getKlineQuery(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/kline/query';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *
     * */
    /*public function get(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '';
        $this->data = $data;
        return $this->exec();
    }*/
}
