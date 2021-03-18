<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Poloniex\Api\FutureV1;

use Lin\Poloniex\Request;

class User extends Request
{
    protected $authentication=true;

    /**
     *GET /api/v1/account-overview
     * */
    public function getAccountOverview(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/account-overview';
        $this->data = $data;
        return $this->exec();
    }

    /**
     *GET /api/v1/transaction-history
     * */
    public function getTransactionHistory(array $data = [])
    {
        $this->type = 'GET';
        $this->path = '/api/v1/transaction-history';
        $this->data = $data;
        return $this->exec();
    }
}
