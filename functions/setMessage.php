<?php
session_start();
// Connect database
require("database.php");
// INSERT prepare
$req = $db->prepare("INSERT INTO users_messages (pseudo, message) VALUES (:pseudo, :message)");
// bindParam
$req->bindParam(":pseudo", $_SESSION["pseudo"]);
$req->bindParam(":message", $_POST["message"]);
// execute
$req->execute();
// Redirect to tchat.php
header("Location: ../tchat.php");