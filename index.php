<?php
    require_once "recom.php";
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
    <section id="search">
        <div class="container">
            <div id="search-box">
                <h4> 下記選択肢からご希望にあった条件をご選択ください。</h4>
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
            </div>
        </div>
    </section>

    <!-- recommendation -->
    <section id="recomendation" class="inner">
        <div class="container">
            <div class="row">
                <div class=" text-center">
                    <h3>おすすめ求人</h3>
                </div>
                <hr/>
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-recomend">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="active" id="tab-1">新着求人</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" id="tab-2">人気求人</a>
                                </div>
                            </div>
                            <hr style="margin: 10px 0;">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div id="tab-1-content">
                                <div class="row">
                                    <?php foreach ($companiesLatest as $latest): ?>
                                    <div class="col-xs-12">
                                        <div class="box row">
                                            <h3 class="text-center"><?php echo $latest['name']; ?></h3>
                                            <hr/>
                                            <div class="col-sm-4">
                                                <a href="<?php echo $latest['link']; ?>" target="_blank" rel="nofollow">
                                                    <img border="0" width="200" height="200" alt="" src="<?php echo $latest['image']; ?>">
                                                </a>

                                            </div>
                                            <div class="col-sm-8">
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th>仕事携帯</th>
                                                        <th>資格</th>
                                                        <th>都道府県</th>
                                                        <th>サービス種別</th>
                                                        <th>職種</th>
                                                    <tr/>
                                                    <tr>
                                                        <?php if ($latest['work_mobile'] == 1): ?>
                                                            <td>
                                                                <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                            </td>
                                                        <?php else: ?>
                                                            <td>
                                                                <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                                            </td>
                                                        <?php endif; ?>
                                                        <?php if ($latest['qualification'] == 1): ?>
                                                            <td>
                                                                <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                            </td>
                                                        <?php else: ?>
                                                            <td>
                                                                <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                                            </td>
                                                        <?php endif; ?>
                                                        <?php if ($latest['prefecture'] == 1): ?>
                                                            <td>
                                                                <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                            </td>
                                                        <?php else: ?>
                                                            <td>
                                                                <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                                            </td>
                                                        <?php endif; ?>
                                                        <?php if ($latest['service_type'] == 1): ?>
                                                            <td>
                                                                <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                            </td>
                                                        <?php else: ?>
                                                            <td>
                                                                <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                                            </td>
                                                        <?php endif; ?>
                                                        <?php if ($latest['job_category'] == 1): ?>
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
                                                    <?php echo $latest['pr']; ?>
                                                </p>
                                            </div>
                                            <div class="col-xs-12 text-center" style="margin-top: 20px;">
                                                <?php if ($latest['additional_info'] == 1): ?>
                                                    <a href="<?php echo 'detail.php?id='.$latest['id']; ?>" class="btn btn-gray" target="_blank"> 詳細を確認 <i class="fa fa-angle-double-right"></i></a>
                                                <?php endif; ?>
                                                <a class="btn btn-smart" href="<?php echo $latest['link']; ?>" target="_blank" rel="nofollow"><?php echo $latest['text']; ?></a>
                                                <img border="0" width="1" height="1" src="https://www18.a8.net/0.gif?a8mat=2TMS6I+4620I+2CDI+BZ8OY" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div id="tab-2-content" style="display:none;">
                                <div class="row">
                                    <?php foreach ($companiesPopular as $popular): ?>
                                        <div class="col-xs-12">
                                            <div class="box row">
                                                <h3 class="text-center"><?php echo $popular['name']; ?></h3>
                                                <hr/>
                                                <div class="col-sm-4">
                                                    <a href="<?php echo $popular['link']; ?>" target="_blank" rel="nofollow">
                                                        <img border="0" width="200" height="200" alt="" src="<?php echo $popular['image']; ?>"></a>
                                                    <img border="0" width="1" height="1" src="https://www14.a8.net/0.gif?a8mat=2TMS6I+4620I+2CDI+C2VV5" alt="">
                                                </div>
                                                <div class="col-sm-8">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th>仕事携帯</th>
                                                            <th>資格</th>
                                                            <th>都道府県</th>
                                                            <th>サービス種別</th>
                                                            <th>職種</th>
                                                        <tr/>
                                                        <tr>
                                                            <?php if ($popular['work_mobile'] == 1): ?>
                                                                <td>
                                                                    <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                                </td>
                                                            <?php else: ?>
                                                                <td>
                                                                    <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                                                </td>
                                                            <?php endif; ?>
                                                            <?php if ($popular['qualification'] == 1): ?>
                                                                <td>
                                                                    <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                                </td>
                                                            <?php else: ?>
                                                                <td>
                                                                    <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                                                </td>
                                                            <?php endif; ?>
                                                            <?php if ($popular['prefecture'] == 1): ?>
                                                                <td>
                                                                    <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                                </td>
                                                            <?php else: ?>
                                                                <td>
                                                                    <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                                                </td>
                                                            <?php endif; ?>
                                                            <?php if ($popular['service_type'] == 1): ?>
                                                                <td>
                                                                    <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                                </td>
                                                            <?php else: ?>
                                                                <td>
                                                                    <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                                                </td>
                                                            <?php endif; ?>
                                                            <?php if ($popular['job_category'] == 1): ?>
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
                                                        <?php echo $popular['pr']; ?>
                                                    </p>
                                                </div>
                                                <div class="col-xs-12 text-center" style="margin-top: 20px;">
                                                    <?php if ($popular['additional_info'] == 1): ?>
                                                        <a href="<?php echo 'detail.php?id='.$popular['id']; ?>" class="btn btn-gray" target="_blank"> READ MORE <i class="fa fa-angle-double-right"></i></a>
                                                    <?php endif; ?>
                                                    <a class="btn btn-smart" href="<?php echo $popular['link']; ?>" target="_blank" rel="nofollow"><?php echo $popular['text']; ?></a>
                                                    <img border="0" width="1" height="1" src="https://www18.a8.net/0.gif?a8mat=2TMS6I+4620I+2CDI+BZ8OY" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
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

        $(function() {
            $('#tab-1').click(function(e) {
                $("#tab-1-content").delay(100).fadeIn(100);
                $("#tab-2-content").fadeOut(100);
                $('#tab-2').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#tab-2').click(function(e) {
                $("#tab-2-content").delay(100).fadeIn(100);
                $("#tab-1-content").fadeOut(100);
                $('#tab-1').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
        });
    </script>
</body>

</html>
