<?php 

class Person
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    public function fullname()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    protected function setFirstName($firstName)
    {
        $this->firstName = trim($firstName);
    }

    protected function setLastName($lastName)
    {
        $this->lastName = trim($lastName);
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getlastName()
    {
        return $this->lastName;
    }
}

class Superhero extends Person
{
    public $pseudonym;
    public $capeColor;

    public function __construct($firstName, $lastName, $pseudonym)
    {
        parent::__construct($firstName, $lastName);
        $this->pseudonym = $pseudonym;
    }

    public function fullName()
    {
        return $this->pseudonym;
    }

    public function alterEgo()
    {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

    public function hasCape()
    {
        return !empty($this->capeColor);
    }
}