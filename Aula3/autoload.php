<?php

function __autoload($class)
{
    $arquivo = $class . '.php';
    include_once($arquivo);
}