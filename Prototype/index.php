<?php

// Method 1.
echo 'Method 1' . "\n";
class ClassA
{
    public function __construct(ClassA $Prototype = null)
    {
        if (null !== $Prototype)
        {
            echo 'ClassA' . "\n";
        }
    }
}

$Prototype = new ClassA();
$NewObject = new ClassA($Prototype);


// Method 2
echo "\n" .'Method 2' . "\n";
class ClassB
{
    /**
     * This function return new object
     *
     * @return ClassB
     */
    public function getClone()
    {
        $object = new ClassB();
        //do something with object
        echo 'ClassB' . "\n";
        return $object;
    }
}
$Prototype = new ClassB();
$NewObject = $Prototype -> getClone();


// Method 3
echo "\n" . 'Method 3' . "\n";
class ClassC
{
    public function __clone()
    {
        //do something
        echo 'ClassC' . "\n";
    }
}
$Prototype = new ClassC();
$NewObject = clone $Prototype;


//Method 4
echo "\n" . 'Method 4' . "\n";
class Single
{
    public $title = 1;

    public function __clone()
    {
     echo 'this object was cloned by Prototype' . "\n";
    }
}

class SingleTwo extends Single
{
    public $title_two = 2;

    public function __clone()
    {
        echo 'this object was cloned by Prototype' . "\n";
    }
}

class Prototype
{
    public function getClone(Single $single)
    {
        return clone $single;
    }
}

$prototype = new Prototype();
$singleArray[] = $prototype->getClone(new Single());
$singleArray[] = $prototype->getClone(new SingleTwo());

var_dump($singleArray);


?>