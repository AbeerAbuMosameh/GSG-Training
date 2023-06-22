<?php
namespace A;
//StudlyCase every first char is capital

trait CanPrint{

    public function print(){
        echo 'print: '. $this->value;
    }
}

trait Printer{

    public function print(){
        echo $this->value;
    }
}

class Str
{
//    use CanPrint , Printer{
//        CanPrint::print insteadof  Printer ;
//        Printer::print as test ;
//
//    }
    //Constants, properties , methods
    //static + readonly => constant so cant put static, readonly togther
    // public readonly string $value;
    public  string $value;
    public static string $copy;


    public function  __construct(public readonly string $str)
    {
        $this->value =   self::$copy = $str;
    }

    public function  lenght() : int
    {
        return  strlen($this->value);
    }

    public function  equal($str) : bool
    {
        return  $this->value === $str;
    }


    public static function  getValue()
    {
        return self::$copy;
    }

}

$str = new Str('test');
$str2 = new Str('Ahmad');
$str3 = $str;
$str4 = &$str;
$str5 = clone $str;

//yse trait
//$str->print();
//exit;

var_dump($str,$str2);
                    /*object(Str)#1 (0) {
                    }
                    object(Str)#2 (0) {
                    }*/

//values to $str2 because it static
var_dump($str->lenght());
var_dump($str->equal('Test'));
var_dump($str->getValue());


var_dump($str2->lenght());
var_dump($str2->equal('Ahmad'));
var_dump($str2->getValue());
