<?php
declare(strict_types=1);  // Sử dụng strict mode

include_once "interface.php";
include_once "classA.php";
include_once "classC.php";
include_once "classB.php";

class Demo {

    public function typeAReturnA(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeAReturnB(): A {
        echo __FUNCTION__ . "<br>";
        return new B();
        // Sai kiểu dữ liệu
    }


    public function typeAReturnC(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeAReturnI(): I {
        echo __FUNCTION__ . "<br>";
        return new A();  
    }

    public function typeAReturnNull() {
        echo __FUNCTION__ . "<br>";
        return null;  
    }

//B
    public function typeBReturnA(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeBReturnB(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
//sai
    public function typeBReturnC(): B {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeBReturnI(): I {
        echo __FUNCTION__ . "<br>";
        return new B();  
    }

    public function typeBReturnNull() {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeCReturnA(): D {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeCReturnB(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeCReturnC(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeCReturnI(): I {
        echo __FUNCTION__ . "<br>";
        return new C();  
    }

    public function typeCReturnNull() {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeIReturnA(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeIReturnB(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeIReturnC(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeIReturnI(): A {
        echo __FUNCTION__ . "<br>";
        return new C();  
    }

    public function typeIReturnNull() {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeNullReturnA(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeNullReturnB(): A {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeNullReturnC(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeNullReturnI(): I {
        echo __FUNCTION__ . "<br>";
        return new C();  
    }

    public function typeNullReturnNull() {
        echo __FUNCTION__ . "<br>";
        return null;
    }
}




$demo = new Demo();
//A
$demo->typeAReturnA();
// $demo->typeAReturnB();
$demo->typeAReturnC();
$demo->typeAReturnI();
$demo->typeAReturnNULL();
//B
$demo->typeBReturnA(); 
$demo->typeBReturnB();
// $demo->typeBReturnC();
$demo->typeBReturnI();
$demo->typeBReturnNULL();

//C
//$demo->typeCReturnA(); 
$demo->typeCReturnB();
$demo->typeCReturnC();
$demo->typeCReturnI();
$demo->typeCReturnNULL();
//I
$demo->typeIReturnA(); 
$demo->typeIReturnB();
$demo->typeIReturnC();
// $demo->typeIReturnI();
$demo->typeIReturnNULL();
//NULL
$demo->typeNULLReturnA(); 
// $demo->typeNULLReturnB();
$demo->typeNULLReturnC();
$demo->typeNULLReturnI();
$demo->typeNULLReturnNULL();



// $demo = new Demo();

// 
// $reflector = new ReflectionClass('Demo');
// $methods = $reflector->getMethods(ReflectionMethod::IS_PUBLIC);

// foreach ($methods as $method) {
//     if (strpos($method->name, 'type') === 0) {  
//         echo $method->name . " output: ";
//         $demo->{$method->name}();  // Gọi phương thức
//     }
// }

