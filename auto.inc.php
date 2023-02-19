<?php
spl_autoload_register("auto");

function auto ($classname)
{
    //$url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $path="../classes/";
    $exten=".class.php";
    require_once $path.$classname.$exten;

}

//other way


// spl_autoload_register("auto");
// function auto ($classname)
// {
//     $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//     if(strpos($url,'include')!== false)
//     {
//         $path="../classes/";
//     }
//     else 
//     {
//         $path="classes/";
//     }
//     $exten=".class.php";
//     require $path.$classname.$exten;

// }