<?php

require_once "application_top.php";


if (isset($_POST['submit'])) {

    if ($_POST['work_mobile']){
        $work_mobile = 1;
    } else {
        $work_mobile = 0;
    }
    if ($_POST['qualification']){
        $qualification = 1;
    } else {
        $qualification = 0;
    }
    if ($_POST['service_type']){
        $service_type = 1;
    } else {
        $service_type = 0;
    }
    if ($_POST['job_category']){
        $job_category = 1;
    } else {
        $job_category = 0;
    }
    if ($_POST['prefecture']){
        $prefecture = 1;
    } else {
        $prefecture = 0;
    }
    if ($_POST['additional_info']){
        $additional_info = 1;
    } else {
        $additional_info = 0;
    }
    if ($_POST['show']){
        $show = 1;
    } else {
        $show = 0;
    }

    $statement = $conn->prepare("INSERT INTO `companies` (`name`, `pr`, `link`, `text`, `image`, `work_mobile`, `qualification`, `prefecture`, `service_type`, `job_category`, `additional_info`, `additional_text`, `count`) 
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
        "countClick" => 0
    ));
    header('Location: list.php?message=2');
} elseif (isset($_POST['cancel'])) {
    header('Location: add.php');
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

</head>

<body>

    <div id="wrapper">
        <?php $page = 'two'; include_once "sidebar.php"?>
        <div id="page-wrapper" class="gray-bg">
            <?php include_once "header.php"?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2> Add Company Listing</h2>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Fill the Company Details</h5>
                            </div>
                            <div class="ibox-content">
                                <form enctype="multipart/form-data" method="post" accept-charset="utf-8" id="form" class="form-horizontal" action="add.php">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Company Name</label>
                                        <div class="col-sm-10">
                                            <input name="name" required="required" class="form-control" placeholder="Company Name" maxlength="255" id="name"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">PR of the company</label>
                                        <div class="col-sm-10">
                                            <textarea name="pr" required="required" class="form-control" placeholder="PR of the Company" id="remarks" rows="4" aria-required="true"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Link</label>
                                        <div class="col-sm-10">
                                            <input name="link" required="required" class="form-control" placeholder="Anchor Link" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Text on Button</label>
                                        <div class="col-sm-10">
                                            <input name="text" required="required" class="form-control" placeholder="Text on Link" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Image Source</label>
                                        <div class="col-sm-10">
                                            <input name="image" required="required" class="form-control" placeholder="Text on Link" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Choose </label>
                                        <div class="col-sm-10">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>仕事携帯</th>
                                                    <td>
                                                        <input type="checkbox" class="js-switch" name="work_mobile" />
                                                    </td>
                                                <tr/>
                                                <tr>
                                                    <th>資格</th>
                                                    <td>
                                                        <input type="checkbox" class="js-switch" name="qualification"/>
                                                    </td>
                                                <tr/>
                                                <tr>
                                                    <th>都道府県</th>
                                                    <td>
                                                        <input type="checkbox" class="js-switch" name="prefecture" />
                                                    </td>
                                                <tr/>
                                                <tr>
                                                    <th>サービス種別</th>
                                                    <td>
                                                        <input type="checkbox" class="js-switch" name="service_type" />
                                                    </td>
                                                <tr/>
                                                <tr>
                                                    <th>職種</th>
                                                    <td>
                                                        <input type="checkbox" class="js-switch" name="job_category" />
                                                    </td>
                                                <tr/>
                                                <tr>
                                                    <th>Show Information</th>
                                                    <td>
                                                        <input type="checkbox" class="js-check-change" checked name="additional_info" />
                                                    </td>
                                                <tr/>
                                                <tr>
                                                    <th>Additional Information</th>
                                                    <td id="info2" >
                                                        <input type="checkbox" class="js-check-change" name="additional_info" />
                                                    </td>
                                                <tr/>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="div-info" class="form-group">
                                        <label class="col-sm-2 control-label">Additional Information</label>
                                        <div class="container1 col-sm-10">
                                            <textarea name="additional_text" style="margin-bottom: 20px;" class="form-control" placeholder="Info Content" id="infoadd" rows="4" aria-required="true"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group" align="center">
                                        <div class="col-sm-12">
                                            <button class="btn btn-white" name="cancel" type="submit">Cancel</button>
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
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script src="js/plugins/switchery/switchery.js"></script>
    <script src="js/plugins/summernote/summernote.js"></script>

    <script>
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            var switchery = new Switchery(html);
        });

        var elem = Array.prototype.slice.call(document.querySelectorAll('.js-check-change'));

        elem.forEach(function(html) {
            var switchery = new Switchery(html);
        });

        var changeCheckbox = document.querySelector('.js-check-change');
        $("#div-info").hide();
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
    </script>

</body>
</html>
