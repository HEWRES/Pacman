<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <img src="pacman1.png" id="pacman1">
    <img src="pacman2.png" id="pacman2">
    <div id="main">
        <h1 id="h1">Login Here</h1>
        <form method="POST">
            <p id="txt">Login</p>
            <input type="text" placeholder="Enter your login here" name="login" id="login">
            <p id="txt">Password</p>
            <input type="password" placeholder="Enter your password here" name="password" id="password">
            <input type="submit" value="Login" id="btn">
        </form>
    </div>
</body>
</html>