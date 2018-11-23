<html>
<head><title>Temperature Conversion</title></head>
<body>
<?php $fahrenheit = $_POST['fahrenheit']; ?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
Fahrenheit temperatura:
<input type="text" name="fahrenheit" value="<?php echo $fahrenheit; ?>"/><br />
<input type="submit" value="Convert to Celsius!" />
</form>
<?php 
if (!is_null($fahrenheit)) {
//$fahrenheit = $_POST['fahrenheit'];
$celsius = ($fahrenheit - 32) * 5 / 9;
printf("%.2fF is %.2fC", $fahrenheit, $celsius);
//echo $celsius;
}
 ?>
</body>
</html>