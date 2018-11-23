<?php
header("Content-type: text/xml");
$user = 'hawlett74';
$password = '';
$db = 'c9';
$host = 'localhost';
$port = 3306;
$conn = new PDO("mysql:host=$host; dbname=$db; port=$port", $user, $password);
$xml = new SimpleXMLElement('<users/>');
$stmt = $conn->query("SELECT * FROM uno");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $user = $xml->addChild('uno');
 
    foreach ($row as $key => $value) {
    $user->addChild($key, $value);
    }
}
 
echo $xml->asXML();
?>