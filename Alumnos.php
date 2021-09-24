<?php 
$n1=$_REQUEST["nota1"];
$result=0;
for($i=0;$i<count($n1);$i++){

    $result=$result+$n1[$i];
}

$result=$result/count($n1);

if($result>=7){
    echo "<h2 style = 'color:green'> Aprobado </h2>";
    }else{
        echo "<h2 style = 'color:red'> Desaprobado, Vuelva en febrero </h2>";
    }
