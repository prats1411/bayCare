<?php

require_once "application_top.php";

$statement = $conn->prepare("INSERT INTO `companies` (`name`, `pr`, `link`, `text`, `image`, `work_mobile`, `qualification`, `prefecture`, `service_type`, `job_category`, `additional_info`, `additional_text`) 
        VALUES(:name_company, :pr, :link, :text, :image, :work_mobile, :qualification, :prefecture, :service_type, :job_category, :additional_info, :additional_text)");
$statement->execute(array(
    "name_company" => $_POST['name'],
    "pr" => $_POST['pr'],
    "link" => $_POST['link'],
    "text" => $_POST['text'],
    "image" => $_POST['image'],
    "work_mobile" => $_POST['work_mobile'],
    "qualification" => $_POST['qualification'],
    "prefecture" => $_POST['prefecture'],
    "service_type" => $_POST['service_type'],
    "job_category" => $_POST['job_category'],
    "additional_info" => $_POST['additional_info'],
    "additional_text" => $_POST['additional_text'],
));

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
                                                    <td>
                                                        <input type="checkbox" name="work_mobile" checked data-toggle="toggle" />
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="qualification" checked data-toggle="toggle" />
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="prefecture" checked data-toggle="toggle" />
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="service_type" checked data-toggle="toggle" />
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="job_category" checked data-toggle="toggle" />
                                                    </td>
                                                    <td id="info1">
                                                        <input type="checkbox" name="additional_info" data-toggle="toggle" />
                                                    </td>
                                                <tr/>
                                            </table>
                                            <table class="table table-bordered toggle hidden-lg ">
                                                <tr>
                                                    <th>仕事携帯</th>
                                                    <td>
                                                        <input type="checkbox" name="work_mobile" checked data-toggle="toggle" />
                                                    </td>
                                                <tr/>
                                                <tr>
                                                    <th>資格</th>
                                                    <td>
                                                        <input type="checkbox" name="qualification" checked data-toggle="toggle" />
                                                    </td>
                                                <tr/>
                                                <tr>
                                                    <th>都道府県</th>
                                                    <td>
                                                        <input type="checkbox" name="prefecture" checked data-toggle="toggle" />
                                                    </td>
                                                <tr/>
                                                <tr>
                                                    <th>サービス種別</th>
                                                    <td>
                                                        <input type="checkbox" name="service_type" checked data-toggle="toggle" />
                                                    </td>
                                                <tr/>
                                                <tr>
                                                    <th>職種</th>
                                                    <td>
                                                        <input type="checkbox" name="job_category" checked data-toggle="toggle" />
                                                    </td>
                                                <tr/>
                                                <tr>
                                                    <th>Additional Information</th>
                                                    <td id="info2" >
                                                        <input type="checkbox" name="additional_info" data-toggle="toggle" />
                                                    </td>
                                                <tr/>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="div-info" class="form-group">
                                        <label class="col-sm-2 control-label">Additional Information</label>
                                        <div class="container1 col-sm-10">
                                            <textarea name="additional_text" style="margin-bottom: 20px;" required="required" class="form-control" placeholder="Info Content" id="remarks" rows="4" aria-required="true"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group" align="center">
                                        <div class="col-sm-12">
                                            <a href="/">Cancel</a>
                                            <button class="btn btn-primary" name="save" type="submit">Add Company</button>
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
    <script src="js/bootstrap-toggle.js"></script>

    <script>
        $(function() {
            $('#toggle-one').bootstrapToggle();
        })
        $(document).ready(function() {
            var max_fields      = 10;
            var wrapper         = $(".container1");
            var add_button      = $(".add_form_field");

            var x = 1;
            $(add_button).click(function(e){
                e.preventDefault();
                if(x < max_fields){
                    x++;
                    $(wrapper).append('<div><input name="" style="margin-bottom: 10px;" required="required" class="form-control" placeholder="Info Heading" /> <textarea name="pr" style="margin-bottom: 10px;" required="required" class="form-control" placeholder="Info Content" id="remarks" rows="4" aria-required="true"></textarea> <a href="#" class="delete">Delete</a></div>');
                }
                else
                {
                    alert('You Reached the limits')
                }
            });

            $(wrapper).on("click",".delete", function(e){
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        });
    </script>

</body>
</html>
