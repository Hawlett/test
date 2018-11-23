<?php
 
  require "connessioneDB.php"; //o include
  
  ?>
</head>
  
<body>
	<div style = "font-family: arial, 'sans serif'; width: 450px; margin: 10px auto; border: 3px solid Tomato; padding: 10px">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  			<label>Scegli la tabella da visualizzare</label><br/>
			<input type="radio" name="tabellina" value="uno" checked >Tabella uno<br/>
			<input type="radio" name="tabellina" value="due" >Tabella due<br/>
			<br/>
			<input type="submit" name="invia" value="Stampa" />
<?php
 if ($_POST[tabellina] =="uno"){
 mostratabella("127.0.0.1","hawlett74","","c9",3306,"uno");
 }
 elseif ($_POST[tabellina] =="due"){
  mostratabella("127.0.0.1","hawlett74","","c9",3306,"due");
 }
?>
    </div>

</body>
  