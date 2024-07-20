<?php

namespace App\Models;

Class User {
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
      //  $this->email = $email;
    }

    public function getFullName(){
        return $this->firstName .' '. $this->lastName;
    }

    public function getFullName_dos(){
        return $this->firstName .' '. $this->lastName;
    }


}