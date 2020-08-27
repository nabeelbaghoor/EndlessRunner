<?php
$text1 = $_POST["scoreData"];
if($text1!="")
{
echo("Message successfully sent!");
echo("Field :".$text1);
$file = fopen("data.txt","w");
fwrite($file,$text1);
fclose($file);
}else{
    echo("Message delivery failed......");
}
