<?php

abstract class Product {
    protected $name;
    protected $price;
    protected $quantity;

    public function __construct($name, $price, $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    // Concrete methods, i.e. with implementation
    public function calculateTotal() {
        return ($this->price + $this->calculateTax()) * $this->quantity;
    }

    public function getDetails() {
       return "Name: " . $this->name . ", Price: $" . $this->price . ", Tax: $" . $this->calculateTax() . ", Quantity: " . $this->quantity . ", Total: $" . $this->calculateTotal();
    }

    // Abstract method, i.e. with no implementation 
    abstract public function calculateTax();
    abstract public function getDescription();
}

class Book extends Product {
    private $author;
    private $genre;

    public function __construct($name, $price, $quantity, $author, $genre) {
        parent::__construct($name, $price, $quantity);
        $this->author = $author;
        $this->genre = $genre;
    }

    public function getDescription() {
        return "Book author: " . $this->author . ", Genre: " . $this->genre;
    }

    // Books have a 5% tax on them
    public function calculateTax() {
        return $this->price * 0.05;
    }
}

class Electronics extends Product {
    private $brand;
    private $warrantyPeriod;

    public function __construct($name, $price, $quantity, $brand, $warrantyPeriod) {
        parent::__construct($name, $price, $quantity);
        $this->brand = $brand;
        $this->warrantyPeriod = $warrantyPeriod;
    }

    public function getDescription() {
        return "Electronics brand " . $this->brand . ", Warranty: " . $this->warrantyPeriod . " years";
    }

    // Electronics have a 15% tax on them
    public function calculateTax() {
        return $this->price * 0.15;
    }
}


// Usage example:
$book = new Book("On the Origin of Species", 15, 100, "Charles Darwin", "Scientific Literature");
echo $book->getDetails(); 
// Output: Name: On the Origin of Species, Price: $15, Tax: $0.75, Quantity: 100, Total: $1575
echo $book->getDescription(); 
// Output: Book author: Charles Darwin, Genre: Scientific Literature

$electronics = new Electronics("iPhone15", 1100, 50, "Apple", 2);
echo $electronics->getDetails(); 
// Output: Name: iPhone15, Price: $1100, Tax: $165, Quantity: 50, Total: $63250
echo $electronics->getDescription(); 
// Output: Electronics brand Apple, Warranty: 2 years
