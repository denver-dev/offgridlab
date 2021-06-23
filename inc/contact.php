<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="" />
    <meta property="fb:app_id" content="">
    <title>OffGridLab</title>

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PJLQ9VQ');
    </script>
    <!-- End Google Tag Manager -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <!-- CSS読込 -->
    <!-- <link rel="stylesheet" href="assets/css/normalize.css"> -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/pagetop.css">
    <link href="../js/slick.css" rel="stylesheet" type="text/css">
    <link href="../js/slick-theme.css" rel="stylesheet" type="text/css">
    <!-- Base CSS -->
    <link rel="stylesheet" href="../css/base.css">

    <link rel="stylesheet" href="../css/main.css">

    <!-- フォントオーサム -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- ファビコン読込 -->
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <meta http-equiv="imagetoolbar" content="no">
    <!-- 検索有無設定 -->
    <!-- jquery読込 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/easy-rollover.js"></script>
    <script src="https://use.typekit.net/zzb5mon.js"></script>
    <script src="js/modernizr-2.8.3.min.js"></script>
    <script>
    try {
        Typekit.load({
            async: true
        });
    } catch (e) {}
    </script>
    <script type="text/javascript" src="../js/slick.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/modal.js"></script>
    <script type="text/javascript" src="../js/base-color.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>

    <script type="text/javascript" src="../js/jquery.easeScroll.js"></script>
    <!-- バリデーション読込 -->
    <link rel="stylesheet" href="../js/jQuery-Validation-Engine-master/css/validationEngine.jquery.css"
        type="text/css" />
    <script src="../js/jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-ja.js"
        type="text/javascript" charset="utf-8"></script>
    <script src="../js/jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript"
        charset="utf-8"></script>
    <script>
    $(function() {
        jQuery("#form form").validationEngine();
    });
    </script>
    <!-- スムーススクロール -->
    <script type="text/javascript">
    $(function() {
        $('a[href^="#"]').on('click', function() {
            var speed = 1000;
            var href = $(this).attr('href');
            var target = $(href == '#' || href == '' ? 'html' : href);
            var position = target.offset().top;
            $('body,html').animate({
                scrollTop: position
            }, speed, 'swing');
            return false;
        });
    });
    </script>

    <style id='base_val' type='text/css'></style>

    <style type='text/css'>
    table {
        margin: auto;
    }

    /*表示切替*/
    html body .view_pc {
        display: block !important;
    }

    html body table.view_pc {
        display: table !important;
    }

    html body table.view_pc tr {
        display: table !important;
    }

    html body table.view_pc th {
        display: table !important;
    }

    html body table.view_pc td {
        display: table !important;
    }

    html body .view_pctab {
        display: block !important;
    }

    html body table.view_pctab {
        display: table !important;
    }

    html body table.view_pctab tr {
        display: table !important;
    }

    html body table.view_pctab th {
        display: table !important;
    }

    html body table.view_pctab td {
        display: table !important;
    }

    html body .view_tab {
        display: none !important;
    }

    html body .view_sp {
        display: none !important;
    }

    html body .view_tabsp {
        display: none !important;
    }

    @media only screen and (max-width: 1050px) {
        html body .view_pc {
            display: none !important;
        }

        html body .view_pctab {
            display: block !important;
        }

        html body table.view_pctab {
            display: table !important;
        }

        html body table.view_pctab tr {
            display: table !important;
        }

        html body table.view_pctab th {
            display: table !important;
        }

        html body table.view_pctab td {
            display: table !important;
        }

        html body .view_tab {
            display: block !important;
        }

        html body table.view_tab {
            display: table !important;
        }

        html body table.view_tab tr {
            display: table !important;
        }

        html body table.view_tab th {
            display: table !important;
        }

        html body table.view_tab td {
            display: table !important;
        }

        html body .view_sp {
            display: none !important;
        }

        html body .view_tabsp {
            display: block !important;
        }

        html body table.view_tabsp {
            display: table !important;
        }

        html body table.view_tabsp tr {
            display: table !important;
        }

        html body table.view_tabsp th {
            display: table !important;
        }

        html body table.view_tabsp td {
            display: table !important;
        }
    }

    @media only screen and (max-width: 770px) {
        html body .view_pc {
            display: none !important;
        }

        html body .view_pctab {
            display: none !important;
        }

        html body .view_tab {
            display: none !important;
        }

        html body .view_sp {
            display: block !important;
        }

        html body table.view_sp {
            display: table !important;
        }

        html body table.view_sp tr {
            display: table !important;
        }

        html body table.view_sp th {
            display: table !important;
        }

        html body table.view_sp td {
            display: table !important;
        }

        html body .view_tabsp {
            display: block !important;
        }

        html body table.view_tabsp {
            display: table !important;
        }

        html body table.view_tabsp tr {
            display: table !important;
        }

        html body table.view_tabsp th {
            display: table !important;
        }

        html body table.view_tabsp td {
            display: table !important;
        }
    }

    /* エラーメッセージ　赤文字設定 */
    .error_msg {
        color: #ff2e5a !important;
    }
    </style>

    <style type='text/css'>
    @font-face {
        font-family: 'noto_regular';
        src: url(assets/css/fonts/NotoSansCJKjp-Regular.otf);
        font-style: normal;
    }

    @font-face {
        font-family: 'noto_medium';
        src: url(assets/css/fonts/NotoSansCJKjp-Medium.otf);
        font-style: normal;
    }

    @font-face {
        font-family: 'noto_bold';
        src: url(assets/css/fonts/NotoSansCJKjp-Bold.otf);
        font-style: normal;
    }

    @font-face {
        font-family: 'noto_black';
        src: url(assets/css/fonts/NotoSansCJKjp-Black.otf);
        font-style: normal;
    }

    @font-face {
        font-family: 'noto_demilight';
        src: url(assets/css/fonts/NotoSansCJKjp-DemiLight.otf);
        font-style: normal;
    }

    @font-face {
        font-family: 'mont_light_italic';
        src: url(assets/css/fonts/Montserrat-LightItalic.ttf);
        font-style: normal;
    }

    @font-face {
        font-family: 'mont_italic';
        src: url(assets/css/fonts/Montserrat-Italic.ttf);
        font-style: normal;
    }

    .noto_regular {
        font-family: 'noto_regular';
    }

    .noto_medium {
        font-family: 'noto_medium';
    }

    .noto_bold {
        font-family: 'noto_bold';
    }

    .noto_black {
        font-family: 'noto_black';
    }

    .noto_demilight {
        font-family: 'noto_demilight';
    }

    .mont_light_italic {
        font-family: 'mont_light_italic';
    }

    .mont_italic {
        font-family: 'mont_italic';
    }

    .flex_start {
        align-items: flex-start;
    }

    .inline_block {
        display: inline-block;
    }

    .mg_auto {
        margin: 0 auto;
    }

    .txt_mg_0 {
        margin: 0;
    }

    .txt_p_0 {
        padding: 0;
    }

    .txt_pd_l_foot {
        padding-left: 1.1vw;
    }

    .txt_deco {
        text-decoration: none;
    }

    .bg_wht_grey {
        background-color: #f5f5f5;
    }

    .u_line_d_grey {
        border-bottom: solid 1px #475160;
    }

    .u_line_top_d_grey {
        border-top: solid 1px #475160;
    }

    .u_line_right_d_grey {
        border-right: solid 2px #475160;
    }

    .undrag {
        user-drag: none;
        user-select: none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }

    .txt_main_color {
        color: #25664a;
    }

    .relative {
        position: relative;
    }

    #section_7 p {
        color: #25664a;
        font-size: 0.9375vw;
    }

    .active {
        background-color: #25664a !important;
        color: #f5f5f5 !important;
        height: 100% !important;
    }

    .active p {
        color: #f5f5f5 !important;
    }

    .active p span {
        color: #25664a !important;
    }

    .span_active {
        background-color: #ffffff !important;
    }

    /* input[type=submit]{
            padding: 10px 0;
            height: 100px;
            color: #ffffff;
            background-color: #ff7770;
        } */

    @media only screen and (max-width: 1050px) {
        #section_3 .mg-l-2 {
            padding-left: 2vw !important;
            padding-right: 2vw !important;
        }

        #section_3 .custome_width {
            width: 80% !important;
        }

        #section_3 .txtarea_w118 {
            width: 118% !important;
        }

        #section_3 .parent_txtarea {
            width: 100% !important;
        }
    }
    </style>


    <link rel="stylesheet" href="css/sp.css">
</head>

<body>
    <!-- Header -->
    <header>
        <!-- PC -->
        <div class="view_pc">
            <div class="width_100 relative txt_tpad_1 txt_bpad_1">
                <div class="cont_wrapper_65 flex flex_center" style="justify-content: space-between;">
                    <div class="width_14">
                        <a href="index.html" class="" style="display: block;">
                            <div class="width_100 mg_auto">
                                <img src="img/top_logo.png" alt="Off Grid Lab" class="fix_zoom undrag">
                            </div>
                        </a>
                    </div>
                    <div class="width_65">
                        <div class="width_93 mg_auto flex flex_center">
                            <div class="flex flex_center">
                                <a href="../#企業理念" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05 txt_main_color">
                                        企業理念 <span class="txt_lpad_1">／</span>
                                    </p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="../#事業内容" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05 txt_main_color">
                                        事業内容 <span class="txt_lpad_1">／</span></p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="../#SDGsへの取り組み" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05 txt_main_color">
                                        SDGｓ<span class="txt_lpad_1">／</span></p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="../#代表挨拶" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05 txt_main_color">
                                        代表挨拶 <span class="txt_lpad_1">／</span></p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="../#会社概要" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05 txt_main_color">
                                        会社概要 <span class="txt_lpad_1">／</span></p>
                                </a>
                            </div>

                            <div class="flex flex_center">
                                <a href="contact-form.php" style="display: block;">
                                    <p class="noto_regular txt_mg_0 font_75 txt_tpad_05 txt_bpad_05 txt_main_color">
                                        お問い合わせ</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MOBILE -->
        <div class="view_tabsp fixed_top" style=" z-index: 1000000; border-bottom: 2px solid #CCCCCC;">
            <div class="bg_white">
                <div class="cont_wrapper_65 flex flex_center txt_tpad_2 txt_bpad_2">
                    <div class="width_50 mg_auto flex flex_center">
                        <a href="index.html" class="width_95 mg_auto">
                            <img class="fix_zoom" src="img/top_logo.png" alt="Off Grid Lab">
                        </a>
                    </div>
                    <div class="width_10">
                    </div>

                    <div class="width_28">
                    </div>

                    <!-- Hamburger Menu -->
                    <div class="width_10 mg_auto">

                        <div class="width_100 relative txt_center button_container block flex flex_center" id="toggle"
                            style=" z-index:152;">
                            <span class="top width_100 mg_auto"></span>
                            <span class="middle width_100 mg_auto"></span>
                            <span class="bottom width_100 mg_auto"></span>
                            <div class="nav_menu"></div>
                        </div>
                        <!-- <div class="default line_h_100">
                            <p class="line_h_100 txt_mg_0 acumin_m font_75 txt_main_color">MENU</p>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Overlay Menu Open -->
            <div class="overlay" id="overlay" style="z-index:150; overflow-y: scroll; height: 100vh !important;">
                <nav class="overlay-menu">
                    <ul class="width_100 mg_auto flex flex_center">
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                onclick="close_menu();" href="../#企業理念"><span class="noto_medium font_125 white"
                                    style="letter-spacing: 10px;">企業理念</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                onclick="close_menu();" href="../#事業内容"><span class="noto_medium font_125 white"
                                    style="letter-spacing: 10px;">事業内容</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center bold"
                                onclick="close_menu();" href="../#SDGsへの取り組み"><span class="font_125 white noto_medium"
                                    style="letter-spacing: 10px;">SDGｓ</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                onclick="close_menu();" href="../#代表挨拶"><span class="font_125 white noto_medium"
                                    style="letter-spacing: 10px;">代表挨拶</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                onclick="close_menu();" href="../#会社概要"><span class="noto_medium font_125 white"
                                    style="letter-spacing: 10px;">会社概要</span></a>
                            <div class="space_1"></div>
                        </li>
                        <li class="width_100 mg_auto" style="border-bottom: 2px solid #CCCCCC;">
                            <div class="space_1"></div>
                            <a class="width_95 mg_auto font_100 txt_tpad_1 txt_bpad_1 block txt_center"
                                href="contact-form.php"><span class="noto_medium font_125 white"
                                    style="letter-spacing: 10px;">お問い合わせ</span></a>
                            <div class="space_1"></div>
                        </li>

                    </ul>

                </nav>
            </div>


        </div>
    </header>

    <main style="background-color: #f3f3f3;">

        <!-- Section 1 -->
        <section id="section_1">
            <!-- PC -->
            <div class="view_pc" style="background-color:#25664a;">
                <div class="space_3"></div>
                <p class="font_150 white txt_mg_0 line_h_100 noto_regular bold" style="letter-spacing: 10px;">お問い合わせ</p>
                <p class="font_75 white txt_mg_0 mont_light_italic" style="padding: 0;">CONTACT</p>
                <div class="space_05"></div>
                <div class="wrapper_15">
                    <hr class="u_line_t_white">
                </div>
                <div class="space_3"></div>
            </div>
            <!-- SP -->
            <div class="view_tabsp" style="background-color:#25664a; margin-top: 15.5vw;">
                <div class="space_3"></div>
                <p class="font_150 white txt_mg_0 line_h_100 noto_regular bold" style="letter-spacing: 10px;">お問い合わせ</p>
                <p class="font_75 white txt_mg_0 mont_light_italic" style="padding: 0;">CONTACT</p>
                <div class="space_05"></div>
                <div class="wrapper_15">
                    <hr class="u_line_t_white">
                </div>
                <div class="space_3"></div>
            </div>
        </section>

        <!-- Section 2 -->
        <section id="section_2">
            <div class="cont_wrapper_65">
                <div class="space_5"></div>
                <p class="font_100 txt_mg_0 noto_regular txt_main_color bold">必要事項をご記入の上、「確認する」ボタンを押してください。 </p>
                <p class="font_75 txt_mg_0 noto_regular bold" style="color: #ff0000;">※印は必須入力項目です。</p>
                <div class="space_3"></div>
                <!-- PC -->
                <div class="view_pc">
                    <div class="flex" style="justify-content: space-between; align-items: center;">
                        <div class="width_30 active txt_main_color" style="border: 2px solid #25664a;">

                            <p
                                class="font_100 txt_left txt_lpad_2 txt_bpad_2 txt_tpad_2 txt_rpad_2 view_pc noto_demilight">
                                <span class="font_125 white rspace_1 span_active mont_italic"
                                    style="background-color: #25664a; padding: 2px 10px;">1</span>内容入力
                            </p>
                            <p
                                class="font_75 txt_left txt_lpad_1 txt_bpad_2 txt_tpad_2 txt_rpad_1 view_tabsp noto_demilight">
                                <span class="font_100 white rspace_1 span_active mont_italic"
                                    style="background-color: #25664a; padding: 2px 10px;">1</span>内容入力
                            </p>

                        </div>
                        <div class="width_3">
                            <img src="../img/contact/arrow.png" alt="Arrow">
                        </div>
                        <div class="width_30 bg_white" style="border: 2px solid #25664a;">

                            <p
                                class="font_100 txt_main_color txt_left txt_lpad_2 txt_rpad_2 txt_tpad_2 txt_bpad_2 view_pc noto_demilight">
                                <span class="font_125 white rspace_1 mont_italic"
                                    style="background-color: #25664a; padding: 2px 10px;">2</span>内容確認
                            </p>
                            <p
                                class="font_75 txt_main_color txt_left txt_lpad_1 txt_rpad_1 txt_tpad_2 txt_bpad_2 view_tabsp noto_demilight">
                                <span class="font_100 white rspace_1 mont_italic"
                                    style="background-color: #25664a; padding: 2px 10px;">2</span>内容確認
                            </p>

                        </div>
                        <div class="width_3">
                            <img src="../img/contact/arrow.png" alt="Arrow">
                        </div>
                        <div class="width_30 bg_white" style="border: 2px solid #25664a;">
                            <p
                                class="font_100 txt_main_color txt_left txt_lpad_1 txt_rpad_1 txt_tpad_2 txt_bpad_2 view_pc noto_demilight">
                                <span class="font_125 white rspace_1 mont_italic"
                                    style="background-color: #25664a; padding: 2px 10px;">3</span>完了
                            </p>
                            <p
                                class="font_75 txt_main_color txt_left txt_lpad_2 txt_rpad_2 txt_tpad_2 txt_bpad_2 view_tabsp noto_demilight">
                                <span class="font_100 white rspace_1 mont_italic"
                                    style="background-color: #25664a; padding: 2px 10px;">3</span>完了
                            </p>
                        </div>
                    </div>
                </div>
                <!-- SP -->
                <div class="view_tabsp">
                    <div class="flex" style="justify-content: space-between; align-items: center;">
                        <!-- 1 -->
                        <div class="width_30 active txt_main_color txt_lpad_1 txt_bpad_2 txt_tpad_2 txt_rpad_1">
                            <p class="font_125 bg_white wrapper_30 mont_italic" style="color: #25664a !important;">1
                            </p>
                            <span class="font_75 white noto_demilight"
                                style="padding: 2px 10px; display:block;">内容入力</span>

                        </div>
                        <div class="width_3">
                            <img src="../img/contact/arrow.png" alt="Arrow">
                        </div>
                        <!-- 2 -->
                        <div class="width_30 txt_main_color txt_lpad_1 txt_bpad_2 txt_tpad_2 txt_rpad_1 bg_white">
                            <p class="font_125 wrapper_30 mont_italic"
                                style="color: #fff !important; background-color: #25664a">2
                            </p>
                            <span class="font_75 txt_main_color noto_demilight"
                                style="padding: 2px 10px; display:block;">内容確認</span>

                        </div>
                        <div class="width_3">
                            <img src="../img/contact/arrow.png" alt="Arrow">
                        </div>
                        <!-- 3 -->
                        <div class="width_30 txt_main_color txt_lpad_1 txt_bpad_2 txt_tpad_2 txt_rpad_1 bg_white">
                            <p class="font_125 wrapper_30 mont_italic"
                                style="color: #fff !important; background-color: #25664a;">3
                            </p>
                            <span class="font_75 txt_main_color noto_demilight"
                                style="padding: 2px 10px; display:block;">完了</span>
                        </div>
                    </div>
                </div>
                <div class="space_3"></div>
            </div>
        </section>

        <!-- Section 3 -->
        <section id="section_3">
            <form method="post" action="#form" enctype="multipart/form-data" novalidate>

                <div class="">
                    <div class="cont_wrapper_65">
                        <div class="space_3"></div>
                        <!-- 1 -->
                        <div class="wrapper_100 flex">

                            <!-- Spacing -->
                            <div class="space_2 view_tabsp" style="background-color: #f3f3f3;"></div>
                            <!-- 2 -->
                            <div class="width_100 flex_1 txt_lpad_5 mg-l-2 txt_tpad_2 txt_bpad_1 txt_rpad_5"
                                style="justify-content: space-between; align-items: center; background-color: #fff8ec;">
                                <div class="width_25 f_sub txt_left flex" style="justify-content: flex-start;">
                                    <p class="font_75 noto_regular bold view_pc">
                                        会社名
                                        <span class="red">※</span>
                                    </p>
                                    <p class="font_100 noto_regular bold view_tabsp">
                                        会社名
                                        <span class="red">※</span>
                                    </p>
                                </div>
                                <div class="width_75 f_sub txt_left">
                                    <input
                                        class="validate[required] txt_lpad_1 txt_tpad_1 txt_rpad_1 txt_bpad_1 custome_width font_100"
                                        type="text" id="company-name" name="company_name"
                                        style="width:100%;  height: 45px; border: none;"
                                        value="<?php if( !empty($clean['company_name']) ){ echo $clean['company_name']; } ?>">
                                    <?php if( !empty($error['company_name']) ): ?><p
                                        class="error_msg bold txt_left font_75" style="margin: 0; padding-top: 5px;">
                                        <?php echo $error['company_name']; ?>
                                    </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- Spacing -->
                            <div class="space_2 view_tabsp" style="background-color: #f3f3f3;"></div>
                            <!-- 3 -->
                            <div class="width_100 flex_1 txt_lpad_5 mg-l-2 txt_tpad_2 txt_bpad_1 txt_rpad_5"
                                style="justify-content: space-between; align-items: center; background-color: #fff8ec;">
                                <div class="width_25 f_sub txt_left flex" style="justify-content: flex-start;">
                                    <p class="font_75 noto_regular bold view_pc">
                                        お名前
                                        <span class="red">※</span>
                                    </p>
                                    <p class="font_100 noto_regular bold view_tabsp">
                                        お名前
                                        <span class="red">※</span>
                                    </p>
                                </div>
                                <div class="width_75 f_sub txt_left">
                                    <input
                                        class="validate[required] txt_lpad_1 txt_tpad_1 txt_rpad_1 txt_bpad_1 custome_width font_100"
                                        type="text" id="input-name" name="your_name"
                                        style="width: 100%;  height: 45px; border: none;"
                                        value="<?php if( !empty($clean['your_name']) ){ echo $clean['your_name']; } ?>">
                                    <?php if( !empty($error['your_name']) ): ?><p
                                        class="error_msg bold txt_left font_75" style="margin: 0; padding-top: 5px;">
                                        <?php echo $error['your_name']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- Spacing -->
                            <div class="space_2 view_tabsp" style="background-color: #f3f3f3;"></div>
                            <!-- 4 -->
                            <div class="width_100 flex_1 txt_lpad_5 mg-l-2 txt_tpad_2 txt_bpad_1 txt_rpad_5"
                                style="justify-content: space-between; align-items: center; background-color: #fff8ec;">
                                <div class="width_25 f_sub txt_left flex" style="justify-content: flex-start;">
                                    <p class="font_75 noto_regular bold view_pc">
                                        フリガナ
                                        <span class="red">※</span>
                                    </p>
                                    <p class="font_100 noto_regular bold view_tabsp">
                                        フリガナ
                                        <span class="red">※</span>
                                    </p>
                                </div>
                                <div class="width_75 f_sub txt_left">
                                    <input
                                        class="validate[required] txt_lpad_1 txt_tpad_1 txt_rpad_1 txt_bpad_1 custome_width font_100"
                                        type="text" id="input-furigana" name="furigana"
                                        style="width: 100%;  height: 45px; border: none;"
                                        value="<?php if( !empty($clean['furigana']) ){ echo $clean['furigana']; } ?>">
                                    <?php if( !empty($error['furigana']) ): ?><p class="error_msg bold txt_left font_75"
                                        style="margin: 0; padding-top: 5px;"><?php echo $error['furigana']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- Spacing -->
                            <div class="space_2 view_tabsp" style="background-color: #f3f3f3;"></div>
                            <!-- 5 -->
                            <div class="width_100 flex_1 txt_lpad_5 mg-l-2 txt_tpad_2 txt_bpad_1 txt_rpad_5"
                                style="justify-content: space-between; align-items: center; background-color: #fff8ec;">
                                <div class="width_25 f_sub txt_left flex" style="justify-content: flex-start;">
                                    <p class="font_75 noto_regular bold view_pc">
                                        電話番号
                                        <span class="red">※</span>
                                    </p>
                                    <p class="font_100 noto_regular bold view_tabsp">
                                        電話番号
                                        <span class="red">※</span>
                                    </p>
                                </div>
                                <div class="width_75 f_sub txt_left">
                                    <input
                                        class="validate[required,custom[phone],maxSize[13]] txt_lpad_1 txt_tpad_1 txt_rpad_1 txt_bpad_1 custome_width font_100"
                                        type="tel" id="input-tel" name="tel"
                                        style="width: 100%;  height: 45px; border: none;"
                                        value="<?php if( !empty($clean['tel']) ){ echo $clean['tel']; } ?>">
                                    <?php if( !empty($error['tel']) ): ?><p class="error_msg bold txt_left font_75"
                                        style="margin: 0; padding-top: 5px;"><?php echo $error['tel']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- Spacing -->
                            <div class="space_2 view_tabsp" style="background-color: #f3f3f3;"></div>
                            <!-- 6 -->
                            <div class="width_100 flex_1 txt_lpad_5 mg-l-2 txt_tpad_2 txt_bpad_1 txt_rpad_5"
                                style="justify-content: space-between; align-items: center; background-color: #fff8ec;">
                                <div class="width_25 f_sub txt_left flex" style="justify-content: flex-start;">
                                    <p class="font_75 noto_regular bold view_pc">
                                        メールアドレス
                                        <span class="red">※</span>
                                    </p>
                                    <p class="font_100 noto_regular bold view_tabsp">
                                        メールアドレス
                                        <span class="red">※</span>
                                    </p>
                                </div>
                                <div class="width_75 f_sub txt_left">
                                    <input
                                        class="validate[required,custom[email]] txt_lpad_1 txt_tpad_1 txt_rpad_1 txt_bpad_1 custome_width font_100"
                                        type="email" id="input-email" name="email"
                                        style="width: 100%;  height: 45px; border: none;"
                                        value="<?php if( !empty($clean['email']) ){ echo $clean['email']; } ?>">
                                    <?php if( !empty($error['email']) ): ?><p class="error_msg bold txt_left font_75"
                                        style="margin: 0; padding-top: 5px;"><?php echo $error['email']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- Spacing -->
                            <div class="space_2 view_tabsp" style="background-color: #f3f3f3;"></div>
                            <!-- 7 -->
                            <div class="width_100 flex_1 txt_lpad_5 mg-l-2 txt_tpad_2 txt_bpad_1 txt_rpad_5"
                                style="justify-content: space-between; align-items: center; background-color: #fff8ec;">
                                <div class="width_25 f_sub txt_left flex" style="justify-content: flex-start;">
                                    <p class="font_75 noto_regular bold view_pc">
                                        ホームページ
                                    </p>
                                    <p class="font_100 noto_regular bold view_tabsp">
                                        ホームページ=
                                    </p>
                                </div>
                                <div class="width_75 f_sub txt_left">
                                    <input type="text" id="input-home" name="home"
                                        class="txt_lpad_1 txt_tpad_1 txt_rpad_1 txt_bpad_1 custome_width font_100"
                                        style="width: 100%;  height: 45px; border: none;"
                                        value="<?php if( !empty($clean['home']) ){ echo $clean['home']; } ?>">
                                </div>
                            </div>
                            <!-- Spacing -->
                            <div class="space_2 view_tabsp" style="background-color: #f3f3f3;"></div>
                            <!-- 8 -->
                            <div class="width_100 flex_1 txt_lpad_5 mg-l-2 txt_tpad_2 txt_bpad_4 txt_rpad_5"
                                style="justify-content: space-between; background-color: #fff8ec;">
                                <div class="width_25 f_sub txt_left flex" style="justify-content: flex-start;">
                                    <p class="font_75 noto_regular bold view_pc">
                                        お問い合わせ内容
                                        <span class="red">※</span>
                                    </p>
                                    <p class="font_100 noto_regular bold view_tabsp">
                                        お問い合わせ内容
                                        <span class="red">※</span>
                                    </p>
                                </div>
                                <div class="width_75 txt_left parent_txtarea">
                                    <textarea
                                        class="validate[required] txt_lpad_1 txt_tpad_1 txt_rpad_1 txt_bpad_1 font_100"
                                        cols="60" rows="10" type="text" id="input-text" name="contents"
                                        style="resize: none; border: none; width: 100%;"><?php if( !empty($clean['contents']) ){ echo $clean['contents']; } ?></textarea>
                                    <?php if( !empty($error['contents']) ): ?><p class="error_msg bold txt_left font_75"
                                        style="margin: 0; padding-top: 5px;"><?php echo $error['contents']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="space_3 view_pc"></div>

                <div class="cont_wrapper_65 txt_center">
                    <!-- Spacing -->
                    <div class="space_3 view_pc"></div>
                    <div class="space_2 view_tabsp"></div>
                    <p class="font_75 noto_medium txt_main_color bold">個人情報保護に関する同意について</p>
                    <div class="space_2"></div>
                    <p class="font_75 noto_medium txt_main_color bold">
                        入力前に、「個人情報の取り扱いについて」をお読みいただき、記載されている内容に関して同意していただく必要があります。<br>
                        「個人情報の取り扱いについて」をよくお読みいただき、同意していただける場合は下の<br>
                        【「個人情報の取り扱いについて」に同意します】をチェックしお進みください。ただし、このお問い合わせいただいた個人情報の利用目的は<br>
                        本お問い合わせへの対応のため　のみとします。</p>
                    <div class="space_2"></div>
                    <a href="privacy_policy.html" target="_blank" class="font_75 noto_medium blue bold">「個人情報の取り扱いについて」</a>
                    <div class="space_2"></div>
                    <div>
                        <p class="font_75 noto_regular" style="display: flex; justify-content: center;"> <input
                                class="validate[required]" id="agreement" type="checkbox" name="agreement" value="1"
                                style="margin-top: .5%;">
                            「個人情報の取り扱いについて」に同意します</p>
                    </div>
                    <?php if( !empty($error['agreement']) ): ?>
                    <p class="error_msg bold txt_center" style="margin: 0; padding-top: 5px; font-size: 0.7rem;">
                        <?php echo $error['agreement']; ?></p>
                    <?php endif; ?>
                    <div class="space_4"></div>

                    <!-- Button -->

                    <div class="view_pc">
                        <button class="wrapper_40 bg_img square_btn" style="cursor: pointer; border: none;">
                            <img src="../img/contact/ez_btn.png" alt="">
                            <input class=" width_100 t_50 font_100 bold" type="submit" name="btn_confirm" value="確認する"
                                style="top:41%;cursor: pointer; border: none; background:transparent; color:#ffffff;">
                        </button>
                    </div>
                    <!-- PC -->
                    <div class="view_tabsp">
                        <button class="wrapper_75 bg_img square_btn" style="cursor: pointer; border: none;">
                            <img src="../img/contact/ez_btn.png" alt="">
                            <input class=" width_100 t_50 font_100 bold" type="submit" name="btn_confirm" value="確認する"
                                style="top:41%;cursor: pointer; border: none; background:transparent; color:#ffffff;">
                        </button>
                    </div>
                </div>
            </form>
            <div class="space_5"></div>
        </section>
    </main>

    <footer>
        <div class="txt_tpad_1 txt_bpad_1" style="background-color: #25664a;">
            <p class="font_75 white">Copyright (C) 2021 OffGrid-Lab all rights reserved.</p>
        </div>
    </footer>

    <script>
    $("html").easeScroll();

    // Navigation
    $('#toggle').click(function() {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
    });
    </script>


    <script>
    $("html").easeScroll();
    </script>

    <script>
    // Ease Scrolling
    $("html").easeScroll();

    $(document).ready(function() {
        $.fn.scrollView = function() {
            return this.each(function() {
                $('html, body').animate({
                    scrollTop: $(this).offset().top - 100
                }, 1000);
            });
        }

        function check() {
            if ($('.error_msg').is(':visible')) {
                // we're empty. do stuff.
                $('.error_msg:visible:first').scrollView();
            }
        }

        check();

    });
    // Ease Scrolling
    $("html").easeScroll();

    $(document).ready(function() {
        $.fn.scrollView = function() {
            return this.each(function() {
                $('html, body').animate({
                    scrollTop: $(this).offset().top - 100
                }, 1000);
            });
        }

        function check() {
            if ($('.error_msg').is(':visible')) {
                // we're empty. do stuff.
                $('.error_msg:visible:first').scrollView();
            }
        }

        check();

    });
    </script>

    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location
                .hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>