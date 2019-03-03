<?php
class validate
{   
    public $signature;
    public $timestamp;
    public $nonce;
    public $token;
    public function __construct($signature,$timestamp,$nonce,$token) {
        $this->signature = $signature;
        $this->timestamp = $timestamp;
        $this->nonce = $nonce;
        $this->token = $token;
    }
    public function chkSignature()
    {
        $tmpArr = array($this->token, $this->timestamp, $this->nonce);
        sort($tmpArr);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );
        if( $tmpStr == $signature ){

            return true;

        }else{

            return false;

        }
    }
}

?>