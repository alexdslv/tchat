<?php

session_start();
$_SESSION["pseudo"] = $_POST["pseudo"];
// Redirect to tchat.php
header("Location: ../tchat.php");