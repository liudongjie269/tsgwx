<?php
    //通过合并数组的方式向数组添加有key的数据
    $a=array("name"=>"ldj","age"=>"30");
    $c=array_merge($a,array("sex"=>"man"));
    $date=date_create();
    echo date_timestamp_get($date);
    echo time();
?>