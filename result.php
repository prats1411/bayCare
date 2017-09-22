<?php
require_once "admin/config.php";
require_once "recom.php";

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
            <form method="post" class="form-horizontal" action="result.php">
                <div class="form-group">
                    <label class="col-xs-12 control-label">仕事携帯 :</label>
                    <div class="col-xs-12">
                        <select data-placeholder="選びなさい" class="chosen-select" name="work_mobile" style="width:100%;">
                            <option style="display:none;" value="0">選びなさい</option>
                            <option value="1">正社員・職員</option>
                            <option value="1">契約社員</option>
                            <option value="1">派遣・パート</option>
                            <option value="1">紹介予定派遣</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 control-label">資格 :</label>
                    <div class="col-xs-12">
                        <select data-placeholder="選びなさい" class="chosen-select" name="qualification" style="width:100%;">
                            <option style="display:none;" value="0">選びなさい</option>
                            <option value="1">介護職員初任者研修</option>
                            <option value="1">介護福祉士</option>
                            <option value="1">ホームヘルパー２級</option>
                            <option value="1">ホームヘルパー１級</option>
                            <option value="1">実務者研修</option>
                            <option value="1">介護職員基礎研修</option>
                            <option value="1">社会福祉士</option>
                        </select>
                    </div>
                </div>
                <div class="form-group"><label class="col-xs-12 control-label">都道府県 :</label>
                    <div class="col-xs-12">
                        <select data-placeholder="選びなさい" class="chosen-select" name="prefecture" style="width:100%;">
                            <option style="display:none;" value="0">選びなさい</option>
                            <option value="1">北海道・東北</option>
                            <option value="1">関東</option>
                            <option value="1">甲信越・北陸</option>
                            <option value="1">東海</option>
                            <option value="1">近畿</option>
                            <option value="1">中国・四国</option>
                            <option value="1">九州・沖縄</option>
                        </select>
                    </div>
                </div>
                <div class="form-group"><label class="col-xs-12 control-label">サービス種別 :</label>
                    <div class="col-xs-12">
                        <select data-placeholder="選びなさい" class="chosen-select" name="service_type" style="width:100%;">
                            <option style="display:none;" value="0">選びなさい</option>
                            <option value="1">特別養護法人ホーム</option>
                            <option value="1">介護老人保健施設</option>
                            <option value="1">介護特養型医療施設</option>
                            <option value="1">有料法人ホーム</option>
                            <option value="1">デイサービス</option>
                            <option value="1">グループホーム</option>
                            <option value="1">訪問介護事務所</option>
                            <option value="1">サービス付き高齢者向け住宅</option>
                            <option value="1">小規模多機能</option>
                            <option value="1">その他</option>
                        </select>
                    </div>
                </div>
                <div class="form-group"><label class="col-xs-12 control-label">職種 :</label>
                    <div class="col-xs-12">
                        <select data-placeholder="選びなさい" class="chosen-select" name="job_category" style="width:100%;">
                            <option style="display:none;" value="0">選びなさい</option>
                            <option value="1">介護士</option>
                            <option value="1">訪問介護員</option>
                            <option value="1">ケアマネージャー</option>
                            <option value="1">サービス提供責任者</option>
                            <option value="1">生活相談員</option>
                            <option value="1">介護事務</option>
                            <option value="1">管理職</option>
                            <option value="1">その他</option>
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
                                <img class="img-responsive" src="<?php echo $company['image']; ?>" />
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
                            <div class="col-xs-12">
                                <?php if ($company['additional_info'] == 1): ?>
                                <a href="<?php echo 'detail.php?id='.$company['id']; ?>" class="btn btn-gray" target="_blank"> READ MORE <i class="fa fa-angle-double-right"></i></a>
                                <?php endif; ?>
                                <a href="<?php echo $company['link']; ?>" class="btn btn-smart" target="_blank"> <?php echo $company['text']; ?>  <i class="fa fa-link"></i></a>
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
                            <p class="p-class2">What's New</p>
                            <?php foreach ($companiesLatest as $latest): ?>
                            <a href="<?php echo $latest['link']; ?>" target="_blank">
                                <div class="recomend-box">
                                    <div class="text-center">
                                        <h4 class="text-cente h4-class"><?php echo $latest['name']; ?></h4>
                                        <p class="tasks-overflow text-center p-class"><?php echo $latest['pr']; ?></p>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach; ?>
                            <p class="p-class2">Most Popular</p>
                            <?php foreach ($companiesPopular as $popular): ?>
                            <a href="<?php echo $popular['link']; ?>" target="_blank">
                                <div class="recomend-box">
                                    <div class="text-center">
                                        <h4 class="text-cente h4-class"><?php echo $popular['name']; ?></h4>
                                        <p class="tasks-overflow text-center p-class"><?php echo $popular['pr']; ?></p>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach; ?>
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
<script src="assets/jquery/script.js"></script>

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