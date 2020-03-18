<?php

class Users {
    
    private $_lastname;
    private $_firstname;
    private $_birthday;

    // NEEDED TO ADD OUR OBJECTS
    public function __construct($lastname, $firstname, $birthday) {
        $this->_lastname = $lastname;
        $this->_firstname = $firstname;
        $this->_birthday = new DateTime($birthday);
    }

    // FUNCTION TO ONLY GET AGE AS YEARS
    public function ageCalc() {
        $currentDate = new DateTime();
        $calc = $currentDate->diff($this->_birthday);
        return $calc->y;
    }

    // FUNCTION TO SHOW COMPLETE INFOS
    public function __toString() {
        return "Nom : {$this->getLastname()}<br>
              Prenom : {$this->getFirstname()}<br>
              Age : {$this->ageCalc()}<br><br>";
    }

    // FUNCTION TO GET LASTNAME
    public function getLastname() {
        return $this->_lastname;
    }

    // FUNCTION TO GET FIRSTNAME
    public function getFirstname() {
        return $this->_firstname;
    }

    // FUNCTION TO GET BIRTHDAY DATE
    public function getBirthday() {
        return $this->_birthday;
    }

}

$user1 = new Users("DUPONT", "Michel", "1980-02-19");
$user2 = new Users("DUCHEMIN", "Alice", "1985-01-17");

// $user1->showDetails();
// $user2->showDetails();

echo $user1;