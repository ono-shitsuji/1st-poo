<?php
 //i create my 2 var
class icy {
  private string $shiver;
  private string $frost;
//i do the construct function for both with a get 
  public function __construct($shiver, $frost) {
    $this->shiver = $shiver;
    $this->frost = $frost;
    
  }
   public function setWeather(string $shiver)
    {
        $this->shiver = $shiver;
        return $this;
    }

    public function setCondition(string $frost)
    {
        $this->frost = $frost;
        return $this;
    }

  function getFreeze() {
    return $this->shiver;
  }
  function getCooler() {
    return $this->frost;
  }
  //down there i show them what i did in 3 echo
}

    $sheercold = new icy("theone", "absolutefreeze");

echo "<p>heres the weather today </p>" . $shiver ;
    
?> 


<?php

class Product3
{
    private string $title;
    private float $price;
    private int $quantity;

    public function __construct(string $title, float $price, int $quantity)
    {
        $this->title = $title;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function calculTotal()
    {
        if (self::verifValeur($this->quantity, $this->price)) {
            return $this->quantity * $this->price;
        } else {
            return "L'une des valeurs n'est pas bonne!";
        }
    }

    static function verifValeur($quantity, $price)
    {
        if (($quantity > 0) && ($price > 0)) {
            return true;
        } else {
            return false;
        }
    }

    //Les SET
    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
        return $this;
    }

    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    //LES GET

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
}

$newProduct = new Product3("carotte", 45, 1);
var_dump($newProduct);

echo "<p>" . $newProduct->getTitle() . "</p>";