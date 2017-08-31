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
                                    <div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>
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
                                        <label class="col-sm-2 control-label">Text on link</label>
                                        <div class="col-sm-10">
                                            <input name="" required="required" class="form-control" placeholder="Text on Link" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">仕事携帯</label>
                                        <div class="col-sm-10">
                                            <input type="checkbox" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger">
                                        </div>
                                    </div>
                                    <div class="form-group" align="center">
                                        <div class="col-sm-12">
                                            <a href="/">Cancel</a>
                                            <button class="btn btn-primary" name="save" type="submit">Add Apartment</button>
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

</body>
</html>
