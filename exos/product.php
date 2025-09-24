<?php 
 class product 
{
        public string $title;

        public float $price;
        
        public int $quantity; 

        public float $total;

    //above you have your properties and this reminder will help you in the near future perhaps you never know
    public function totalReaderOperator () : float
    {
        $this->total=  $this->quantity * $this->price;
        return $this->total;
    }
}

    //doing the next part bellow doing instances also after the new your class must be how you called before so here its product 
    $mist = new  product();
    //next i give properites to the mist
    $mist->price = 100;
    $mist->title = "£";

    //now i do the other instance dont forget to name them just like you wrote above
    $glasgow = new product();

    $glasgow->price =20;
    $glasgow-> title = "£";


    echo "<p> i now present to you my items</p>"  . $mist->price . $mist->title . $glasgow->price . $glasgow->title ;
?>