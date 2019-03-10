<?php
/**
 * 返回微信服务器rtextmsg rimgmsg reventmsg
 */
class RTextMsg{
    public function send($TextMsg)
    {
        $time = time();
        $textTpl = "<xml>
        <ToUserName><![CDATA[%s]]></ToUserName>
        <FromUserName><![CDATA[%s]]></FromUserName>
        <CreateTime>%s</CreateTime>
        <MsgType><![CDATA[%s]]></MsgType>
        <Content><![CDATA[%s]]></Content>
        </xml>";
            $msgType = "text";
            $contentStr = '你好啊，屌丝';
            $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
            echo $resultStr;
    }

}
?>
