<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Poloniex;


use Lin\Poloniex\Api\FutureV1\Market;
use Lin\Poloniex\Api\FutureV1\Trade;
use Lin\Poloniex\Api\FutureV1\User;

class PoloniexFuture
{
    protected $key;
    protected $secret;
    protected $passphrase;
    protected $host;

    protected $options=[];

    function __construct(string $key='',string $secret='',string $passphrase='',string $host='https://futures-api.poloniex.com'){
        $this->key=$key;
        $this->secret=$secret;
        $this->passphrase=$passphrase;
        $this->host=$host;
    }

    /**
     *
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'passphrase'=>$this->passphrase,
            'host'=>$this->host,
            'options'=>$this->options,

            'platform'=>'future',
            'version'=>'v1',
        ];
    }

    /**
     *
     * */
    function setOptions(array $options=[]){
        $this->options=$options;
    }

    /**
     *
     * */
    function market(){
        return new Market($this->init());
    }

    /**
     *
     * */
    function trade(){
        return new Trade($this->init());
    }

    /**
     *
     * */
    function user(){
        return new User($this->init());
    }
}
