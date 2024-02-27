<?php

function dd($value)
{
    // var_dump(['gfbjgbjd']);
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}
// echo $_SERVER['REQUEST_URI'];
// dd($_SERVER);


function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value ;
}
