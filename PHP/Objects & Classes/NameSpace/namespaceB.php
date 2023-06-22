<?php

namespace B;

class Test{
    public function __construct() {
      echo __CLASS__;
    }
}

const TEST = 'TEST';

function test(){
    echo  __FUNCTION__;
}
function strlen($str){
    echo  __FUNCTION__;
}