<?php
session_start();
    $_SESSION["zalogowany"]?"":header("location: login.php");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="icon" href="images/player_right.png">
    <link rel="stylesheet" type="text/css" href="welcome.css">
</head>
<body>
    <form method="POST">
        <input type="submit" value="Log out" name="logOut" id="logOut">
    </form>
    <a href="levels.php"><button class="btn" id="play">Play</button></a>
    <button class="btn" id="settings" title="Coming soon">Settings</button>
    <button class="btn" id="info">Info</button>
    <script src="animation.js"></script>
</body>
</html>
<?php
$nick = $_SESSION["nick"];
echo "<div id='welcome'>". "<h1><span style='color:blue;'>PAC</span><span style='color:yellow;'>MAN</span></br>". "<span style='font-size:30px; color: white;'>Welcome ". $nick. "!</span>".  "</div>";
    if(isset($_POST["logOut"]))
    {
        $_SESSION["zalogowany"] = false;
        header("location: login.php");
    }
?>