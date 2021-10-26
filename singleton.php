<?php

class President {

    // PROPERTY
    private static $_instance = null;
    private $_firstName = '';
    private $_lastName = '';

    // CONSTRUCTOR
    private function _construct($firstName, $lastName) {
        $this -> _firstName = $firstName;
        $this -> _lastName = $lastName;
    }

    // GETTERS
    public function getFirstName() {
        return $this->_firstName;
    }

    public function getLastName() {
        return $this -> _lastName;
    }

    // SETTERS


    // METHODS
    public static function getInstance($firstName, $lastName) {

        if (is_null(self::$_instance)) {
            self::$_instance = new President($firstName, $lastName);
        }

        return self::$_instance;

    }

    public function __toString() {
 
        return $this->getFirstName() .' '. strtoupper($this->getLastName());
      }


}

