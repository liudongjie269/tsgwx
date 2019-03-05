<?php
  function abc($a){
    $val = "";
    $fileName = "abc";//文件名称
    $data = fopen($fileName,'a+');//添加不覆盖，首先会判断这个文件是否存在，如果不存在，则会创建该文件，即每天都会创建一个新的文件记录的信息
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