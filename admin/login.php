<?php
//error_reporting(E_ALL); ini_set('display_errors', 1);

require_once "config.php";

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $statement = $conn->prepare("select `name` as name, `username` as username, `password` as password from `users` WHERE `username` LIKE :username AND `password` LIKE :password");
    $statement->execute(array(
            "username" => $username,
            "password" => $password
    ));
    $users = $statement->fetchAll();

    if (!empty($users)){
        session_start();
        $_SESSION['loginUser'] = $users[0]['name'];
        header('Location: index.php');
    } else {
        echo "Incorrect ID or Password";
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ADMIN | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">HI !</h1>

            </div>
            <h3>Welcome to Admin Page</h3>
            <p>
            </p>
            <p>Log In.....</p>
            <form class="m-t" role="form" method="post">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" name="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
