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
    <?php $page = 'five'; include_once "sidebar.php"?>
    <div id="page-wrapper" class="gray-bg">
        <?php include_once "header.php"?>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Settings</h2>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Password Change form.</h5>
                        </div>
                        <div class="ibox-content">
                            <form method="get" class="form-horizontal">
                                <div class="form-group"><label class="col-sm-2 control-label">Old Password</label>
                                    <div class="col-sm-10">
                                        <input placeholder="Enter the name" type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">New Password</label>
                                    <div class="col-sm-10">
                                        <input placeholder="Enter the Username" type="text" class="form-control" name="address">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Confirm New Password</label>
                                    <div class="col-sm-10"><input placeholder="Enter the Email Address" type="email" class="form-control" name="email"></div>
                                </div>
                                <div class="form-group" align="center">
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary" type="submit">Save changes</button>
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
    // chosen-select jQuery
    var config = {
        '.chosen-select'           : {},
        '.chosen-select-deselect'  : {allow_single_deselect:true},
        '.chosen-select-no-single' : {disable_search_threshold:10},
        '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
        '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }

    //iphone type checkbox
    var elem = document.querySelector('.js-switch');
    var text = new Switchery(elem, {  color: '#1AB394' });
    $('#isOperator').change(function(){
        if($(this).is(":checked")) {
            console.log("say hi");
            $("#dates").hide();
            $('#validity_chosen').hide();
        } else {
            console.log("say bye");
            $("#dates").show();
            $('#validity_chosen').show();
        }
    });
    // Create a new password
    $(".getNewPass").click(function(){
        var field = $(this).closest('div').find('input[rel="gp"]');
        field.val(randString(field));
    });
    // Generate a password string
    function randString(id){
        var dataSet = $(id).attr('data-character-set').split(',');
        var possible = '';
        if($.inArray('a-z', dataSet) >= 0){
            possible += 'abcdefghijklmnopqrstuvwxyz';
        }
        if($.inArray('A-Z', dataSet) >= 0){
            possible += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        if($.inArray('0-9', dataSet) >= 0){
            possible += '0123456789';
        }
        if($.inArray('#', dataSet) >= 0){
            possible += '![]{}()%&*$#^<>~@|';
        }
        var text = '';
        for(var i=0; i < $(id).attr('data-size'); i++) {
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        }
        return text;
    }
</script>

</body>
</html>
