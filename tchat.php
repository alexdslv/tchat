<?php
session_start();

if(!isset($_SESSION["pseudo"])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body>
    
    <nav>
        <a href="functions/disconectAction.php">✘</a>
    </nav>

    <div class="messages">
        <?php
        require("functions/database.php");
        $req = $db->prepare("SELECT * FROM users-messages");
        $req->execute();

        while($result = $req->fetch(PDO::FETCH_ASSOC)){
            ?>
            <div class="message">
                <strong><?=$result["pseudo"]?></strong>
                <span><?=$result["message"]?></span>
                <a href="">like</a>
            </div>
            <?php
        }
        ?>
    </div>

    <?php
    // Connect database
    require("functions/database.php");
    // INSERT prepare
    $req = $db->prepare("SELECT * FROM users_messages");
    // execute
    $req->execute();

    while ($result = $req->fetch(PDO::FETCH_ASSOC)){
    ?>
        <div class="message">
            <strong><?= $result["pseudo"] ?>:</strong>
            <span><?= $result["message"] ?></span>
            <span>(<?= $result["likes"] ?>)</span>
            <a class="addlLike" data-id="<?= $result["id"] ?>" href="functions/addLikes.php?id=<?= $result["id"] ?>">Like</a>
        </div>
    <?php
    }
    ?>

    <form action="functions/setMessage.php" class="tchatForm" method="post">
        <textarea name="message"></textarea>
        <input type="submit" value="Envoyer">
    </form>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>
</html>
