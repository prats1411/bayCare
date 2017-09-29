<?php
require_once "application_top.php";

if ($_GET['input']) {

    $id = $_GET['input'];
    $statement = $conn->prepare("
select `id` as id, `name` as name, `pr` as pr, `link` as link, `text` as text, `image` as image, `work_mobile` as work_mobile,
`qualification` as qualification, `prefecture` as prefecture, `service_type` as service_type, `job_category` as job_category,
`additional_info` as additional_info, `additional_text` as additional_text, `count` as clicks, `show` as `show` from `companies` WHERE `id` = '$id'");
    $statement->execute();
    $company = $statement->fetch();
} else {
    header('Location: 404.php');
}


if (isset($_POST['submit'])) {
//    var_dump($_POST['work_mobile']);die;

    if ($_POST['work_mobile']){
        $work_mobile = 1;
    } else {
        $work_mobile = 0;
    }
    if (isset($_POST['qualification'])){
        $qualification = 1;
    } else {
        $qualification = 0;
    }
    if (isset($_POST['service_type'])){
        $service_type = 1;
    } else {
        $service_type = 0;
    }
    if (isset($_POST['job_category'])){
        $job_category = 1;
    } else {
        $job_category = 0;
    }
    if (isset($_POST['prefecture'])){
        $prefecture = 1;
    } else {
        $prefecture = 0;
    }
    if (isset($_POST['additional_info'])){
        $additional_info = 1;
    } else {
        $additional_info = 0;
    }
    if (isset($_POST['additional_text'])){
        $additional_text = $_POST['additional_text'];
    } else {
        $additional_text = $company['additional_text'];
    }
    if (isset($_POST['clicks'])){
        $count = $_POST['clicks'];
    } else {
        $count = $company['clicks'];
    }
    if (isset($_POST['show'])){
        $show = 1;
    } else {
        $show = 0;
    }

    $statement = $conn->prepare("UPDATE `companies` SET `name` = :name_company, `pr` = :pr, `link` = :link, `text` = :text,
`image` = :image, `work_mobile` = :work_mobile, `qualification` = :qualification, `prefecture` = :prefecture,
`service_type` = :service_type, `job_category` = :job_category, `additional_info` = :additional_info, `additional_text` = :additional_text,
`count` = :countClick, `show` = :showInfo WHERE `id` = '$id'");

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
        "additional_text" => $additional_text,
        "countClick" => $count,
        "showInfo" => $show
    ));
    header('Location: list.php');
}

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
    <link href="css/plugins/summernote/summernote-bs4.css" rel="stylesheet">
    <link href="css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="css/jquery.bootstrap-touchspin.css" rel="stylesheet">

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
                <h2>Edit Company Information</h2>
            </div>
        </div>
        <div style="padding: 20px 10px 0" class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div style="margin-bottom: 0;" class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Danger Zone</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="danger">
                                <h3> Delete the company </h3>
                                <p>Once you delete a repository, there is no going back. Please be certain.</p>
                                <div align="center">
                                    <span type="button" id="delete-button"><i class="btn btn-primary">Delete</i></span>
                                </div>
                                <div id="confirm" class="modal animate fade-in-right">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h3>Are you sure you want to delete this company?</h3>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                                            <a href="companyDelete.php?id=<?php echo $company['id']; ?>" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>仕事携帯</th>
                                                <?php if ($company['work_mobile'] == 1): ?>
                                                    <td>
                                                        <input class="js-switch" type="checkbox" name="work_mobile" checked />
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <input class="js-switch" type="checkbox" name="work_mobile"/>
                                                    </td>
                                                <?php endif; ?>
                                            <tr/>
                                            <tr>
                                                <th>資格</th>
                                                <?php if ($company['qualification'] == 1): ?>
                                                    <td>
                                                        <input class="js-switch" type="checkbox" name="qualification" checked/>
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <input class="js-switch" type="checkbox" name="qualification"/>
                                                    </td>
                                                <?php endif; ?>
                                            <tr/>
                                            <tr>
                                                <th>都道府県</th>
                                                <?php if ($company['prefecture'] == 1): ?>
                                                    <td>
                                                        <input class="js-switch" type="checkbox" name="prefecture" checked/>
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <input class="js-switch" type="checkbox" name="prefecture"/>
                                                    </td>
                                                <?php endif; ?>
                                            <tr/>
                                            <tr>
                                                <th>サービス種別</th>
                                                <?php if ($company['service_type'] == 1): ?>
                                                    <td>
                                                        <input class="js-switch" type="checkbox" name="service_type"/>
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <input class="js-switch" type="checkbox" name="service_type" />
                                                    </td>
                                                <?php endif; ?>
                                            <tr/>
                                            <tr>
                                                <th>職種</th>
                                                <?php if ($company['job_category'] == 1): ?>
                                                    <td>
                                                        <input class="js-switch" type="checkbox" name="job_category" checked/>
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <input class="js-switch" type="checkbox" name="job_category" />
                                                    </td>
                                                <?php endif; ?>
                                            <tr/>
                                            <tr>
                                                <th>Show Information</th>
                                                <?php if ($company['show'] == 1): ?>
                                                    <td>
                                                        <input class="js-switch" type="checkbox" name="show" checked/>
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <input class="js-switch" type="checkbox" name="show" />
                                                    </td>
                                                <?php endif; ?>
                                            <tr/>
                                            <tr>
                                                <th>Additional Information</th>
                                                <?php if ($company['additional_info'] == 1): ?>
                                                    <td id="info1">
                                                        <input class="js-check-change" type="checkbox" name="additional_info" checked/>
                                                    </td>
                                                <?php else: ?>
                                                    <td id="info1">
                                                        <input class="js-check-change" type="checkbox" name="additional_info"/>
                                                    </td>
                                                <?php endif; ?>
                                            <tr/>
                                        </table>
                                    </div>
                                </div>

                                <div id="div-info" class="form-group">
                                    <label class="col-sm-2 control-label">Additional Information</label>
                                    <div class="container1 col-sm-10">
                                        <textarea name="additional_text" style="margin-bottom: 20px;" class="form-control" placeholder="<?php $company['additional_text'] ?>" id="infoadd" rows="4" aria-required="true"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Count</label>
                                    <div class="col-sm-10">
                                        <input class="touchspin1" type="text" value="<?php echo $company['clicks']; ?>" placeholder="<?php echo $company['clicks']; ?>" name="clicks">
                                    </div>
                                </div>
                                <div class="form-group" align="center">
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary" name="submit" type="submit">Done</button>
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
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/plugins/switchery/switchery.js"></script>
<script src="js/plugins/summernote/summernote.js"></script>
<script src="js/jquery.bootstrap-touchspin.js"></script>



<script>

    $(".touchspin1").TouchSpin({
        buttondown_class: 'btn btn-link',
        buttonup_class: 'btn btn-link'
    });

    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

    elems.forEach(function(html) {
        var switchery = new Switchery(html);
    });

    var elem = Array.prototype.slice.call(document.querySelectorAll('.js-check-change'));

    elem.forEach(function(html) {
        var switchery = new Switchery(html);
    });

    var changeCheckbox = document.querySelector('.js-check-change');
    jQuery(document).ready(function () {
        if ( changeCheckbox.checked == true ) {
            $("#div-info").show();
        } else {
            $("#div-info").hide();
        }
    });
    changeCheckbox.onchange = function() {
        if(changeCheckbox.checked == true){
            $("#div-info").show(500);
        } else {
            $("#div-info").hide(500);
        }
    };

    $('#infoadd').summernote({
        placeholder: 'Add additional information.',
        tabsize: 5,
        height: 300
    });

    $( document ).on('click','#delete-button',function(e) {
        var $form = $(this).closest('form');
        e.preventDefault();
        $('#confirm').modal({
            keyboard: false
        })
            .one('click', '#delete', function(e) {
                $form.trigger('submit');
            });
    });
</script>

</body>
</html>
