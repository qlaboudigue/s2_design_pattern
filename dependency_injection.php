<?php

class ToDoList {

    // Properties
    public $cards;

    // Constructor
    public function __construct($cards)
    {
        $this->cards = $cards;
        /**
         * Instead of:
         * $this->card = new Card($label);
         */
    }

    // Method
    public function getCard() 
    {
        return 'Card';
    }


}


class Card {

    public $label = " ";
    public $isChecked = false;

    public function __construct($label)
    {
        $this->label = $label;
    }

    public function __toString()
    {
        return $this->label;
    }


}

class ToDoListFactory {

    public function createToDoList($tasks) {

        $cards = array();

        for($i=0;$i<count($tasks);$i++){
        // Instanciate cards list
         $card = new Card($tasks[$i]);
        // Add instance to $cards
            $cards[] = $card;
        }
       
        
        
        // Instanciate to do list
        echo 'To do list created';
        return new ToDoList($cards);

    }

}


