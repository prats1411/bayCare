<?php
require_once "admin/config.php";

//error_reporting(E_ALL); ini_set('display_errors', 1);

$mobile = 0;
$qualification = 0;
$prefecture = 0;
$service_type = 0;
$job_category = 0;

if (!empty($_POST)){

    if ($_POST['work_mobile']){
        $mobile = $_POST['work_mobile'];
    }
    if ($_POST['qualification']) {
        $qualification = $_POST['qualification'];
    }
    if ($_POST['prefecture']) {
        $prefecture = $_POST['prefecture'];
    }
    if ($_POST['service_type']) {
        $service_type = $_POST['service_type'];
    }
    if ($_POST['job_category']) {
        $job_category = $_POST['job_category'];
    }


//    var_dump($_POST);die;
    $statement = $conn->prepare("
select id as id, `name` as name, `pr` as pr, `link` as link, `text` as text, `image` as image, `work_mobile` as work_mobile,
`qualification` as qualification, `prefecture` as prefecture, `service_type` as service_type, `job_category` as job_category,
`additional_info` as additional_info, `additional_text` as additional_text from `companies` 
WHERE `work_mobile` = :work_mobile AND `qualification` = :qualification AND `prefecture` = :prefecture AND `service_type` = :service_type AND `job_category` = :job_category");
    $statement->execute(array(':work_mobile' => $mobile,':qualification' => $qualification,':prefecture' => $prefecture,':service_type' => $service_type,':job_category' => $job_category));
    $companies = $statement->fetchAll();
} else {
    header('Location: admin/404.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="cleartype" content="on">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>BayCare - Have the best choices..</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">

    <!-- plugins -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/chosen/chosen.css" rel="stylesheet">
</head>

<body>
<nav style="background-color: #f1f1f1;" id="menu">
    <header>
        <h2 style="margin-bottom: 20px;" class="text-center">Search Again</h2>
        <div class="div-form">
            <form method="get" class="form-horizontal">
                <div class="form-group">
                    <label class="col-xs-12 control-label">仕事携帯 :</label>
                    <div class="col-xs-12">
                        <select data-placeholder="選びなさい" class="chosen-select" multiple style="width:100%;">
                            <option style="display:none;" value="-">選びなさい</option>
                            <option class="正社員・職員">正社員・職員</option>
                            <option class="契約社員">契約社員</option>
                            <option class="派遣・パート">派遣・パート</option>
                            <option class="紹介予定派遣">紹介予定派遣</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 control-label">資格 :</label>
                    <div class="col-xs-12">
                        <select data-placeholder="選びなさい" class="chosen-select" multiple style="width:100%;">
                            <option style="display:none;" value="-">選びなさい</option>
                            <option class="介護職員初任者研修">介護職員初任者研修</option>
                            <option class="介護福祉士">介護福祉士</option>
                            <option class="ホームヘルパー２級">ホームヘルパー２級</option>
                            <option class="ホームヘルパー１級">ホームヘルパー１級</option>
                            <option class="実務者研修">実務者研修</option>
                            <option class="介護職員基礎研修">介護職員基礎研修</option>
                            <option class="社会福祉士">社会福祉士</option>
                        </select>
                    </div>
                </div>
                <div class="form-group"><label class="col-xs-12 control-label">都道府県 :</label>
                    <div class="col-xs-12">
                        <select data-placeholder="選びなさい" class="chosen-select" style="width:100%;">
                            <option style="display:none;" value="-">選びなさい</option>
                            <option value="北海道・東北">北海道・東北</option>
                            <option value="関東">関東</option>
                            <option value="甲信越・北陸">甲信越・北陸</option>
                            <option value="東海">東海</option>
                            <option value="近畿">近畿</option>
                            <option value="中国・四国">中国・四国</option>
                            <option value="九州・沖縄">九州・沖縄</option>
                        </select>
                    </div>
                </div>
                <div class="form-group"><label class="col-xs-12 control-label">サービス種別 :</label>
                    <div class="col-xs-12">
                        <select data-placeholder="選びなさい" class="chosen-select" multiple style="width:100%;">
                            <option style="display:none;" value="-">選びなさい</option>
                            <option value="特別養護法人ホーム">特別養護法人ホーム</option>
                            <option value="介護老人保健施設">介護老人保健施設</option>
                            <option value="介護特養型医療施設">介護特養型医療施設</option>
                            <option value="有料法人ホーム">有料法人ホーム</option>
                            <option value="デイサービス">デイサービス</option>
                            <option value="グループホーム">グループホーム</option>
                            <option value="訪問介護事務所">訪問介護事務所</option>
                            <option value="サービス付き高齢者向け住宅">サービス付き高齢者向け住宅</option>
                            <option value="小規模多機能">小規模多機能</option>
                            <option value="その他">その他</option>
                        </select>
                    </div>
                </div>
                <div class="form-group"><label class="col-xs-12 control-label">職種 :</label>
                    <div class="col-xs-12">
                        <select data-placeholder="選びなさい" class="chosen-select" multiple style="width:100%;">
                            <option style="display:none;" value="-">選びなさい</option>
                            <option value="介護士">介護士</option>
                            <option value="訪問介護員">訪問介護員</option>
                            <option value="ケアマネージャー">ケアマネージャー</option>
                            <option value="サービス提供責任者">サービス提供責任者</option>
                            <option value="生活相談員">生活相談員</option>
                            <option value="介護事務">介護事務</option>
                            <option value="管理職">管理職</option>
                            <option value="その他">その他</option>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-default btn-submit"> Search<i class="fa fa-chevron-right"></i></button>
                    <a style="margin-top: 10px;" id="cancel" name="cancel" class="btn btn-default">Cancel<i class="fa fa-times"></i></a>
                </div>
            </form>
        </div>
    </header>
</nav>

<main id="panel" class="panel">
    <header class="panel-header">
        <button class="btn-hamburger js-slideout-toggle">
            <span class="tooltip">Click To Search Again ! </span>
        </button>

    </header>
    <!--Notice -->
    <section id="note">
        <div class="container text-center">
            <p> <i class="fa fa-bell"></i><span> Notice! </span> We are a 3rd party here to find you the best Home care.   </p>
        </div>
    </section>
    <!-- rest of the page -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Result-->
                    <div id="result">
                        <h1> Results :- </h1>
                        <hr/>
                        <?php foreach ($companies as $company): ?>
                        <div class="box row">
                            <h3 class="text-center"><?php echo $company['name']; ?></h3>
                            <hr/>
                            <div class="col-sm-4">
                                <img class="img-responsive" src="assets/images/logo/logo.png" />
                            </div>
                            <div class="col-sm-8">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>仕事携帯</th>
                                        <th>資格</th>
                                        <th>都道府県</th>
                                        <th>サービス種別</th>
                                        <th>職種</th>
                                    </tr>
                                    <tr>
                                        <?php if ($company['work_mobile'] == 1): ?>
                                        <td>
                                            <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                        </td>
                                        <?php else: ?>
                                        <td>
                                            <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                        </td>
                                        <?php endif; ?>
                                        <?php if ($company['qualification'] == 1): ?>
                                            <td>
                                                <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                            </td>
                                        <?php else: ?>
                                            <td>
                                                <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                            </td>
                                        <?php endif; ?>
                                        <?php if ($company['prefecture'] == 1): ?>
                                            <td>
                                                <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                            </td>
                                        <?php else: ?>
                                            <td>
                                                <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                            </td>
                                        <?php endif; ?>
                                        <?php if ($company['service_type'] == 1): ?>
                                            <td>
                                                <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                            </td>
                                        <?php else: ?>
                                            <td>
                                                <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                            </td>
                                        <?php endif; ?>
                                        <?php if ($company['job_category'] == 1): ?>
                                            <td>
                                                <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                            </td>
                                        <?php else: ?>
                                            <td>
                                                <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                </table>
                                <p class="text-left">
                                    <?php echo $company['pr']; ?>
                                </p>
                            </div>
                            <div class="">
                                <?php if ($company['additional_info'] == 1): ?>
                                <button class="btn btn-gray"> READ MORE <i class="fa fa-angle-double-right"></i></button>
                                <?php endif; ?>
                                <button class="btn btn-smart"> GO TO WEBSITE  <i class="fa fa-link"></i></button>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- recommendation -->
                    <div id="side-recommend">
                        <div class="row text-center">
                            <h3>Our Recommendations</h3>
                            <hr/>
                            <p>What's New</p>
                            <div class="recomend-box">
                                <div class="text-center">
                                    <img class="img-responsive logo" src="assets/images/logo/logo.png">
                                    <h4 class="text-center">BayCare</h4>
                                </div>
                            </div>
                            <div class="recomend-box">
                                <div class="text-center">
                                    <img class="img-responsive logo" src="assets/images/logo/logo2.png">
                                    <h4 class="text-center">Home Hero</h4>
                                </div>
                            </div>
                            <div class="recomend-box">
                                <div class="text-center">
                                    <img class="img-responsive logo" src="assets/images/logo/logo3.png">
                                    <h4 class="text-center">Japanese Name</h4>
                                </div>
                            </div>
                            <p>Most Popular</p>
                            <div class="recomend-box">
                                <div class="text-center">
                                    <img class="img-responsive logo" src="assets/images/logo/logo4.png">
                                    <h4 class="text-center">BayCare</h4>
                                </div>
                            </div>
                            <div class="recomend-box">
                                <div class="text-center">
                                    <img class="img-responsive logo" src="assets/images/logo/logo5.png">
                                    <h4 class="text-center">Home Hero</h4>
                                </div>
                            </div>
                            <div class="recomend-box">
                                <div class="text-center">
                                    <img class="img-responsive logo" src="assets/images/logo/logo6.png">
                                    <h4 class="text-center">Japanese Name</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Bootstrap core JavaScript -->
<script src="assets/jquery/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/jquery/jquery-ui-1.10.4.min.js"></script>
<script src="assets/chosen/chosen.jquery.js"></script>
<script src="assets/jquery/slideout.min.js"></script>

<script>
    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70
    });
    document.querySelector('.js-slideout-toggle').addEventListener('click', function() {
        slideout.toggle();
    });
    document.querySelector('#cancel').addEventListener('click', function() {
        slideout.close();
    });
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
    window.onload = function() {
        document.querySelector('.tooltip').className += ' shake';
    }
</script>
</body>
</html>