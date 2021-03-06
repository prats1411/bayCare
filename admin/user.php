<?php

require_once "application_top.php";

if (isset($_POST['cancel'])) {
    header("Refresh:0");
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
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">

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
                <h2>ユーザー追加</h2>
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
                            <form method="post" action="insertdata.php" class="form-horizontal" onsubmit="return checkall();">
                                <div class="form-group"><label class="col-sm-2 control-label">お名前</label>
                                    <div class="col-sm-10">
                                        <input placeholder="Enter the name" type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">メールアドレス</label>
                                    <div class="col-sm-10">
                                        <input id="useremail" autocomplete="off" onkeyup="checkemail();" placeholder="Enter the Email Address" type="email" class="form-control" name="email">
                                        <span id="email_status"></span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">ユーザーネーム</label>
                                    <div class="col-sm-10">
                                        <input id="username" autocomplete="off" onkeyup="checkname();" placeholder="Enter the Username" type="text" class="form-control" name="username">
                                        <span id="name_status"></span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">パスワード</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <input placeholder="Password" name="password" type="" class="form-control" rel="gp" data-size="10" data-character-set="a-z,A-Z,0-9,#">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-primary getNewPass"><i class="fa fa-magic" aria-hidden="true"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" align="center">
                                    <div class="col-sm-12">
                                        <input class="btn btn-primary" name="Submit" type="submit" value="取消">
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
            $("#dates").hide();
            $('#validity_chosen').hide();
        } else {
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

    function checkname() {
        var name = document.getElementById( "username" ).value;
        if(name) {
            $.ajax({
                type: 'post',
                url: 'checkdata.php',
                data: {
                    user_name:name,
                },
                success: function (response) {
                    $( '#name_status' ).html(response);
                    if(response=="OK") {
                        return true;
                    } else {
                        return false;
                    }
                }
            });
        } else {
            $( '#name_status' ).html("");
            return false;
        }
    }

    function checkemail()
    {
        var email=document.getElementById( "useremail" ).value;
        if(email)
        {
            $.ajax({
                type: 'post',
                url: 'checkdata.php',
                data: {
                    user_email:email,
                },
                success: function (response) {
                    $( '#email_status' ).html(response);
                    if(response=="OK")
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
            });
        }
        else
        {
            $( '#email_status' ).html("");
            return false;
        }
    }

    function checkall()
    {
        var namehtml=document.getElementById("name_status").innerHTML;
        var emailhtml=document.getElementById("email_status").innerHTML;

        if((namehtml && emailhtml)=="OK")
        {
            return true;
            console.log(true);
        }
        else
        {
            return false;
            console.log(false);
        }
    }

</script>

</body>
</html>
