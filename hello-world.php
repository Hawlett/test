<html><body>
<?php
session_start();
$_SESSION['pag'] = $_SESSION['pag'] + 1;
echo "This page has been viewed {$_SESSION['pag']} times.";
//echo session_id();

$authOK = false;

$user = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];
if (isset($user) && isset($password) && $user === strrev($password)) {
$authOK = true;
}
if (!$authOK) {
header('WWW-Authenticate: Basic realm="Top Secret Files"');
header('HTTP/1.0 401 Unauthorized');
// anything else printed here is only seen if the client hits "Cancel"
exit;
}
echo 'Hello world from Cloud9!';

?>
</body>
</html>