<?php


interface Building
{

}

class House implements Building
{
    public $numBuilding;
    public $numApartments;
    public $numFloors;


    public function getNumApartments()
    {
        return $this->numApartments;
    }

    public function setNumApartments($numApartments)
    {
        $this->numApartments = $numApartments;
    }

    public function getNumBuilding()
    {
        return $this->numBuilding;
    }

    public function setNumBuilding($numBuilding)
    {
        $this->numBuilding = $numBuilding;
    }

    public function getNumFloors()
    {
        return $this->numFloors;
    }

    public function setNumFloors($numFloors)
    {
        $this->numFloors = $numFloors;
    }
}
abstract class Animal
{
    public $name;
    public $say;
    public $feed;


    public abstract function getName();

    public abstract function getSay();

    public abstract function getFeed();

}

class Cat extends Animal
{
    public  function getName()
    {

    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public  function getSay()
    {

    }

    public function setSay($say)
    {
        $this->say = $say;
    }

    public function getFeed()
    {

    }

    public function setFeed($feed)
    {
        $this->feed = $feed;
    }
}

class Dog extends Animal
{
    public  function getName()
    {

    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public  function getSay()
    {

    }

    public function setSay($say)
    {
        $this->say = $say;
    }

    public function getFeed()
    {

    }

    public function setFeed($feed)
    {
        $this->feed = $feed;
    }
}

class Cow extends Animal
{
    public  function getName()
    {

    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public  function getSay()
    {

    }

    public function setSay($say)
    {
        $this->say = $say;
    }

    public function getFeed()
    {

    }

    public function setFeed($feed)
    {
        $this->feed = $feed;
    }
}
abstract class Publication {

    private $workers;

    protected function getWorkers()
    {
        return $this->workers;
    }

    protected function setWorkers($workers)
    {
        $this->workers = $workers;
    }
    abstract public function do_print();
}

class News extends Publication {

    public function do_print() {
        echo '<h4>Новость</h4>';
    }
}
class Announcement extends Publication {
    public function do_print() {
        echo '<h4>Объявление</h4>';
    }
}
class Article extends Publication {

    public function do_print() {
        echo '<h4>Статья</h4>';
    }
}

$publications[] = new News();
$publications[] = new Announcement();
$publications[] = new Article();

foreach ($publications as $publication) {
    if ($publication instanceof Publication) {
        $publication->do_print();
    }
    else {
        echo 'Error';
    }
}
class Calculator
{
    public $addition = 5+5;
    public $subtraction;
    public $multiplication;
    public $division;
    public $exponentiation;
    public $rootExtraction;

    public function getAddition()
    {
        return $this->addition;
    }

    public function getDivision()
    {
        return $this->division;
    }

    public function getExponentiation()
    {
        return $this->exponentiation;
    }

    public function getMultiplication()
    {
        return $this->multiplication;
    }

    public function getRootExtraction()
    {
        return $this->rootExtraction;
    }

    public function getSubtraction()
    {
        return $this->subtraction;
    }

    public function setAddition($addition)
    {
        $this->addition = $addition;
    }

    public function setDivision($division)
    {
        $this->division = $division;
    }

    public function setExponentiation($exponentiation)
    {
        $this->exponentiation = $exponentiation;
    }

    public function setMultiplication($multiplication)
    {
        $this->multiplication = $multiplication;
    }

    public function setRootExtraction($rootExtraction)
    {
        $this->rootExtraction = $rootExtraction;
    }

    public function setSubtraction($subtraction)
    {
        $this->subtraction = $subtraction;
    }

}
$result = new Calculator();
$result->setAddition(5+5);
echo $result->getAddition() . '<br>';
$result->setSubtraction(10-1);
echo $result->getSubtraction() . '<br>';
$result->setMultiplication(5*5);
echo $result->getMultiplication() . '<br>';
$result->setDivision(100/5);
echo $result->getDivision() . '<br>';
$result->setExponentiation(pow(5,2));
echo $result->getExponentiation() . '<br>';
$result->setRootExtraction(sqrt(9));
echo $result->getRootExtraction();

