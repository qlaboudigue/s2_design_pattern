<?php

require 'singleton.php';
require 'factory.php';
require 'dependency_injection.php';

// Singleton
echo 'Singleton exercice : ';

$president0 = President::getInstance('Emmanuel', 'Macron');
$id0 = spl_object_id($president0);
$president1 = President::getInstance('Nicolas', 'Sarkozy');
$id1 = spl_object_id($president1);


if ($id0 == $id1) {
    echo 'Singleton works';

} else {
    echo 'Singleton not working';
}

echo '/n';

// Factory

$factory = new Factory(false);
$connector = $factory->createConnector();

// Dependency injection

$tasks = array();
$tasks[] = 'Faire les courses';
$tasks[] = 'Faire à manger';
print_r($tasks);
$toDoListFactory = new ToDoListFactory();
$toDoList = $toDoListFactory->createToDoList($tasks);