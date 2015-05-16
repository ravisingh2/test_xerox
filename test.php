
<?php

class test
{
 /**
 * Print string
 * @param string $string
 */
   public function printChild($string)
    {
        echo $string;
    }
   
/**
 * Print string 
 */   
    public function printParent()
    {
        echo 'This is parent class function';
    }
	
/**
 * concate to String
 * @param string $str1
 * @param string $str2
 */
  public function concateString($str1, $str2)
	{
	  echo $str1.$str2;//'concate to String' 
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
$ChildClass->concateString('string1', ' string2');      // Output: 'string1 string2'

?>
