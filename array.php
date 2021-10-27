<?php

class Item
{

    // PROPERTY
    private $label;

    // CONSTRUCTOR
    public function __construct($label)
    {
        $this->label = $label;
    }

    public function __toString()
    {
        return $this->label;
    }


}

$item1 = new Item('One');
$item2 = new Item('Two');
$item3 = new Item('Three');
$items = array();
$items[] = $item1;
$items[] = $item2;
$items[] = $item3;
print_r($items);

$list = array();
$list[] = 'string 1';
$list[] = 'string 2';
$list[] = 'string 3';
echo $list[1];

