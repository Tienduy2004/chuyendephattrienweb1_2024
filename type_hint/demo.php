<?php
declare(strict_types=1);

include_once 'I.php';
include_once 'C.php';
include_once 'A.php';
include_once 'B.php';

class Demo {
    //Trả về A
    public function typeAReturnA(): A
    {
    echo __FUNCTION__ . "<br>";
    return new A();
    }
    public function typeBReturnA(): B
    {
    echo __FUNCTION__ . "<br>";
    return new A();
    }
    public function typeCReturnA(): C
    {
    echo __FUNCTION__ . "<br>";
    return new A();
    }
    public function typeIReturnA(): I
    {
    echo __FUNCTION__ . "<br>";
    return new A();
    }
    public function typeNullReturnA()
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    //B
    public function typeAReturnB(): A
    {
    echo __FUNCTION__ . "<br>";
    return new B();
    }
    public function typeBReturnB(): B
    {
    echo __FUNCTION__ . "<br>";
    return new B();
    }
    public function typeCReturnB(): C
    {
    echo __FUNCTION__ . "<br>";
    return new B();
    }
    public function typeIReturnB(): I
    {
    echo __FUNCTION__ . "<br>";
    return new B();
    }
    public function typeNullReturnB()
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    //C
    public function typeAReturnC(): A
    {
    echo __FUNCTION__ . "<br>";
    return new C();
    }
    public function typeBReturnC(): B
    {
    echo __FUNCTION__ . "<br>";
    return new C();
    }
    public function typeCReturnC(): C
    {
    echo __FUNCTION__ . "<br>";
    return new C();
    }
    public function typeIReturnC(): C
    {
    echo __FUNCTION__ . "<br>";
    return new C();
    }
    public function typeNullReturnC()
    {
    echo __FUNCTION__ . "<br>";
    return new C();
    }
    //I
    public function typeAReturnI(): A
    {
    echo __FUNCTION__ . "<br>";
    return new I();
    }
    public function typeBReturnI(): B
    {
    echo __FUNCTION__ . "<br>";
    return new I();
    }
    public function typeCReturnI(): C
    {
    echo __FUNCTION__ . "<br>";
    return new I();
    }
    public function typeIReturnI(): I
    {
    echo __FUNCTION__ . "<br>";
    return new I();
    }
    public function typeNullReturnI()
    {
    echo __FUNCTION__ . "<br>";
    return new I();
    }
    //null
    public function typeAReturnNull(): A
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    public function typeBReturnNull(): B
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    public function typeCReturnNull(): C
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    public function typeIReturnNull(): I
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    public function typeNullReturnNull()
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    
    
}


$demo = new Demo();
//A
$demo->typeAReturnA()->a1();
//$demo->typeBReturnA();
$demo->typeCReturnA()->f();
$demo->typeIReturnA()->f();
$demo->typeNullReturnA()->a1();
//B
//$demo->typeAReturnB();
$demo->typeBReturnB()->b1();
$demo->typeCReturnB()->f();
$demo->typeIReturnB()->f();
$demo->typeNullReturnB()->b1();
//C
//$demo->typeAReturnC()->a1();
//$demo->typeBReturnC();
$demo->typeCReturnC()->f();
$demo->typeIReturnC()->f();
$demo->typeNullReturnC()->f();
//I
//$demo->typeAReturnI();
//$demo->typeBReturnI();
//$demo->typeCReturnI()->f();
//$demo->typeIReturnI();
//$demo->typeNullReturnI()->f();
//Null
//$demo->typeAReturnNull();
//$demo->typeBReturnNull();
//$demo->typeCReturnNull();
//$demo->typeIReturnNull();
$demo->typeNullReturnNull();

