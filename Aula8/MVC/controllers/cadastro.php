<?php

require "../models/clientes.php";

if($_POST){
    foreach($_POST as $key => $value){
        array_push($clientes,$value);   
    }
}

if(isset($clientes))
{
    foreach($clientes as $cliente)
    {
        echo "<p>$cliente</p>";
    }
}