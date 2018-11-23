<?php
header("Content-type: text/xml"); //NECESSARIO!!!!
   
function mostratabellaXML($servername,$username,$password,$database,$dbport,$tabella){
 
    $connection = mysqli_connect($servername, $username, $password, $database, $dbport) or die(mysql_error());

    $xml = new SimpleXMLElement('<tabella/>');
    
    $query = "SELECT * FROM $tabella";
    
    $result = mysqli_query($connection, $query);
    
    while ($row = mysqli_fetch_assoc($result)) {
        $user = $xml->addChild($tabella); 
        foreach ($row as $key => $value) {
            $user->addChild($key, $value);
        }
    }
    echo $xml->asXML();
   
    mysqli_close($connection);
  } 
 
mostratabellaXML("127.0.0.1","hawlett74","","c9",3306,"due");    
    
?>