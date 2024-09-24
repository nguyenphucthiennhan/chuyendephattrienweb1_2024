<?php
declare (strict_types=1);
require_once "i.php";
require_once "c.php";
require_once "a.php";
require_once "b.php";
class Demo
{
    function typeAReturnA(): A {
         echo __FUNCTION__ . "<br>";
          return new A();
         }

    function typeAReturnB(): A {
         echo __FUNCTION__ . "<br>";
          return new B();
         }
    function typeAReturnC(): A {
         echo __FUNCTION__ . "<br>";
          return new C();
         }
    function typeAReturnI(): A {
         echo __FUNCTION__ . "<br>";
          return new I();
         }
    function typeAReturnNull(): A {
         echo __FUNCTION__ . "<br>";
          return null;
         }
    
    function typeBReturnA(): B {
         echo __FUNCTION__ . "<br>";
          return new A();
         }
    function typeBReturnB(): B {
         echo __FUNCTION__ . "<br>";
          return new B();
         }
    function typeBReturnC(): B {
         echo __FUNCTION__ . "<br>";
          return new C();
         }
    function typeBReturnI(): B {
         echo __FUNCTION__ . "<br>";
          return new I();
         }
    function typeBReturnNull(): B {
         echo __FUNCTION__ . "<br>";
          return null;
         }
    
    function typeCReturnA(): C {
         echo __FUNCTION__ . "<br>";
          return new A();
         }
    function typeCReturnB(): C {
         echo __FUNCTION__ . "<br>";
          return new B();
         }
    function typeCReturnC(): C {
         echo __FUNCTION__ . "<br>";
          return new C();
         }
    function typeCReturnI(): C {
         echo __FUNCTION__ . "<br>";
          return new I();
         }
    function typeCReturnNull(): C {
         echo __FUNCTION__ . "<br>";
          return null;
         }
    
    function typeIReturnA(): I {
         echo __FUNCTION__ . "<br>";
          return new A();
         }
    function typeIReturnB(): I {
         echo __FUNCTION__ . "<br>";
          return new B();
         }
    function typeIReturnC(): I {
         echo __FUNCTION__ . "<br>";
          return new C();
         }
    function typeIReturnI(): I {
         echo __FUNCTION__ . "<br>";
          return new I();
         }
    function typeIReturnNull(): I {
         echo __FUNCTION__ . "<br>";
          return null;
         }
    
    function typeNullReturnA():null {
         echo __FUNCTION__ . "<br>";
          return new A();
         }
     function typeNullReturnB():null {
         echo __FUNCTION__ . "<br>";
          return new B();
         }
     function typeNullReturnC():null {
         echo __FUNCTION__ . "<br>";
          return new C();
         }
     function typeNullReturnI():null {
         echo __FUNCTION__ . "<br>";
          return new I();
         }
     function typeNullReturnNull():null   {
         echo __FUNCTION__ . "<br>";
          return null;
         }
}
$demo = new Demo();
$demo->typeNullReturnNull();