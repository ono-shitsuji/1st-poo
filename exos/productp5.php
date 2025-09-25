<?php

  //  class Coworker {
   // public string $lastname;
   // public string  $job;
  // public int  $salary = 500; 
    
    
    // function __construct(string $lastname, string $job , string $salary);
    

     //function __toString(string $lastname, string $job , string $salary);
    // {
    //    return "lastname : $this->$lastname, job : $this->job, as for salary heres the data $this->salary.";
    // }

   // $worker1 = new Coworker ('identity' , 'workfield')

   // public function __clone() {
  //  $this->workfield= "workforce1";
  //  }

   // public function __clone() {
    //    $this->salary= "1000";
   // }

   // public function extra()
   // {
       // $this->salary += 10%;
   // }

   // echo"<pre>";
   // var_dump($worker1);
   // echo"<pre>";



class Coworker
{
    private string $nom;
    private string $poste;
    private int $salaire;

    public function __construct(string $nom, string $poste, int $salaire)
    {
        $this->nom = $nom;
        $this->poste = $poste;
        $this->salaire = $salaire;
    }

    public function __toString()
    {
        return "nom: $this->nom, poste: $this->poste, et le salaire est $this->salaire.";
    }

    public function __clone()
    {
        $this->salaire *= 1.1;
    }
}

$kevin = new Employer('kevin', 'Développeur', 5000);
echo "<pre>";
var_dump($kevin);
echo "</pre>";

$ilyes = clone $kevin;
echo "<pre>";
var_dump($ilyes);
echo "</pre>";