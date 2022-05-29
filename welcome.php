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
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" type="text/css" href="welcome.css">
</head>
<body>
    <form method="POST">
        <input type="submit" value="log out" name="logOut">
    </form>
</body>
</html>
<?php
$nick = $_SESSION["nick"];
echo "<div id='welcome'>". "<h1><span style='color:blue;'>PAC</span><span style='color:yellow;'>MAN</span>".  "</div>";
//dokończyć
    if(isset($_POST["logOut"]))
    {
        $_SESSION["zalogowany"] = false;
        header("location: login.php");
    }
?>