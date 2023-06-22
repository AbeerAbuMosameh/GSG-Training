<?php
//حل لمشكلة الملتي انهرتنس انها ممنوعة في ال PHP
// لكن في كود بحتاج استخدموا في اكثر من مكان

trait CanPrint{

    public function print(){
        echo $this->value();
    }
}