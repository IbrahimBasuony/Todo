<?php

//namespace Validation ;






class Validation{

    private $errors=[];

    public function validate($key,$value,$rules){

        foreach($rules as $rule){
            $object=new $rule ;

          $error=$object->check($key , $value);

          $this->errors[]=$error ;

        }

    }


    public function getError(){
        return $this->errors ;
    }

}