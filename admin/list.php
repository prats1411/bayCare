<?php

require_once "application_top.php";

$statement = $conn->prepare("
select id as id, `name` as name, `pr` as pr, `link` as link, `text` as text, `image` as image, `work_mobile` as work_mobile,
`qualification` as qualification, `prefecture` as prefecture, `service_type` as service_type, `job_category` as job_category,
`additional_info` as additional_info, `additional_text` as additional_text, `count` as clicks from `companies` ORDER BY clicks, id DESC");
$statement->execute();
$companies = $statement->fetchAll();

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
    <?php $page = 'three'; include_once "sidebar.php"?>
    <div id="page-wrapper" class="gray-bg">
        <?php include_once "header.php"?>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>会社一覧</h2>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Following is the list of all the companies.</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <form method="get" class="form-horizontal" action="edit.php">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>名前 </th>
                                        <th>仕事携帯 </th>
                                        <th>資格</th>
                                        <th>都道府県</th>
                                        <th>サービス種別</th>
                                        <th>職種</th>
                                        <th>追加情報</th>
                                        <th>回数</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($companies as $company): ?>
                                    <tr>
                                        <td><input type="radio" class="i-checks" name="input" value="<?php echo $company['id'] ?>"></td>
                                        <td> <?php echo $company['name'] ?> </td>
                                        <?php if ($company['work_mobile'] == 1): ?>
                                            <td><i class="fa fa-check"></i></td>
                                        <?php else: ?>
                                            <td><i class="fa fa-times-circle-o"></i></td>
                                        <?php endif; ?>
                                        <?php if ($company['qualification'] == 1): ?>
                                            <td><i class="fa fa-check"></i></td>
                                        <?php else: ?>
                                            <td><i class="fa fa-times-circle-o"></i></td>
                                        <?php endif; ?>
                                        <?php if ($company['prefecture'] == 1): ?>
                                            <td><i class="fa fa-check"></i></td>
                                        <?php else: ?>
                                            <td><i class="fa fa-times-circle-o"></i></td>
                                        <?php endif; ?>
                                        <?php if ($company['service_type'] == 1): ?>
                                            <td><i class="fa fa-check"></i></td>
                                        <?php else: ?>
                                            <td><i class="fa fa-times-circle-o"></i></td>
                                        <?php endif; ?>
                                        <?php if ($company['job_category'] == 1): ?>
                                            <td><i class="fa fa-check"></i></td>
                                        <?php else: ?>
                                            <td><i class="fa fa-times-circle-o"></i></td>
                                        <?php endif; ?>
                                        <?php if ($company['additional_info'] == 1): ?>
                                            <td><i class="fa fa-check"></i></td>
                                        <?php else: ?>
                                            <td><i class="fa fa-times-circle-o"></i></td>
                                        <?php endif; ?>
                                        <td> <?php echo $company['clicks']; ?> </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <button type="submit" id="button-edit" class="btn btn-sm btn-primary"> 編集 / 削除 </button> </span>
                                </div>
                                </form>
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
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Peity -->
<script src="js/plugins/peity/jquery.peity.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>

<!-- toaster -->
<script src="js/plugins/toastr/toastr.min.js"></script>


<script>
    $(document).ready(function(){
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
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
                        toastr.error('会社情報が削除されました。');
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
                        toastr.success('会社情報が追加されました。');
                    }, 1300);
                    };
                    </script>";
}
?>

</body>
</html>
