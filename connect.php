<?php

$con = new mysqli('localhost', 'root', '', 'crudoperation');

if($con){
    // echo 'Connection successfully';
}else{
    die(mysqli_error($con));
}

?>