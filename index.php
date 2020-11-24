<?php
include 'PrvaKlasa.php';
header('Content-type: text/html; charset=utf-8');
session_start();
?>
<html>
<head>
    <title>PHP I</title>
</head>
<body>
<?php

if(isset($_SESSION["username"]))
{
    echo "Logovani ste kao ".$_SESSION['username'];
    echo "<a href=\"/ITP/logout.php\">Odjavi se</a>";
}
else
{
    echo "Niste logovani";
    echo "<a href=\"/ITP/forma.html\">Prijavi se</a>";
}

?>


</body>
</html>