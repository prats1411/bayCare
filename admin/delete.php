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
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Fevicon -->
    <link rel="shortcut icon" type="image/png" sizes="20x20" href="img/001.png"/>

</head>

<body>

<div id="wrapper">
    <?php $page = 'four'; include_once "sidebar.php"?>
    <div id="page-wrapper" class="gray-bg">
        <?php include_once "header.php"?>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>ユーザー削除</h2>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>ご登録済みユーザー</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>お名前</th>
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
                                        <td><span type="button" class="delete-button" data-toggle="modal" data-target="#confirm" data-hidden="<?php echo $user['id']; ?>"><i class="fa fa-2x fa-trash"></i></span></td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <div id="confirm" class="modal animate fade-in-right">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h3>Are you sure you want to delete this user?</h3>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                                                <a id="abc" class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
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

<!-- toaster -->
<script src="js/plugins/toastr/toastr.min.js"></script>


<script>
    $(document).on('click', ".delete-button", function (event) {
        var button = $(event.relatedTarget);
        var hiddenVal = $(this).data('hidden');
        var link = document.getElementById("abc");
        var link2 = "userDelete.php?id=" + hiddenVal;
        link.setAttribute("href", link2);
    })
</script>

<?php
if ($_GET['message'] == 1){
    echo "<script>
                        operatorDeleted();
                    function operatorDeleted (){
                        setTimeout(function() {
                        toastr.options = {
                            closeButton: true,
                            progressBar: true,
                            showMethod: 'slideDown',
                            timeOut: 6000
                        };
                        toastr.error('ユーザーが削除されました');
                    }, 1300);
                    };
                    </script>";
} elseif ($_GET['message'] == 2){
    echo "<script>
                        operatorAdded();
                    function operatorAdded (){
                        setTimeout(function() {
                        toastr.options = {
                            closeButton: true,
                            progressBar: true,
                            showMethod: 'slideDown',
                            timeOut: 6000
                        };
                        toastr.success('ユーザーが追加されました');
                    }, 1300);
                    };
                    </script>";
}
?>

</body>
</html>
