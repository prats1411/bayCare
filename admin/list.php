<?php

require_once "application_top.php";

$statement = $conn->prepare("
select id as id, `name` as name, `pr` as pr, `link` as link, `text` as text, `image` as image, `work_mobile` as work_mobile,
`qualification` as qualification, `prefecture` as prefecture, `service_type` as service_type, `job_category` as job_category,
`additional_info` as additional_info, `additional_text` as additional_text, `count` as clicks from `companies` 
");
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


</head>

<body>

<div id="wrapper">
    <?php $page = 'three'; include_once "sidebar.php"?>
    <div id="page-wrapper" class="gray-bg">
        <?php include_once "header.php"?>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Company Listing</h2>
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
                            <div id="search" class="text-right row" style="margin-bottom: 25px;">
                                <div class="input-group">
                                    <input type="text" placeholder="Search by name" class="input-sm form-control"> <span class="input-group-btn">
                                    <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <form method="get" class="form-horizontal" action="edit.php">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name </th>
                                        <th>仕事携帯 </th>
                                        <th>資格</th>
                                        <th>都道府県</th>
                                        <th>サービス種別</th>
                                        <th>職種</th>
                                        <th>addi. info</th>
                                        <th>count</th>
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
                                    <button type="submit" id="button-edit" class="btn btn-sm btn-primary"> Edit / Delete </button> </span>
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


<script>
    $(document).ready(function(){
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });

//    $( "#button-edit" ).click(function() {
//        $('input[name=input]:checked').val();
//    });
</script>

</body>
</html>
