<?php

session_start();

if(isset($_SESSION['contador'])){
    $contador = $_SESSION['contador'];
    $contador++;
    $contador = $_SESSION['contador'] = $contador;
}else{
    $contador = $_SESSION['contador']=0;
}
echo $contador;
?>

