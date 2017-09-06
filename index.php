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

    <!-- Notice -->
    <section id="note">
        <div class="container text-center">
            <p> <i class="fa fa-bell"></i><span> Notice! </span> We are a 3rd party here to find you the best Home care.   </p>
        </div>
    </section>

    <!-- Search -->
    <section id="search">
        <div class="container">
            <div id="search-box">
                <h4> Kidnly select from the below option for the best search results. </h4>
                <hr/>
                <div class="row">
                    <form method="post" class="form-horizontal" action="result.php">
                        <div class="form-group"><label class="col-sm-2 control-label">仕事携帯 :</label>
                            <div class="col-sm-10">
                                <label class="checkbox-inline"><input type="checkbox" name="work_type" value="1">正社員・職員</label>
                                <label class="checkbox-inline"><input type="checkbox" name="work_type" value="1">契約社員</label>
                                <label class="checkbox-inline"><input type="checkbox" name="work_type" value="1">派遣・パート</label>
                                <label class="checkbox-inline"><input type="checkbox" name="work_type" value="1">紹介予定派遣</label>
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
                                <select data-placeholder="Choose a Country..." class="chosen-select" style="width:100%;" tabindex="2">
                                    <option style="display:none;" value="-">選びなさい</option>
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
                                <select data-placeholder="選びなさい" class="chosen-select" style="width:100%;" tabindex="2">
                                    <option style="display:none;" value="-">選びなさい</option>
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
                                <input type="submit" name="submit" value="Search" class="btn btn-default btn-submit arrow "> <i class="fa fa-chevron-right"></i></input>
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
                        <div class="col-md-8 col-md-offset-2">
                            <div id="tab-1-content">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="box row">
                                            <h3 class="text-center">BayCare</h3>
                                            <hr/>
                                            <div class="col-sm-4">
                                                <a href="https://px.a8.net/svt/ejp?a8mat=2TMS6I+4620I+2CDI+C2VV5" target="_blank" rel="nofollow">
                                                    <img border="0" width="200" height="200" alt="" src="https://www23.a8.net/svt/bgt?aid=170704170007&wid=001&eno=01&mid=s00000010935002029000&mc=1"></a>
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
                                                        <td>
                                                            <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                        </td>
                                                    <tr/>
                                                </table>
                                                <p class="text-left">
                                                    進研ゼミでおなじみのベネッセグループの介護士求人紹介サービスです。
                                                    <br/>介護福祉士（介護士）やホームヘルパー、ケアマネージャーなど、介護職の求人転職情報をご紹介。
                                                    <br/>さまざまな勤務形態から、ご自身にあった介護の職場をお探しいただけます。
                                                </p>
                                            </div>
                                            <div class="col-xs-12 text-center" style="margin-top: 20px;">
                                                <button class="btn btn-gray"> READ MORE <i class="fa fa-angle-double-right"></i></button>
                                                <a class="btn btn-smart" href="https://px.a8.net/svt/ejp?a8mat=2TMS6I+4620I+2CDI+BZ8OY" target="_blank" rel="nofollow">あなたに本当に合ったお仕事をご紹介<br>
                                                    ベネッセの介護士お仕事サポート</a>
                                                <img border="0" width="1" height="1" src="https://www18.a8.net/0.gif?a8mat=2TMS6I+4620I+2CDI+BZ8OY" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="box row">
                                            <h3 class="text-center">BayCare</h3>
                                            <hr/>
                                            <div class="col-sm-4">
                                                <img class="img-responsive" src="assets/images/logo/logo2.png" />
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
                                                        <td>
                                                            <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                        </td>
                                                    <tr/>
                                                </table>
                                                <p class="text-left">
                                                    進研ゼミでおなじみのベネッセグループの介護士求人紹介サービスです。
                                                    <br/>介護福祉士（介護士）やホームヘルパー、ケアマネージャーなど、介護職の求人転職情報をご紹介。
                                                    <br/>さまざまな勤務形態から、ご自身にあった介護の職場をお探しいただけます。
                                                </p>
                                            </div>
                                            <div class="col-xs-12 text-center" style="margin-top: 20px;">
                                                <button class="btn btn-gray"> READ MORE <i class="fa fa-angle-double-right"></i></button>
                                                <button class="btn btn-smart"> GO TO WEBSITE  <i class="fa fa-link"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="box row">
                                            <h3 class="text-center">BayCare</h3>
                                            <hr/>
                                            <div class="col-sm-4">
                                                <img class="img-responsive" src="assets/images/logo/logo3.png" />
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
                                                        <td>
                                                            <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-lg fa-times-circle-o" aria-hidden="true"></i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-lg fa-check" aria-hidden="true"></i>
                                                        </td>
                                                    <tr/>
                                                </table>
                                                <p class="text-left">
                                                    進研ゼミでおなじみのベネッセグループの介護士求人紹介サービスです。
                                                    <br/>介護福祉士（介護士）やホームヘルパー、ケアマネージャーなど、介護職の求人転職情報をご紹介。
                                                    <br/>さまざまな勤務形態から、ご自身にあった介護の職場をお探しいただけます。
                                                </p>
                                            </div>
                                            <div class="col-xs-12 text-center" style="margin-top: 20px;">
                                                <button class="btn btn-gray"> READ MORE <i class="fa fa-angle-double-right"></i></button>
                                                <button class="btn btn-smart"> GO TO WEBSITE  <i class="fa fa-link"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2-content" style="display:none;">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="recomend-box">
                                            <div class="text-center"><img class="img-responsive logo" src="assets/images/logo/logo4.png"></div>
                                            <hr style="margin: 5px 0;">
                                            <h4 class="text-center">BayCare</h4>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="recomend-box">
                                            <div class="text-center"><img class="img-responsive logo" src="assets/images/logo/logo5.png"></div>
                                            <hr style="margin: 5px 0;">
                                            <h4 class="text-center">Home Hero</h4>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
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