
<!-- // Backend opdracht Blue Mammoth -->
<?php
// Maak een mammoet class
// oop variation 
class Mammoet {
    //setting the variables publicly while defining it with string
    public $sleep = "sleeping";
    public $play = "playing";
    public $eat = "eating";

    // calling a public function construct 
    public function __construct(){
        echo $this->sleep . "<br>";
        echo $this->play . "<br>"; 
        echo $this->eat . "<br>"; 
    }
}
    $obj = new Mammoet();
?>
 <html>
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <!-- bar were you can type on -->
     <input type="text" name="name">
     <!-- button to submit -->
     <input type="submit" value="submit" name="submit">
     <br>
    <div>
<?php    
       
            if (isset($_POST['submit'])) {
                echo $_POST['name'];
          }
        
//returning the class
?>
</div>
</body>
</html>
<!-- // 
// Bij het aanmaken van een mammoet moet je een naam kunnen geven. De naam kan daarna niet meer veranderd worden.
//
// Een mammoet kan slapen, spelen en eten.
// Als een mammoet slaapt gaat zijn energie en honger omhoog.
// Als een mammoet speelt gaat zijn humeur omhoog en zijn energie naar beneden.
// Als een mammoet eet gaat zijn honger omlaag en zijn humeur omhoog.
//
// Als een mammoet geen energie heeft of teveel honger heeft gaat hij dood.
// Als een mammoet dood is kan er niks meer gebeuren als je hem wilt laten slapen, spelen of eten.
// 
// Er moet makkelijk kunnen worden gezien wat voor eigenschappen een mammoet heeft na elke actie.
//
// Je hoeft niks visueels te maken.
//
// Tips
// Vergeet niet je code te documenteren
// Alle code moet in het engels zijn
//
// Bonuspunten (Niet vereist)
// Je code laten test door middel van unit testing -->
