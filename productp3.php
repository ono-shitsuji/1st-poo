<?php 
 class product2 
{
        public string $title;

        public float $price;
        
        public int $quantity; 

        public float $total;

        public int  $sign;

    //above you have your properties and this reminder will help you in the near future perhaps you never know
    static function totalReaderOperator () : float
    {
        $this->total=  $this->quantity * $this->price;
        return $this->total;
    }
}

    //doing the next part bellow doing instances also after the new your class must be how you called before so here its product 
    $mist = new  product();
    //next i give properites to the mist
    $mist->price = 100;
    $mist->sign = "€";

    //now i do the other instance dont forget to name them just like you wrote above
    $glasgow = new product();

    $glasgow->price =20;
    $glasgow-> sign = "€";


     echo "<p> this one is an unpredictable result lets see what it bring us </p>"  . totalReaderOperator ;
    echo "<p> i now present to you once again the same thing</p>"  . $mist->price . $mist->sign . $glasgow->price . $glasgow->sign ;
?>