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
    <link href="css/plugins/summernote/summernote-bs4.css" rel="stylesheet">
    <link href="css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="css/jquery.bootstrap-touchspin.css" rel="stylesheet">
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
                                    <button class="btn btn-primary" name="save" type="submit">Delete</button>
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
                            <form enctype="multipart/form-data" method="post" accept-charset="utf-8" id="form" class="form-horizontal" action="/apartments/add">
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
                                        <textarea name="additional_text" style="margin-bottom: 20px;" required="required" class="form-control" placeholder="Info Content" id="infoadd" rows="4" aria-required="true"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Count</label>
                                    <div class="col-sm-10">
                                        <input class="touchspin1" type="text" value="" name="demo1">
                                    </div>
                                </div>
                                <div class="form-group" align="center">
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary" name="save" type="submit">Done.</button>
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
