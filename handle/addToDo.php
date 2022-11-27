<?php

require_once '../App.php';



if($request->hasPost("submit")){
    
    $title=$request->clean("title");


    $validation->validate("title", $title , ["Required" , "Str"] );
    $errors=$validation->getError();

    var_dump($errors);
    
}else{
    $request->header("../index.php");

}