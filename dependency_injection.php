<?php

class ToDoList {

    // Properties
    public $card;

    // Constructor
    public function __construct($card)
    {
        $this->card = $card;
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

    public function getLabel() {
        return $this->label;
    }

}

class ToDoListFactory {

    public function createToDoList($label) {

        // $cards = [];
        /**
         * for($i=0;$i<=count($tasks);$i++){
            * Instanciate cards list
           * $card = new Card($tasks[$i]);
          *  // Add instance to $cards
         *   $cards[] = $card;
         * }
         * 
         */
        
        
        // Instanciate to do list
        echo 'To do list created';
        return new ToDoList($label);

    }

}


