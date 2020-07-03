<?php
//----------------------// Start session----------------------
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//------------------------------------------------------------

$URL = $_SESSION['Migration'];
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="0; url=<?= $URL ?>" />
</head>
<body>
</body>
</html>