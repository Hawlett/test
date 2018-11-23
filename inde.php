<!doctype html>
<html> <head>
<title>This is my first test PHP program!</title> </head>
<body>
<p>
<?php
 class Persona
 {
     public $nome = 'dddd';
     function nom ($nuovonome)
     {
         if(!is_null($nuovonome))
         {
             $this->nome = $nuovonome;
         }
         return $this->nome; //va a riempire la variabile $re sotto
     }
     
 }
 class uno
{
   public $contatore = 10;
    function due()
    {
        $this->contatore++;
    }
    //return this->due;

}

 $ed= new Persona;
 $re= $ed->nom(pippo);
 $con= new uno;
 $con->due();
 
  for ($i = 0; $i < 10; $i++) { ?> <STRONG> <?php
      echo "ciao $re $con->contatore $i ";?></STRONG> <br /> <?php
}

function conta(){
   static $conto=0; //con static la variabile si inizializza solo la prima volta che viene chiamata la funzione (tutte le altre volte non viene calcolata)
  return $conto++;
}
  for($i=1;$i <=5; $i++){
   //echo $i;  
   echo conta();
  }
  ?> <br /> <?php
  for($i=1;$i <=5; $i++){
   echo conta();  
   //echo conta();
  }
  
  function modifica_i_parametri (&$p1, &$p2) //valori passati per riferimento
{
  $p1 = 10;
  $p2 *= $p1;
  
  //return $p1;
  
}
 
/* variabili da modificare */
 
$a = 5;
$b = 7;
 
/* Chiama una funzione che tenta di modificare
   i parametri ma $a e $b rimangono uguali anche dopo
   la chiamata perché il passaggio è per valore  */
  ?> <br /> <?php
echo modifica_i_parametri ($a, $b);
echo $a." ".$b;?> <br /> 
<?php

$ciccio = array("grosso", "alto", "roma");
function &Cercauno($n){ //& per alias
 global $ciccio; // x vedere la variabile esterna
 return $ciccio[$n];
}
  $persona =& Cercauno(1); //con =& crei un alias cosi cambi anche l'array $ciccio[1]
  echo $persona; ?> <br /> <?php
  $persona = "basso";
  echo $ciccio[1];
  
 printf("ciao %d caratteri %d", 1,2);
 ?> <br /> <?php
  ///scomporre striga
  $inputto = "Marco,44,Roma";
  $campi = explode(',',$inputto);
  for($i=0;$i<3;$i++){
      echo "<strong>$campi[$i]</strong><br />";
 
  }
  $token =strtok($inputto, ",");  ///scomporre striga
  while ($token !== false){
      echo "$token<br />" ;
      $token = strtok(",");
  }
  
  $numerociccio= count($ciccio); //conta elementi array
  echo "$numerociccio <br />";
  
  $row0 =array(1,2,3,11);
  $row1 =array(4,5,6,12);
  $row2 = array(7,8,9,13);
  $mulyi = array($row0,$row1,$row2);
  echo "ddd e". $mulyi[1][3]."<br/>";
  
  list($uno,$due,$tre) =$row0; // estrai valori array in varabili
  echo $uno. " " .$due. " ". $tre."<br/>";
  list($due_i,$tre_i) =array_slice($row0,1,2); //solo 2 valori (il secondo e il terzo)
  echo $due_i. " ". $tre_i;
  
  
  foreach ($ciccio as $value){ //per ciascun elemento dell'array ciccio
   echo ("<tr><td>{$value}</tr><td> <br/>");
  }
  
 function printRow($valore,$kiave){
   echo("<tr><td> {$kiave} </td>");
    echo("<td> {$valore} </td></tr>");
   
  }
  $person = array('nome' => "Fred", 'eta' => 35, 'sposa'=>"wilma");
  echo "<table border=1>";
  array_walk($person,"printRow");
  echo "</table>";  
  
  $numeozero=0;
  
  echo "<table border=1>";
  echo  "<th>Nome</th>";
echo  "<th>Lastname</th>";
echo  "<th>Age</th>";
echo "<tr> </tr>";
  foreach($person as $nom => $fatto){
  echo ("<td> {$fatto} </td>");
 }
  echo "</table>";
 
 
 $array = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19);
//contiamo i valori dell'array (un pò come il tuo 20)
$numero = count($array);
$valueso = array_keys($person);
//stampiano la tabella
echo "<table border= 1>\n";

echo  "<th>{$valueso[0]}</th>";
echo  "<th>{$valueso[1]}</th>";
echo  "<th>{$valueso[2]}</th>";
  
for ($i = 0; $i <= $numero - 1; $i++)
{
$f=0;
//numero delle colonne
if($f==3){
echo " <tr>\n";
echo " </tr>\n";
}
$f++;


//stampa dei valori
echo " <td>" . $array[$i] . "</td>\n";
$col++;
}
echo "</table>\n"; 

class MyClass {
        // proprietà statiche
        public $apples = 10;
        static $pineapples = 20;
}
 echo MyClass::$pineapples;
 $g= new Myclass();
 echo $g->apples;
?>

</p>
</body>
</html>