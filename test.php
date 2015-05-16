
<?php

class test
{
    public function printChild($string)
    {
        echo $string;
    }
    
    public function printParent()
    {
        echo 'This is parent class function';
    }
}

class ChildClass extends Test
{
    public function printChild($string)
    {
        echo $string;
    }
}

$Test = new Test();
$ChildClass = new ChildClass();
$Test->printChild('This is parent class function'); // Output: 'This is parent class function'
$Test->printParent();       // Output: 'This is parent class function' 
$ChildClass->printChild('This is child class function'); // Output: 'This is child class function'
$ChildClass->printParent();       // Output: 'This is parent class function'

?>
