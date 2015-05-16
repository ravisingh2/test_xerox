
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
	
/**
 *  return the inverse of number
 * @param int $x
 */	
	function inverse($x)
	{
		if (!$x) {
			throw new Exception('Division by zero.');
		}
		return 1/$x;
	}
}

class ChildClass extends Test
{
    
/**
 * Print string
 * @param string $string
 */
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
try {
    echo $ChildClass->inverse(5) . "\n";
    echo $ChildClass->inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
