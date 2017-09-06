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
<section id="search" style="padding-top: 30px !important;">
    <div class="text-right" style="position: relative;">
        <button id="close"  class="btn btn_close" style="margin: 0 50px 10px 0;" > Close <i class="fa fa-times"></i></button>
    </div>
    <div class="container">
        <div id="search-box">
            <h4> Kindly select from the below option for the best search results. </h4>
            <hr/>
            <div class="row">
                <form method="get" class="form-horizontal">
                    <div class="form-group"><label class="col-sm-2 control-label">仕事携帯 :</label>
                        <div class="col-sm-10">
                            <label class="checkbox-inline"><input type="checkbox" value="">正社員・職員</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">契約社員</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">派遣・パート</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">紹介予定派遣</label>
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
                        <a href="result.html">
                            <p name="submit" class="btn btn-default btn-submit arrow ">Search <i class="fa fa-chevron-right"></i></p>
                        </a>
                    </div>
                </form>
            </div>
            <div id="scroll_info" style="margin-top:20px;" class="text-center">
                <h4 style="margin-bottom: 0;">Scroll for More Info</h4>
                <i class="fa fa-3x fa-angle-down"></i>
            </div>
        </div>
    </div>
</section>

<section id="more">
    <div class="container">
        <div id="open" class="text-right hidden" style="position: relative;">
            <button class="btn btn-smart" style="margin: 20px 50px 10px 0;" >Search Again <i class="fa fa-search"></i></button>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <h3 class="text-center">BayCare</h3>
                    <hr/>
                    <div class="col-sm-8">
                        <p class="text-left">
                            進研ゼミでおなじみのベネッセグループの介護士求人紹介サービスです。
                            <br/>介護福祉士（介護士）やホームヘルパー、ケアマネージャーなど、介護職の求人転職情報をご紹介。
                            <br/>さまざまな勤務形態から、ご自身にあった介護の職場をお探しいただけます。
                        </p>
                    </div>
                    <div class="logo-img col-sm-4">
                        <img class="img-responsive" src="assets/images/logo/logo.png" />
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
                    </div>
                    <div class="col-xs-12">
                        <h4>Definitions</h4>
                        <p> The use of ur-asahiservice.com, herein referred to as the ‘site’, and the use of all the site’s content and features including all the information, tools, services available, herein referred collectively as the ‘service’, is governed by the following Terms of Use. </p>
                        <h4>Personal information</h4>
                        <p>
                            Generally, personal information about customers is not required for access to this site, but depending on the content of the services used (request for specific information, etc.) would requires the name, address, e-mail address, telephone number. We may also need some other personal information of customers while booking the apartments with UR Residence. In ASC, whenever we request your personal information, we will clearly indicate the purpose of use.
                            Some pages provided by the site use cookies. Cookie is the information that the site provider sends to the user's browser from the server to accumulate on the user's computer to identify the user's computer. ASC may use cookies to gather information on the number of visits to your computer, the pages visited, etc.
                        </p>
                    </div>
                    <div class="col-xs-12 text-center">
                        <button class="btn btn-smart"> GO TO WEBSITE  <i class="fa fa-link"></i></button>
                    </div>
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
