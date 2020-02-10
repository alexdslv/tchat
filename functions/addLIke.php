<?php
// Connect database
require("database.php");

$id = intval($_GET["id"]);
// INSERT prepare
$req = $db->prepare("SELECT likes FROM users_messages WHERE id = :id");
// bindParam
$req->bindParam(":id", $id);
// execute
$req->execute();

$nbLikes =  $req->fetch();

$nbLikes  = intval($nbLikes[0]) + 1;

$req2 = $db->prepare("UPDATE users_messages SET likes = :likes WHERE id = :id");
$req2->bindParam(":likes", $nbLikes);
$req2->bindParam(":id", $id);
$req2->execute();

header("Location: ../tchat.php");