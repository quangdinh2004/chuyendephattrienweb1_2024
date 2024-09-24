<?php
declare(strict_types=1);
require_once('I.php');
require_once('A.php');
require_once('B.php');
require_once('C.php');

class Demo
{
    public function typeAReturnA()
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeAReturnB()
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeAReturnC()
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeAReturnI()
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeAReturnNull()
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }


    public function typeBReturnA()
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeBReturnB()
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeBReturnC()
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeBReturnI()
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeBReturnNull()
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeCReturnA()
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeCReturnB()
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeCReturnC()
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeCReturnI()
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeCReturnNull()
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeIReturnA()
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeIReturnB()
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeIReturnC()
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeIReturnI()
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeIReturnNull()
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeNullReturnA()
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeNullReturnB()
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeNullReturnC()
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeNullReturnI()
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeNullReturnNull()
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }


}
$demo = new Demo;
$resultA = $demo->typeAReturnNull();
$resultB = $demo->typeBReturnNull();
$resultC = $demo->typeAReturnNull();
$resultI = $demo->typeAReturnNull();
$resultNull = $demo->typeAReturnNull();
echo ($resultNull instanceof Null) ? "True<br>" : "False<br>";