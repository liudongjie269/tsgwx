<?php
/**
 * 验证微信服务器发来的数据类型（text、img、event），并将需要的参数保存至textmsg imgmsg eventmsg
 */

class parser{
    public function ParseXml($webdata)
    {
        $xml=simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
        if (($xml->MsgType)=="text") {
            $Textmsg=new TextMSg($xml);
            return $Textmsg;
        }
    }
}
//文本信息类
class TextMSg{
    public $ToUserName;
    public $FromUerName;
    public $CreateTime;
    public $MsgId;
    public $MsgType;
    public $Content;
    public function __construct($xml){
        $this->ToUserName=$xml->ToUserName;
        $this->FromUerName=$xml->FromUerName;
        $this->CreateTime=$xml->CreateTime;
        $this->MsgType=$xml->MsgType;
        $this->Content=$xml->Content;
        $this->MsgId=$xml->MsgId;
    }
}
?>