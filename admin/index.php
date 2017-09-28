<?php
require_once "application_top.php";
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ADMIN | BayCare</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Fevicon -->
    <link rel="shortcut icon" type="image/png" sizes="20x20" href="img/001.png"/>

</head>

<body>
    <div id="wrapper">
        <?php $page="one"; include_once "sidebar.php"?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <?php include_once "header.php"?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Dashboard</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Company Dashboard</h5>
                            </div>
                            <div class="ibox-content">
                                <p> This block allows you to add new companies, also edit all their information or Top Recommendations rankings. </p>
                                <div class="text-center">
                                    <a href="add.php" class="btn btn-primary" name="submit" type="submit">Add Company</a>
                                    <a href="edit.php" class="btn btn-primary" name="submit" type="submit">Manage Company</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Users Dashboard</h5>
                            </div>
                            <div class="ibox-content">
                                <p> This block allows you to add / delete users admins for the for accessing the admin page.   </p>
                                <div class="text-center">
                                    <a href="user.php" class="btn btn-primary" name="submit" type="submit">Add User</a>
                                    <a href="userDelete.php" class="btn btn-primary" name="submit" type="submit">Manage User</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
</body>
</html>
