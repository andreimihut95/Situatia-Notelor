<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: Autentificare"); // Redirecting To Home Page
}
?>