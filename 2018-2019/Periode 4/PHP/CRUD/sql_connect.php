<?php
$sql = new mysqli("127.0.0.1:3306", "root", "root", "bedrijf");

session_start();

// DEBUGGING
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// GOOGLE CAPTCHA

// Site key:        6LdVC6UUAAAAAJ3oqBVpOPoLodSf3D7QrZXpLu5O
// Secret key:      6LdVC6UUAAAAAEf3uWsIa5UVR6BaD3HdC_JUw4KU

?>
