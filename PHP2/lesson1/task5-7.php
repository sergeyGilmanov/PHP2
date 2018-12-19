<?php
/**
 * Created by PhpStorm.
 * Author: Gilmanov Sergey
 * Date: 12/18/2018
 * Time: 11:00 PM
 */

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();
echo "<br>";

print_r('В данном случае есть статичная переменная т.е. при вызове функции в теле которой она обьявлена при
завершении работы(функции), данная переменная не будет обнулена компилятором, и при последующих вызовах будет произвенен 
инкремент старого значения');
echo "<br>";

class C {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class D extends C {
}
$a1 = new C();
$b1 = new D();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
echo "<br>";
print_r('В этом примере происходит тоже самое что и в первом только есть еще класс D который является наследником
класса С
 ');
echo "<br>";

class E {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class F extends E {
}
$a1 = new E;
$b1 = new F;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
echo "<br>";

print_r('То же самое что и во втором варианте
 ');
echo "<br>";