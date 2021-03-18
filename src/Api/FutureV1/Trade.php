<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Poloniex\Api\FutureV1;

use Lin\Poloniex\Request;

class Trade extends Request
{
    protected $authentication=true;

    /**
     *POST /api/v1/orders
     * */
    public function postOrders(array $data = [])
    {
        $this->type = 'POST';
        $this->path = '/api/v1/orders';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *DELETE /api/v1/orders/{order-id}
     * */
    public function deleteOrder(array $data = [])
    {
        $this->type = 'DELETE';
        $this->path = '/api/v1/orders/'.$data['order-id'];
        $this->data = $data;
        return $this->exec();
    }

    /**
     *DELETE /api/v1/orders
     * */
    public function deleteOrders(array $data = [])
    {
        $this->type = 'DELETE';
        $this->path = '/api/v1/orders';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *DELETE /api/v1/stopOrders
     * */
    public function deleteStopOrders(array $data = [])
    {
        $this->type = 'DELETE';
        $this->path = '/api/v1/stopOrders';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/orders
     * */
    public function getOrders(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/orders';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/stopOrders
     * */
    public function getStopOrders(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/stopOrders';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/recentDoneOrders
     * */
    public function getRecentDoneOrders(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/recentDoneOrders';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/orders/{order-id}
     * */
    public function getOrder(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/orders/'.$data['order-id'];
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/fills
     * */
    public function getFills(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/fills';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/openOrderStatistics
     * */
    public function getOpenOrderStatistics(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/openOrderStatistics';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/position
     * */
    public function getPosition(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/position';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/positions
     * */
    public function getPositions(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/positions';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *POST /api/v1/position/margin/auto-deposit-status
     * */
    public function postPositionMarginAutoDepositStatus(array $data = [])
    {
        $this->type = 'POST';
        $this->path = '/api/v1/position/margin/auto-deposit-status';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *POST /api/v1/position/margin/deposit-margin
     * */
    public function postPositionMarginDepositMargin(array $data = [])
    {
        $this->type = 'POST';
        $this->path = '/api/v1/position/margin/deposit-margin';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/funding-history
     * */
    public function getFundingHistory(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/funding-history';
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
