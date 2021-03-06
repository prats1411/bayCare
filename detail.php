<?php

if ($_GET['id']){

    require_once "admin/config.php";
    require_once "recom.php";
    $id = $_GET['id'];

    $statement = $conn->prepare("
select `name` as name, `pr` as pr, `link` as link, `text` as text, `image` as image, `work_mobile` as work_mobile,
`qualification` as qualification, `prefecture` as prefecture, `service_type` as service_type, `job_category` as job_category,
`additional_info` as additional_info, `additional_text` as additional_text from `companies` WHERE `id` = '$id'");
    $statement->execute();
    $company = $statement->fetch();

} else {
    header('Location: 404.php');
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

    <!-- Fevicon -->
    <link rel="shortcut icon" type="image/png" sizes="20x20" href="assets/images/001.png"/>

</head>

<body>

<!-- Notice -->
<section id="note">
    <div class="container text-center">
        <img style="width: 80px;" class="img-responsive" src="assets/images/001.png" />
        <p> <i class="fa fa-bell"></i><span> 通知! </span> 本サイトはベストな在宅医療サービスを見つけることが可能なサードパーティサイトでございます。 </p>
    </div>
</section>

<!-- Search -->
<section id="search" style="padding-top: 30px !important;">
    <div class="text-right" style="position: relative;">
        <button id="close"  class="btn btn_close" style="margin: 0 50px 10px 0;" > 閉じる <i class="fa fa-times"></i></button>
    </div>
    <div class="container">
        <div id="search-box">
            <h4> 下記選択肢からご希望にあった条件をご選択ください </h4>
            <hr/>
            <div class="row">
                <form method="post" class="form-horizontal" action="result.php">
                    <div class="form-group"><label class="col-sm-2 control-label">仕事携帯 :</label>
                        <div class="col-sm-10">
                            <label class="checkbox-inline"><input type="checkbox" name="work_mobile" value="1">正社員・職員</label>
                            <label class="checkbox-inline"><input type="checkbox" name="work_mobile" value="1">契約社員</label>
                            <label class="checkbox-inline"><input type="checkbox" name="work_mobile" value="1">派遣・パート</label>
                            <label class="checkbox-inline"><input type="checkbox" name="work_mobile" value="1">紹介予定派遣</label>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">資格 :</label>
                        <div class="col-sm-10">
                            <label class="checkbox-inline"><input type="checkbox" name="qualification" value="1">介護職員初任者研修</label>
                            <label class="checkbox-inline"><input type="checkbox" name="qualification" value="1">介護福祉士</label>
                            <label class="checkbox-inline"><input type="checkbox" name="qualification" value="1">ホームヘルパー２級</label>
                            <label class="checkbox-inline"><input type="checkbox" name="qualification" value="1">ホームヘルパー１級</label>
                            <label class="checkbox-inline"><input type="checkbox" name="qualification" value="1">実務者研修</label>
                            <label class="checkbox-inline"><input type="checkbox" name="qualification" value="1">介護職員基礎研修</label>
                            <label class="checkbox-inline"><input type="checkbox" name="qualification" value="1">社会福祉士</label>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">都道府県 :</label>
                        <div class="col-sm-10">
                            <select data-placeholder="Choose a Country..." name="prefecture" class="chosen-select" style="width:100%;" tabindex="2">
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
                    <div class="form-group"><label class="col-sm-2 control-label">サービス種別 :</label>
                        <div class="col-sm-10">
                            <select data-placeholder="選びなさい" class="chosen-select" name="service_type" style="width:100%;" tabindex="2">
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
                    <div class="form-group"><label class="col-sm-2 control-label">職種 :</label>
                        <div class="col-sm-10">
                            <label class="checkbox-inline"><input type="checkbox" name="job_category" value="1">介護士</label>
                            <label class="checkbox-inline"><input type="checkbox" name="job_category" value="1">訪問介護員</label>
                            <label class="checkbox-inline"><input type="checkbox" name="job_category" value="1">ケアマネージャー</label>
                            <label class="checkbox-inline"><input type="checkbox" name="job_category" value="1">サービス提供責任者</label>
                            <label class="checkbox-inline"><input type="checkbox" name="job_category" value="1">生活相談員</label>
                            <label class="checkbox-inline"><input type="checkbox" name="job_category" value="1">介護事務</label>
                            <label class="checkbox-inline"><input type="checkbox" name="job_category" value="1">管理職</label>
                            <label class="checkbox-inline"><input type="checkbox" name="job_category" value="1">その他</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" value="この条件で検索" class="btn btn-default btn-submit arrow">
                    </div>
                </form>
            </div>
            <div id="scroll_info" style="margin-top:20px;" class="text-center">
                <h4 style="margin-bottom: 0;">詳細を表示</h4>
                <i class="fa fa-3x fa-angle-down"></i>
            </div>
        </div>
    </div>
</section>

<!-- Search again -->
<section id="more">
    <div class="container">
        <div id="open" class="text-right hidden" style="position: relative;">
            <button class="btn btn-smart" style="margin: 20px 50px 10px 0;" >もう一度検索<i class="fa fa-search"></i></button>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <h3 class="text-center"><?php echo $company['name']; ?></h3>
                    <hr/>
                    <div class="col-sm-8">
                        <p class="text-left">
                            <?php echo $company['pr']; ?>
                        </p>
                    </div>
                    <div class="logo-img col-sm-4">
                        <a href="<?php echo $company['link']; ?>" target="_blank" rel="nofollow">
                            <img class="img-responsive" src="<?php echo $company['image']; ?>" />
                        </a>
                    </div>
                    <div class="col-sm-12">
                        <table class="table table-bordered">
                            <tr>
                                <th>仕事携帯</th>
                                <th>資格</th>
                                <th>都道府県</th>
                                <th>サービス種別</th>
                                <th>職種</th>
                            <tr/>
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
                    </div>
                    <div class="col-xs-12">
                        <?php echo $company['additional_text']; ?>
                    </div>
                    <div class="col-xs-12 text-center">
                        <a href="<?php echo $company['link']; ?>" class="btn btn-smart" target="_blank"><?php echo $company['text']; ?><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- recommendation -->
                <div id="side-recommend">
                    <div class="row text-center">
                        <h3>おすすめ求人</h3>
                        <hr/>
                        <p>新着求人</p>
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
                        <p>人気求人</p>
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

<!-- Bootstrap core JavaScript -->
<script src="assets/jquery/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/jquery/jquery-ui-1.10.4.min.js"></script>
<script src="assets/chosen/chosen.jquery.js"></script>
<script src="assets/jquery/script.js"></script>

<script>
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
    $('#close').on('click', function(e) {
        $('#search').fadeOut("slow");
        $("div#open").removeClass("hidden");
    });
    $('#open').on('click', function() {
        $('#search').fadeIn("slow");
        $("div#open").addClass("hidden");
    });
    $("#scroll_info").click(function() {
        $('html, body').animate({
            scrollTop: $("#more").offset().top
        }, 1000);
    });
</script>
</body>

</html>
