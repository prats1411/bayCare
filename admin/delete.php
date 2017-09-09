<?php
require_once "application_top.php";

$statement = $conn->prepare("select `id` as id, `name` as name, `username` as username, `email` as email from `users`");
$statement->execute();
$users = $statement->fetchAll();


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
    <link href="css/bootstrap-toggle.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">

</head>

<body>

<div id="wrapper">
    <?php $page = 'four'; include_once "sidebar.php"?>
    <div id="page-wrapper" class="gray-bg">
        <?php include_once "header.php"?>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Delete User</h2>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Following are the active users.</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th data-breakpoints="xs">Username</th>
                                        <th data-breakpoints="xs sm md">Email-id</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($users as $user): ?>
                                    <tr data-expanded="true">
                                        <td><?php echo $user['name']; ?></td>
                                        <td><?php echo $user['username']; ?></td>
                                        <td><?php echo $user['email']; ?></td>
                                        <td><a href="userDelete.php?id=<?php echo $user['id']; ?>"><i class="fa fa-2x fa-trash"></i></a></td>
                                    </tr>
                                    <?php endforeach; ?>
<!--                                    <script>-->
<!--                                        $('#delete-button').click(function() {-->
<!---->
<!--                                            $.ajax({-->
<!--                                                type: "POST",-->
<!--                                                url: "deleteUser.php",-->
<!--                                                data: { name: "John" }-->
<!--                                            }).done(function( msg ) {-->
<!--                                                alert( "Data Saved: " + msg );-->
<!--                                            });-->
<!---->
<!--                                        });-->
<!--                                    </script>-->
                                    </tbody>
                                </table>
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

<!-- Chosen -->
<script src="js/plugins/chosen/chosen.jquery.js"></script>
<!-- Switchery -->
<script src="js/plugins/switchery/switchery.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>


<script>

</script>

</body>
</html>
