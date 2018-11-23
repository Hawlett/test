<html>
<head>
<link rel="stylesheet" type="text/css" href="tabellaForma.css">
</head>
<body>


<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // creo una funzione per mostrare il contenuto di una tabella definendo db e tabella
   
function mostratabella($servername,$username,$password,$database,$dbport,$tabella){
  //  $servername = "127.0.0.1";
 //    $username = "hawlett74";//getenv('C9_USER');
 //   $password = "";
 //   $database = "c9";
 //   $dbport = 3306;
 //   $tabella = "uno";
    // Create connection
     $connection = mysqli_connect($servername, $username, $password, $database, $dbport) or die(mysql_error());
    
    //prima riga intestazione
    
    $testasql ="SHOW COLUMNS FROM $tabella";
    $testares = mysqli_query($connection, $testasql);
    $a=0;
    while ($testa =mysqli_fetch_assoc($testares)){
        $colonna[$a] = $testa['Field'];
        $a++;
    }
    //quello sopra al posto di queste 3 righe sotto ma piu completo
    //infatti prende le intestazioni direttmente dalla tabella sql
//    $colonna[0] = "ciccio";
//    $colonna[1] = "caio";
//    $colonna[2] = "numero";
    
    // la query sql
    $query = "SELECT * FROM $tabella";
    
    // metti i risultati su un array
    $result = mysqli_query($connection, $query);
    ?>
    <br>
    <p id="intesta">Stampa Tabella <?php echo $tabella ?> </p>
    </br>
    <CENTER>
    <table id="customers">
        <tr> 
             <?php for($i=0;$i<$a;$i++) { //la va $a gia sa quanti campi ci sono?>
             <th> <?php echo $colonna[$i]; ?> </th>
             <?php } ?>
        </tr>
    <?php
    // scrivi ogni riga
    while ($row = mysqli_fetch_assoc($result)) {
   
    ?>
        <tr>
             <?php for($i=0;$i<$a;$i++) { ?>
             <td> <?php echo $row[$colonna[$i]]; ?></td>
             <?php } ?>
        </tr>
    
    <?php
    
}
    //chiudo connessione db
    mysqli_close($connection);
   ?>
   </table>
</CENTER>
<?php 
    } 
 
// mostratabella("127.0.0.1","hawlett74","","c9",3306,"uno");    
    
    
?>
</body>

    
</html>
