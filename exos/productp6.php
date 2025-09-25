<?php

class Productbrandnew
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

$newProduct = new Productbrandnew("carotte", 45, 1);
var_dump($newProduct);

echo "<p>" . $newProduct->getTitle() . "</p>";
?>


<?php
class Belonging 
    {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$sample = new Belonging("table");
echo $sample->get_name();
?>


<?php
class clothing  
    {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$clothes = new clothing("size");
echo $clothes->get_name();
?>

<?php
var_dump($sample instanceof Belonging);
echo"<br>";
var_dump($clothes instanceof Clothing);
?>
    
    <?php

abstract class Product4
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

class Meuble extends Product4
{
    private string $couleur;

    public function setCouleur(string $value)
    {
        $this->couleur = $value;
        return $this;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }
}

class Vetement extends Product4
{
    private string $taille;

    public function setTaille($valeur)
    {
        $this->taille = $valeur;
        return $this->taille;
    }

    public function getTaille()
    {
        return $this->taille;
    }
}

$commode = new Meuble('Commode', 65, 2);
$commode->setCouleur('rose');

echo "<pre>";
var_dump($commode);
echo "</pre>";


$robe = new Vetement('Robe', 120, 1);
$robe->setTaille('s');

echo "<pre>";
var_dump($robe);
echo "</pre>";