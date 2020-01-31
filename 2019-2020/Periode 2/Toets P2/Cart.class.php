<?php
class Product
{
    private $name;
    private $price;

    // Bullet 1
    // Defineren van een Array, mag volgens PHP documentatie
    private $products = array();

    function __construct($name, $price_in_eurocents)
    {
        $this->name = $name;
        $this->price = $price_in_eurocents;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    // Bullet 2
    public function addProduct($name, $price_in_eurocents)
    {
        // Product toevoegen aan Array
        array_push($this->products, $name);

        // Price van het product optellen in bestaande variable
        $this->price += $price_in_eurocents;
    }

    // Bullet 3
    public function getAllProducts()
    {
        return $this->products;
    }

    // Bullet 4
    public function getPriceTotal()
    {
        return $this->price;
    }
}

// Onderstaande code is alleen voor testen gebruikt
/*
$product = new Product(null, null);

$product->addProduct("Bananen", 0.99);
$product->addProduct("Appel", 1.00);
$product->addProduct("Kiwi", 6);

var_dump($product->getAllProducts());
var_dump($product->getPriceTotal());
*/

?>
