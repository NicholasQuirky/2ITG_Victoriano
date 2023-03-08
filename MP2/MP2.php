<?php

class NameOfClass
{
    private $studentNumber;
    private $school;

    public function setSN($studentNumber)
    {
        return $this->studentNumber = $studentNumber;
    }

    public function setSchool($school)
    {
        return $this->school = $school;
    }


    public function getSN()
    {
        return $this->studentNumber;
    }

    public function getSchool()
    {
        return $this->school;
    }


    public function displayInfo()
    {
        echo $this->getSN()." goes to school at ".$this->getSchool()."<br>";
    }    
}

class NameOfChild extends NameOfClass
{

    function __construct(private $section)
    {
    }

    public function getSection()
    {
        return $this->section;
    }

    public function printInfo()
    {
        echo $this->getSN()." belongs to the section of ".$this->getSection()."<br>";
    }

    //overriding displayInfo
    public function displayInfo()
    {
        echo $this->getSection()." has a student number that contains ".$this->getSN()."<br>";
    }

    //overloaded printInfo
    public function printInfoOverloaded($year)
    {
        echo $this->getSection()." is a 2nd ".$year."<br>";
    }
}

//multilevel inheritance
class CourseOfStudent extends NameOfChild
{
    private $course;

    public function setCourse($course)
    {
        return $this->course = $course;
    }

    public function getSN()
    {
        return $this->course;
    }
}

//hierarchical inheritance
class CollegeOfStudent extends NameOfClass
{
    private $college;

    public function setCollege($college)
    {
        return $this->college = $college;
    }

    public function getSN()
    {
        return $this->college;
    }
}

//testing the parent class
$test = new NameOfClass();
$test -> setSN(20230307);
$test -> setSchool("MIT");
$test -> displayInfo();

//testing the child inheritance
$test2 = new NameOfChild("2ITF");
$test2 -> setSN(2019214124);
$test2 -> printInfo();
$test2 -> displayInfo();
$test2 -> printInfoOverloaded("year");

//object 1
$object1 = new NameOfClass();
$object1 -> setSN(2021148105);
$object1 -> setSchool("UST");
$object1 -> displayInfo();

//object 2
$object2 = new NameOfChild("2ITG");
$object2 -> setSN(202212414);
$object2 -> printInfo();
$object2 -> displayInfo();
$object2 -> printInfoOverloaded("year");

//object 3
$object3 = new NameOfClass();
$object3 -> setSN(2020145102);
$object3 -> setSchool("ADMU");
$object3 -> displayInfo();

?>