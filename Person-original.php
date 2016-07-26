<?php


class Person
{

    //if I make these private, I can only update
    //these properties from within the class
    //say by a getter or a setter
    private $name;
    private $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if($age < 18)
        {
            throw new Exception("Person is not old enough.");
        }

        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$john = new Person('John Doe');
$john->setAge(18);

//making the variables private illiminates the ability to do this
$john->age = 10;

var_dump($john->getAge());