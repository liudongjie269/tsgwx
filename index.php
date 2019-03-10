<?php
/**
 * index文件为主页文件，用途在于验证微信服务器发来的信息，并判断是get方式还是post 方式，
 * get方式用validate进行验证，post方式用handler进行处理
 */
    // define("token","kytsg");
    if (isset($_GET['echostr'])) {
        require_once("validate.class.php");
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
	@$echostr = $_GET["echostr"];
        // echo "asd";
        $myValidate=new validate($signature,$timestamp,$nonce,"kytsg");
        if ($myValidate->chkSignature()) {
            echo $echostr;
            exit;
        }
     }else{
        $webdata = file_get_contents("php://input"); 
        include_once("handler.class.php");
        responseMsg($webdata);
     }
?>
