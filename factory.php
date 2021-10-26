<?php

abstract class Creator
{

    abstract public function factoryMethod(): Product;

    public function someOperation(): string
    {
        // Call the factory method to create a Product object.
        $product = $this->factoryMethod();
        // Now, use the product.
        $result = "Creator: The same creator's code has just worked with " .
            $product->operation();

        return $result;
    }
}


class ConcreteCreatorOne extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProductOne();
    }
}

class ConcreteCreatorTwo extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProductTwo();
    }
}

interface Product
{
    public function operation(): string;
}


class ConcreteProductOne implements Product
{

    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
    
}


class ConcreteProductTwo implements Product
{

    public function operation(): string
    {   
        return "{Result of the ConcreteProduct2}";
    }

}



/// Exercice

/// "Products"

interface Connector
{
    public function connectToBDD(): string;
}

class PostGreConnector implements Connector
{

    // PROPERTIES
    private $connection_string = "localhost";

    // CONSTRUCTOR
    public function __construct() {
        echo 'Post Gre created';
    }

    // METHODS
    public function connectToBDD(): string {
        $conn = pg_connect($this -> _connection_string);
        if (!$conn) {
            return "GRE Connection failed";
        }
        return "GRE Connected successfully";
    }
}

class SqlConnector implements Connector
{

    // PROPERTIES
    private $server = "localhost";
    private $username = "username";
    private $password = "password";

    // CONSTRUCTOR
    public function __construct($server, $username, $password) {
        $this -> _server = $server;
        $this -> _username = $username;
        $this -> _password = $password;
        echo 'SQL created';
    }

    // METHODS
    public function connectToBDD(): string
    {
        $conn = mysqli_connect(
            $this -> _server = ini_get("mysql.default_host"),
            $this -> _username = ini_get("mysql.default_user"),
            $this -> _password = ini_get("mysql.default_password"),
        );

        // Check connection
        if (!$conn) {
            return "SQL Connection failed";
        }
            return  "SQL Connected successfully";

    }
    
}

class Factory 
{

    // PROPERTY
    private bool $type;

    // CONSTRUCTOR
    public function __construct($type)
    {
        $this->type = $type;
    }

    // METHOD
    public function createConnector(): Connector
    {
        if ($this->type) {
            return new PostGreConnector();
        }
        return new SqlConnector(" ", " ", " ");
    }

}