<?php
class Product
{
    private $id;
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description = "")
    {
        $this->id = uniqid();
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        if ($price > 3500) {
            return;
        }

        $this->price = $price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

}

?>