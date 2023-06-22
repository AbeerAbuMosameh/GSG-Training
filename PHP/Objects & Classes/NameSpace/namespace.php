<?php

namespace A;

class Test{
    public function __construct() {
      echo __CLASS__;
    }
}

const TEST = 'TEST'; // in print always define in this namespaca

define('TEST','T'); // no error even same constant name
// in print always define in global namespace

function test(){
    echo  __FUNCTION__;
}

function strlen($str){
    echo  __FUNCTION__;
}