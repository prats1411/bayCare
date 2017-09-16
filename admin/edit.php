<?php
require_once "application_top.php";

if ($_GET['input']) {

    $id = $_GET['input'];
    $statement = $conn->prepare("
select `name` as name, `pr` as pr, `link` as link, `text` as text, `image` as image, `work_mobile` as work_mobile,
`qualification` as qualification, `prefecture` as prefecture, `service_type` as service_type, `job_category` as job_category,
`additional_info` as additional_info, `additional_text` as additional_text from `companies` WHERE `id` = '$id'");
    $statement->execute();
    $company = $statement->fetch();
} else {
    header('Location: 404.php');
}


if (isset($_POST['submit'])) {

    if ($_POST['work_mobile']){
        $work_mobile = 1;
    }
    if ($_POST['qualification']){
        $qualification = 1;
    }
    if ($_POST['service_type']){
        $service_type = 1;
    }
    if ($_POST['job_category']){
        $job_category = 1;
    }
    if ($_POST['prefecture']){
        $prefecture = 1;
    }
    if ($_POST['additional_info']){
        $additional_info = 1;
    }

    $statement = $conn->prepare("UPDATE `companies` SET (`name`, `pr`, `link`, `text`, `image`, `work_mobile`, `qualification`, `prefecture`, `service_type`, `job_category`, `additional_info`, `additional_text`, `count`) 
            VALUES(:name_company, :pr, :link, :text, :image, :work_mobile, :qualification, :prefecture, :service_type, :job_category, :additional_info, :additional_text, :countClick)");
    $statement->execute(array(
        "name_company" => $_POST['name'],
        "pr" => $_POST['pr'],
        "link" => $_POST['link'],
        "text" => $_POST['text'],
        "image" => $_POST['image'],
        "work_mobile" => $work_mobile,
        "qualification" => $qualification,
        "prefecture" => $prefecture,
        "service_type" => $service_type,
        "job_category" => $job_category,
        "additional_info" => $additional_info,
        "additional_text" => $_POST['additional_text'],
        "countClick" => $_POST['count']
    ));
}
//elseif (isset($_POST['cancel'])) {
//    header('Location: add.php');
//}

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
    <link href="css/jquery.bootstrap-touchspin.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
</head>

<body>

<div id="wrapper">
    <?php $page = 'three'; include_once "sidebar.php"?>
    <div id="page-wrapper" class="gray-bg">
        <?php include_once "header.php"?>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Edit Company Information</h2>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Edit Company Information</h5>
                        </div>
                        <div class="ibox-content">
                            <form enctype="multipart/form-data" method="post" accept-charset="utf-8" id="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Company Name</label>
                                    <div class="col-sm-10">
                                        <input name="name" required="required" class="form-control" value="<?php echo $company['name']; ?>" placeholder="<?php echo $company['name'] ?>" maxlength="255" id="name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">PR of the company</label>
                                    <div class="col-sm-10">
                                        <textarea name="pr" required="required" class="form-control" placeholder="<?php echo $company['pr'] ?>" id="remarks" rows="4" aria-required="true"><?php echo $company['pr'] ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Link</label>
                                    <div class="col-sm-10">
                                        <input name="link" required="required" class="form-control" value="<?php echo $company['link']; ?>" placeholder="<?php echo $company['link'] ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Text on Button</label>
                                    <div class="col-sm-10">
                                        <input name="text" required="required" class="form-control" value="<?php echo $company['text']; ?>" placeholder="<?php echo $company['text'] ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Image Source</label>
                                    <div class="col-sm-10">
                                        <input name="image" required="required" class="form-control" value="<?php echo $company['image']; ?>" placeholder="<?php echo $company['image'] ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Choose </label>
                                    <div class="col-sm-10">
                                        <table class="table table-bordered toggle hidden-md hidden-sm hidden-xs">
                                            <tr>
                                                <th>仕事携帯</th>
                                                <th>資格</th>
                                                <th>都道府県</th>
                                                <th>サービス種別</th>
                                                <th>職種</th>
                                                <th>Additional Information</th>
                                            <tr/>
                                            <tr>
                                                <?php if ($company['work_mobile'] == 1): ?>
                                                    <td>
                                                        <input type="checkbox" name="work_mobile" checked data-toggle="toggle" />
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <input type="checkbox" name="work_mobile" data-toggle="toggle" />
                                                    </td>
                                                <?php endif; ?>
                                                <?php if ($company['qualification'] == 1): ?>
                                                    <td>
                                                        <input type="checkbox" name="qualification" checked data-toggle="toggle" />
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <input type="checkbox" name="qualification" data-toggle="toggle" />
                                                    </td>
                                                <?php endif; ?>
                                                <?php if ($company['prefecture'] == 1): ?>
                                                    <td>
                                                        <input type="checkbox" name="prefecture" checked data-toggle="toggle" />
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <input type="checkbox" name="prefecture" data-toggle="toggle" />
                                                    </td>
                                                <?php endif; ?>
                                                <?php if ($company['service_type'] == 1): ?>
                                                    <td>
                                                        <input type="checkbox" name="service_type" checked data-toggle="toggle" />
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <input type="checkbox" name="service_type" data-toggle="toggle" />
                                                    </td>
                                                <?php endif; ?>
                                                <?php if ($company['job_category'] == 1): ?>
                                                    <td>
                                                        <input type="checkbox" name="job_category" checked data-toggle="toggle" />
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <input type="checkbox" name="job_category" data-toggle="toggle" />
                                                    </td>
                                                <?php endif; ?>
                                                <?php if ($company['additional_info'] == 1): ?>
                                                    <td id="info1">
                                                        <input type="checkbox" name="additional_info" checked data-toggle="toggle" />
                                                    </td>
                                                <?php else: ?>
                                                    <td id="info1">
                                                        <input type="checkbox" name="additional_info" data-toggle="toggle" />
                                                    </td>
                                                <?php endif; ?>
                                            <tr/>
                                        </table>
                                        <table class="table table-bordered toggle hidden-lg ">
                                            <tr>
                                                <th>仕事携帯</th>
                                                <?php if ($company['work_mobile'] == 1): ?>
                                                    <td>
                                                        <input type="checkbox" name="work_mobile" checked data-toggle="toggle" />
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <input type="checkbox" name="work_mobile" data-toggle="toggle" />
                                                    </td>
                                                <?php endif; ?>
                                            <tr/>
                                            <tr>
                                                <th>資格</th>
                                                <?php if ($company['qualification'] == 1): ?>
                                                    <td>
                                                        <input type="checkbox" name="qualification" checked data-toggle="toggle" />
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <input type="checkbox" name="qualification" data-toggle="toggle" />
                                                    </td>
                                                <?php endif; ?>
                                            <tr/>
                                            <tr>
                                                <th>都道府県</th>
                                                <?php if ($company['prefecture'] == 1): ?>
                                                    <td>
                                                        <input type="checkbox" name="prefecture" checked data-toggle="toggle" />
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <input type="checkbox" name="prefecture" data-toggle="toggle" />
                                                    </td>
                                                <?php endif; ?>
                                            <tr/>
                                            <tr>
                                                <th>サービス種別</th>
                                                <?php if ($company['service_type'] == 1): ?>
                                                    <td>
                                                        <input type="checkbox" name="service_type" checked data-toggle="toggle" />
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <input type="checkbox" name="service_type" data-toggle="toggle" />
                                                    </td>
                                                <?php endif; ?>
                                            <tr/>
                                            <tr>
                                                <th>職種</th>
                                                <?php if ($company['job_category'] == 1): ?>
                                                    <td>
                                                        <input type="checkbox" name="job_category" checked data-toggle="toggle" />
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <input type="checkbox" name="job_category" data-toggle="toggle" />
                                                    </td>
                                                <?php endif; ?>
                                            <tr/>
                                            <tr>
                                                <th>Additional Information</th>
                                                <?php if ($company['additional_info'] == 1): ?>
                                                    <td id="info1">
                                                        <input type="checkbox" name="additional_info" checked data-toggle="toggle" />
                                                    </td>
                                                <?php else: ?>
                                                    <td id="info1">
                                                        <input type="checkbox" name="additional_info" data-toggle="toggle" />
                                                    </td>
                                                <?php endif; ?>
                                            <tr/>
                                        </table>
                                    </div>
                                </div>
                                <div id="div-info" class="form-group">
                                    <label class="col-sm-2 control-label">Additional Information</label>
                                    <div class="container1 col-sm-10">
                                        <textarea name="additional_text" style="margin-bottom: 20px;" required="required" class="form-control" placeholder="<?php $company['additional_text'] ?>" id="remarks" rows="4" aria-required="true"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Count</label>
                                    <div class="col-sm-10">
                                        <input class="touchspin1" type="text" value="" name="count">
                                    </div>
                                </div>
                                <div class="form-group" align="center">
                                    <div class="col-sm-12">
                                        <a href="/">Cancel</a>
                                        <button class="btn btn-primary" name="submit" type="submit">Add Company</button>
                                    </div>
                                </div>
                            </form>
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

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>
<script src="js/bootstrap-toggle.js"></script>
<script src="js/jquery.bootstrap-touchspin.js"></script>



<script>
    $(function() {
        $('#toggle-one').bootstrapToggle();
    })
    $(".touchspin1").TouchSpin({
        buttondown_class: 'btn btn-link',
        buttonup_class: 'btn btn-link'
    });
</script>

</body>
</html>
