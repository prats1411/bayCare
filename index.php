<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">

    <!-- plugins -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/chosen/chosen.css" rel="stylesheet">

</head>

<body>

    <!-- Notice -->
    <section id="note">
        <div class="container text-center">
            <p> <i class="fa fa-bell-o"></i><span> Notice! </span> We are a 3rd party here to find you the best Home care.   </p>
        </div>
    </section>

    <!-- Search -->
    <section id="search">
        <div class="container">
            <div id="search-box">
                <h4> Kidnly select from the below option for the best search results. </h4>
                <hr/>
                <div class="row">
                    <form method="post" class="form-horizontal">
                        <div class="form-group"><label class="col-sm-2 control-label">仕事携帯 :</label>
                            <div class="col-sm-10">
                                <label class="checkbox-inline"><input type="checkbox" name="checkbox1" value="">正社員・職員</label>
                                <label class="checkbox-inline"><input type="checkbox" name="checkbox1" value="">契約社員</label>
                                <label class="checkbox-inline"><input type="checkbox" name="checkbox1" value="">派遣・パート</label>
                                <label class="checkbox-inline"><input type="checkbox" name="checkbox1" value="">紹介予定派遣</label>
                            </div>                           
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">資格 :</label>
                            <div class="col-sm-10">
                                <label class="checkbox-inline"><input type="checkbox" value="">介護職員初任者研修</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">介護福祉士</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">ホームヘルパー２級</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">ホームヘルパー１級</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">実務者研修</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">介護職員基礎研修</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">社会福祉士</label>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">都道府県 :</label>
                            <div class="col-sm-10">
                                <select data-placeholder="Choose a Country..." class="chosen-select" style="width:100%;" tabindex="2">
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
                        <div class="form-group"><label class="col-sm-2 control-label">サービス種別 :</label>
                            <div class="col-sm-10">
                                <select data-placeholder="選びなさい" class="chosen-select" multiple style="width:100%;" tabindex="2">
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
                        <div class="form-group"><label class="col-sm-2 control-label">職種 :</label>
                            <div class="col-sm-10">
                                <label class="checkbox-inline"><input type="checkbox" value="">介護士</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">訪問介護員</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">ケアマネージャー</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">サービス提供責任者</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">生活相談員</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">介護事務</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">管理職</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">その他</label>                                
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-default btn-submit icon-right-open">Search </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- recomendation -->
    <section id="recomendation" class="inner">
        <div class="container">
            <div class="row">
                <div class=" text-center">
                    <h3>Our Recommendations</h3>
                </div>
                <hr/>
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-recomend">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="active" id="tab-1">What's New</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" id="tab-2">Most Popular</a>
                                </div>
                            </div>
                            <hr style="margin: 10px 0;">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="tab-1-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="recomend-box">
                                            <div class="text-center"><img class="img-responsive logo" src="assets/images/logo/logo.png"></div>
                                            <hr style="margin: 5px 0;">
                                            <h4 class="text-center">BayCare</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="recomend-box">
                                            <div class="text-center"><img class="img-responsive logo" src="assets/images/logo/logo2.png"></div>
                                            <hr style="margin: 5px 0;">
                                            <h4 class="text-center">Home Hero</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="recomend-box">
                                            <div class="text-center"><img class="img-responsive logo" src="assets/images/logo/logo3.png"></div>
                                            <hr style="margin: 5px 0;">
                                            <h4 class="text-center">Japanese Name</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2-content" style="display:none;">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="recomend-box">
                                            <div class="text-center"><img class="img-responsive logo" src="assets/images/logo/logo4.png"></div>
                                            <hr style="margin: 5px 0;">
                                            <h4 class="text-center">BayCare</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="recomend-box">
                                            <div class="text-center"><img class="img-responsive logo" src="assets/images/logo/logo5.png"></div>
                                            <hr style="margin: 5px 0;">
                                            <h4 class="text-center">Home Hero</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="recomend-box">
                                            <div class="text-center"><img class="img-responsive logo" src="assets/images/logo/logo6.png"></div>
                                            <hr style="margin: 5px 0;">
                                            <h4 class="text-center">Japanese Name</h4>
                                        </div>
                                    </div>
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
