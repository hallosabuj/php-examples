<?php
if (is_numeric($_GET["num1"])==1 && is_numeric($_GET["num2"])==1){
    if ($_GET["op"]=="add"){
        $c = $_GET["num1"] + $_GET["num2"];
        $result=$c;
    }
    if ($_GET["op"]=="sub"){
        $c = $_GET["num1"] - $_GET["num2"];
        $result=$c;
    }
    if ($_GET["op"]=="mult"){
        $c = $_GET["num1"] * $_GET["num2"];
        $result=$c;
    }
    if ($_GET["op"]=="div"){
        if ($_GET["num2"]==0){
            $result="undefined";
        }else{
            $c = $_GET["num1"] / $_GET["num2"];
            $result=$c;
        }
    }
    echo $result;
}else{
    echo "";
}
?>