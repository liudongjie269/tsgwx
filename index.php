<?php
/**
 * index文件为主页文件，用途在于验证微信服务器发来的信息，并判断是get方式还是post 方式，
 * get方式用validate进行验证，post方式用handler进行处理
 */
    // define("token","kytsg");
    if (!empty($_GET)) {
        require_once("validate.class.php");
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        // echo "asd";
        $myValidate=new validate($signature,$timestamp,$nonce,"kytsg");
        if ($myValidate->chkSignature()) {
            echo $_GET["echostr"];
            exit;
        }
        
     }
     if (!empty($_POST)) {
        $val = "";
        $fileName = "abc";//文件名称
        @$data = fopen($fileName,'a+');//添加不覆盖，首先会判断这个文件是否存在，如果不存在，则会创建该文件，即每天都会创建一个新的文件记录的信息
        $val.= $currentDateTime;
        if($_POST){
            $val.='|POST'.'|'.$_POST."\n";
            foreach($_POST as $key =>$value){
                $val .= '|'.$key.":".$value;
            }
        }
        $val.= "\n";
        fwrite($data,$val);//写入文本中
        fclose($data);
     }

?>