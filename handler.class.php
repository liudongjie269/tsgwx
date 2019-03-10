<?php
function ResponseMsg($webdata)
{
    if (!empty($webdata)){
        require_once('hander/receive.php');
        $ParserXml=new Parser();
        $Msg=$ParserXml.ParseXml($webdata);
        echo "success";
	    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	    $txt =json_encode($Msg,JSON_FORCE_OBJECT) ."\n";
	    fwrite($myfile, $txt);
	    fclose($myfile);
    }
}
?>
