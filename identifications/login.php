<!DOCTYPE html>

<html>

<head>
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="../resources/css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">

</head>

<body>

<div id="container">

    <div>
        <h2>LOGIN</h2>
    </div>

    <!-- Form -->
    <form method="post" action="authentication_login.php">

        <input type="email" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

        <p class="span-style">
            <span><a class="link-forget" href="#"> Forget password ? </a></span>
        </p>

        <!-- <button class="button" type="submit"><a class="link-button" href="#"> LOGIN </a></button> -->
        <input type="submit" value="Login">
        <button class="button" type="button"><a class="link-button" href="../index.php"> BACK </a></button>
    </form>

</div>

</body>

</html>