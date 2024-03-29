<?php
ob_start();
require "db.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="e4c9572b8cc0685c" />
    <title><?php echo $title; ?></title>
	<link rel="stylesheet" href="glav.css?148">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
    <script src="jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            
            $('.menu').click(function () {
                if ($('.drop-headmenu').hasClass('not-drop')) {
                    $('.drop-headmenu').removeClass('not-drop').addClass('active-drop');
                    $(this).removeClass('menu').addClass('menu2');
                    $('.h').removeClass('h').addClass('h2');
                    $('.svg').addClass('svg-active');
                    $('.drop-profmenu').removeClass('active-drop2').addClass('not-drop');

                    if ($('.img-prof-head').hasClass('img-prof-head-rotated')) {
                        $('.img-prof-head').removeClass('img-prof-head-rotated');
                    } 
                } else {
                    $('.drop-headmenu').removeClass('active-drop').addClass('not-drop');
                    $('.menu2').removeClass('menu2').addClass('menu');
                    $('.h2').removeClass('h2').addClass('h');
                    $('.svg').removeClass('svg-active');
                    // $('.h').removeClass('not-active');                  
                }
            });
            $('.prof-head').click(function () {
                if ($('.drop-profmenu').hasClass('not-drop')) {
                    $('.drop-profmenu').removeClass('not-drop').addClass('active-drop2');;

                    $('.drop-headmenu').removeClass('active-drop').addClass('not-drop');;
                    $('.menu2').removeClass('menu2').addClass('menu');
                    $('.h2').removeClass('h2').addClass('h');
                } else {
                    $('.drop-profmenu').removeClass('active-drop2').addClass('not-drop');
                }
            });
            // $('.drop-headmenu').mouseleave(function () {
            //     $('.drop-headmenu').removeClass('active-drop').addClass('not-drop');
            //     $('.menu2').removeClass('menu2').addClass('menu');
            // });
            $('.btn-head').hover(function () {
                $('.img-prof-head').removeClass('img-prof-head-rotated');
                $('.drop-profmenu').removeClass('active-drop2');
                $('.drop-profmenu').addClass('not-drop');
                $('.drop-headmenu').removeClass('active-drop');
                $('.drop-headmenu').addClass('not-drop');
                $('.menu2').removeClass('menu2').addClass('menu');
                $('.h2').removeClass('h2').addClass('h');
            });
            $('.img-prof-head').click( function () {
                if ($('.img-prof-head').hasClass('img-prof-head-rotated')) {
                    $(this).removeClass('img-prof-head-rotated');
                } else {
                    $(this).addClass('img-prof-head-rotated');
                }
            });
            if ($(window).width() <= '450') {
                $("#drp3").appendTo($(".head-content"));
                $("#btn-logo").appendTo($(".head-content"));
                $(".menu").appendTo($(".head-content"));
            }
            $("#m1").click(function () {
                if ($('#s1').hasClass("active")) {
                    $('#s1').removeClass("active").addClass('s-not');;
                    $('#t1').removeClass('trngl-active');
                    $('#m4').css('display', 'none')
                    $('#m5').css('display', 'none')
                    event.stopPropagation();
                } else {
                    event.stopPropagation();
                    $('#s1').addClass("active").removeClass('s-not');
                    $('#t1').addClass('trngl-active');
                    console.log('123');
                    $('#m4').css('display', 'block')
                    $('#m5').css('display', 'block')
                }
            });
            $("#m2").click(function () {
                if ($('#s2').hasClass("active")) {
                    $('#s2').removeClass("active").addClass('s-not');
                    $('#t2').removeClass('trngl-active');
                    $('#m7').css('display', 'none')
                    $('#m8').css('display', 'none')
                    event.stopPropagation();
                } else {
                    event.stopPropagation();
                    $('#s2').addClass("active").removeClass('s-not');
                    $('#t2').addClass('trngl-active');
                    $('#m7').css('display', 'block')
                    $('#m8').css('display', 'block')
                    console.log('123');
                }
            });
            $("#m3").click(function () {
                if ($('#s3').hasClass("active2")) {
                    $('#s3').removeClass("active2").addClass('s-not');
                    $('#t3').removeClass('trngl-active');
                    $('#m10').css('display', 'none')
                    event.stopPropagation();
                } else {
                    event.stopPropagation();
                    $('#s3').addClass("active2").removeClass('s-not');
                    $('#t3').addClass('trngl-active');
                    $('#m10').css('display', 'block')
                    console.log('123');
                }
            });
        });
    </script>
    <!-- Yandex.Metrika counter -->
    
    <style>
        @font-face {
    font-family: 'Ubuntu';
    font-style: normal;
    font-weight: 400;
    src: local('Ubuntu'), local('Ubuntu-Regular'),
        url(https://allfont.ru/cache/fonts/ubuntu_1f2dd75c462bddda080b716fbcb96dbc.woff) format('woff'),
        url(https://allfont.ru/cache/fonts/ubuntu_1f2dd75c462bddda080b716fbcb96dbc.ttf) format('truetype');
}
@font-face {
    font-family: 'PT Sans Bold';
    font-style: normal;
    font-weight: 700;
    src: local('PT Sans Bold'), local('PTSans-Bold'),
        url(https://allfont.ru/cache/fonts/pt-sans-bold_8246f63cc9f8e5253561f0af4cf76a07.woff) format('woff'),
        url(https://allfont.ru/cache/fonts/pt-sans-bold_8246f63cc9f8e5253561f0af4cf76a07.ttf) format('truetype');
}
        /* * {
           font-family: 'Ubuntu', arial; 
        } */
        #ball {
            background-image: url(img/prof-logo.png);
            background-size: 100px 100px;
            width: 100px;
            position: absolute;
            cursor:grabbing;
            height: 100px;
            border-radius: 50%;
            transition: all 0.5s linear;
        }
        .menu {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            position: relative;
            text-decoration: none;
            width: 30px;
            height: 25px;
            cursor:pointer;
            color: #fff;
            font-weight: 700;
            padding: 15px;
            border-radius: 10px;
            margin: 10px;
            transition: background-color .3s linear;
        }
        .menu:hover {
            background-color: purple;
        }
        .menu2:hover {
            background-color: #590000;
        }
        /* OLD  */
        /* .menu::after {
            content:"";
            position: absolute;
            width: 30px;
            height: 5px;
            background-color: white;
            border-radius:10px;
            opacity:1;
            left: 6px;
            top: 22px;
            transform: rotate(135deg);
        }
        .menu::before {
            content:"";
            position: absolute;
            width: 30px;
            height: 5px;
            background-color: white;
            border-radius:10px;
            top: 22px;
            opacity: 1;
            right: 6px;
            transform: rotate(45deg);
        } */
        /* OLD  */
        .menu::after {
            content:"";
            position: absolute;
            width: 30px;
            height: 2px;
            background-color: white;
            border-radius:10px;
            opacity:1;
            top: 19%;
            left: 10px;
            transition: all 0.2s linear;
        }
        .menu::before {
            content:"";
            position: absolute;
            width: 30px;
            height: 2px;
            background-color: white;
            border-radius:10px;
            opacity: 1;
            left: 10px;
            transition: all 0.2s linear;
        }
        .menu2::after {
            content:"";
            position: absolute;
            width: 30px;
            height: 2px;
            background-color: purple;
            border-radius:10px;
            opacity:1;
            top: 19%;
            left: 10px;
            transition: all 0.2s linear;
        }
        .menu2::before {
            content:"";
            position: absolute;
            width: 30px;
            height: 2px;
            background-color: purple;
            border-radius:10px;
            opacity: 1;
            left: 10px;
            transition: all 0.2s linear;
        }
        /* OLD */
        /* .h::after {
            content:"";
            position: absolute;
            width: 25px;
            height: 5px;
            background-color: white;
            border-radius:10px;
            left: 17px;
            top: 37px;
        }
        */
        /* OLD */
        .h::after {
            content:"";
            position: absolute;
            width: 30px;
            height: 2px;
            background-color: white;
            border-radius:10px;
            left: 10px;
            bottom:10px;
        }
        .h2::after {
            content:"";
            position: absolute;
            width: 30px;
            height: 2px;
            background-color: purple;
            border-radius:10px;
            left: 10px;
            bottom:10px;
        }
        /* 
        .h2::after {
            content:"";
            position: absolute;
            width: 30px;
            height: 5px;
            background-color: red;
            border-radius:10px;
            left:15px;
            top:34px;
        } */
        .drop-headmenu {
            position:absolute;
            z-index: 100;
            width: 150px;
            height: auto;
            /* top: 86px; */
            pointer-events:none;
            transition: all 0.3s ease-in-out;
            opacity: 1;
            display:flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
        }
        .not-drop {
            top:45px;
            opacity: 0;
            visibility: hidden;
        }
        .active-drop {
            top:73px;
            opacity: 1;
        }
        .active-drop2 {
            top:73px;
            opacity: 1;
        }
        .menu2 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            position: relative;
            text-decoration: none;
            width: 30px;
            height: 25px;
            cursor:pointer;
            color: #fff;
            font-weight: 700;
            padding: 15px;
            border-radius: 10px;
            margin: 10px;
            transition: background-color .3s linear;
        }
        .razdel {
            padding:5px;
            margin: 5px;
            text-align: center;
            width:100%;
            box-sizing: border-box;
            color:white;
            font-size: 20px;
            position: relative;
            pointer-events: auto;
            background: black;
            font-weight: bold;
            outline: 2px solid #ffffff30;
        }
        .razdel::after {
            content: "";
            position: absolute;
            background-color: #c400c4;
            width: 20px;
            height: 20px;
            right: -2px;
            top: -2px;
            z-index: -1;
        }
        .razdel::before {
            content: "";
            position: absolute;
            background-color: #c400c4;
            width: 20px;
            height: 20px;
            left: -2px;
            top: -2px;
            z-index: -1;
        }
        .bord1::after {
            content: "";
            position: absolute;
            background-color: #c400c4;
            width: 20px;
            height: 20px;
            right: -2px;
            bottom: -2px;
            z-index: -1;
        }
        .bord1::before {
            content: "";
            position: absolute;
            background-color: #c400c4;
            width: 20px;
            height: 20px;
            left: -2px;
            bottom: -2px;
            z-index: -1;
        }
        .bord2::after {
            content: "";
            position: absolute;
            background-color: #c400c4;
            width: 20px;
            height: 20px;
            z-index: -1;
            right: -2px;
            bottom: -2px;
        }
        .bord2::before {
            content: "";
            position: absolute;
            background-color: #c400c4;
            width: 20px;
            height: 20px;
            z-index: -1;
            left: -2px;
            bottom: -2px;
        }
        .bord3::after {
            content: "";
            position: absolute;
            background-color: #c400c4;
            width: 20px;
            height: 20px;
            z-index: -1;
            right: -2px;
            bottom: -2px;
        }
        .bord3::before {
            content: "";
            position: absolute;
            background-color: #c400c4;
            width: 20px;
            height: 20px;
            z-index: -1;
            left: -2px;
            bottom: -2px;
        }
        .link {
            padding:5px;
            text-align: center;
            display: none;
            width:100%;
            box-sizing: border-box;
            position: relative;
            pointer-events: auto;
            /* transition: all 0.2s linear; */
            font-size:14px;
            font-style: italic;
            color:white;
            cursor: pointer;
        }
        .link2 {
            
        }
        .trngl {
            position: absolute;
            /* display:none; */
            width: 0;
            left: 0;
            top: 0px;
            height: 0;
            /* border-top: 17px solid transparent;
            border-left: 27px solid purple;
            border-bottom: 17px solid transparent; */
            transition: all 0.2s linear;
        }
        .trngl::after {
            content: "";
            position: absolute;
            background-color: purple;
            width: 20px;
            height: 20px;
            z-index: -1;
        }
        .trngl-active {

        }
        #m8:hover, #m7:hover, #m5:hover, #m4:hover, #m10:hover {
            outline: 2px solid #00748e;
        }
        #m4::after, #m5::after, #m7::after, #m8::after {
            content: "";
            position: absolute;
            width: 20px;
            height: 27px;
            background-color: #00748e;
            opacity: 0;
            left: 0;
            top: 0;
            /* transition: all 0.2s linear; */
        }
        #m10::after {
            content: "";
            position: absolute;
            width: 20px;
            height: 27px;
            background-color: #00748e;
            opacity: 0;
            left: 0;
            top: 0;
            /* transition: all 0.2s linear; */
            border-radius: 0px 0px 0px 13px;
        }
        #m4:hover::after, #m5:hover::after, #m7:hover::after, #m8:hover::after, #m10:hover::after {
            opacity: 1;
        }
        #l1::after {
            content: "";
            position: absolute;
            width: 20px;
            height: 27px;
            background-color: #00748e;
            opacity: 0;
            left: 0;
            top: 0;
            /* transition: all 0.2s linear; */
        }
        #l2::after {
            content: "";
            position: absolute;
            width: 20px;
            height: 27px;
            background-color: #00748e;
            opacity: 0;
            left: 0;
            top: 0;
            /* transition: all 0.2s linear; */
            border-radius: 0px 0px 0px 12px;
        }
        #l1:hover::after, #l2:hover::after {
            opacity: 1;
        }
        #l1:hover {
            outline: 2px solid #00748e;
        }
        #l2:hover {
            outline: 2px solid #00748e;
            border-radius: 0px 0px 13px 13px;
        }
        /* .link:hover {
            background-color: purple;
        } */
        .prof-head {
            display:flex;
            align-items: center;
            position: relative;
            justify-content: center;
        }
        .img-prof-head {
            width: 60px;
            border: 3px solid #00748e;
            border-radius: 50%;
            transition: all 0.3s linear;
        }
        .img-prof-head2 {
            width: 60px;
            border: 3px dotted #00748e;
            border-radius: 50%;
            transition: all 0.3s linear;
        }
        .img-prof-head:hover, .img-prof-head2:hover {
            border: 3px solid purple;
        }
        .drop-profmenu {
            position:absolute;
            background-color:black;
            z-index: 100;
            width: 200px;
            height: auto;
            /* top: 86px; */
            border: 2px solid white;
            border-radius: 15px;
            pointer-events:none;
            transition: all 0.3s ease-in-out;
            display:flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
        }
        .img-prof-head-rotated {
            transform: rotate(90deg);
        }
        .img-prof-active {
            border: 3px dotted purple;
        }
        .svg {
            filter: invert(1);
            transform: rotateZ(180deg);
            position: absolute;
            top: 0px;
            width: 15px;
            right: 5px;
            transition: all 0.2s linear;
        }
        .svg-active {
            transform: rotateZ(90deg);
        }
        .drop-second {
            opacity: 0;
            /* display: flex; */
            flex-direction: column;
            position: relative;
            background-color: black;
            transition: all 0.3s ease;
        }
        .active {
            display: flex;
            opacity: 1;
            height:54px;
        }
        .active2 {
            display: flex;
            opacity: 1;
            height:27px;
        }
        .s-not {
            height: 0px;
        }
        .razdel-name {
            margin: 5px;
        }
        .razdel-name::after {
            content: "";
            position: absolute;
            width: 20px;
            height: 100%;
            background-color: #b37800;
            left: 0;
            top: 0;
            z-index: 1;
        }
        @keyframes menu {
            100% {
                transform: rotate(45deg);
                background-color: red;
            }
        }
        @keyframes menu2 {
            100% {
                transform: rotate(135deg);
                background-color: red;
            }
        }
        @media screen and (min-width:1300px) {
            #drp3 {
                display: none;
            }
        }
        @media screen and (max-width:1300px) {
            #log, #reg {
                display: none;
            }
            #drp3 {
                display: flex;
            }
            .drop-headmenu {
                right: 0px;
            }
        }
        @media screen and (max-width:950px) {
            #text-logo, #box {
                display: none !important;
            }
        }
        @media screen and (max-width:450px) {
            #drp1, #drp2 {
                display: none;
            }
            #m3, #m4, #m5, #m6, #m7, #m8 {
                display: block !important;
            }
            .head-content {
                justify-content: space-between;
            }
            #btn-logo {
                margin: 10px;
            }
            .drop-profmenu {
                left: 0;
            }
            .prof-head {
                margin: 10px;
            }
        }
        /* > max-width */
        /* < min-width */
    </style>
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(87038010, "init", {
        clickmap:false,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/87038010" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>
<header class="head">
    <div class="head-content">
        <div id="box" style="display: flex; align-items:center;">
            <a href="." id="btn-logo"></a>
            <a href="." style="text-decoration:none;"><p id="text-logo">STAR WARS RP NGG</p></a>
        </div>
        <div id="drp1" class="drop-server">
        	<a class="btn-head">SWRP Phase 1<img src="img/chev.svg" class="chev" /></a>
        	<div class="drop-cont">
        		<a href="swrp1">Игроки Phase 1</a>
        		<a href="top-online?phase=1">Топ онлайн Phase 1</a>
        	</div>
        </div>
        <div id="drp2" class="drop-server">
        	<a class="btn-head">SWRP Phase 2<img src="img/chev.svg" class="chev"/></a>
        	<div class="drop-cont">
        		<a href="swrp2">Игроки Phase 2</a>
        		<a href="top-online?phase=2">Топ онлайн Phase 2</a>
        	</div>
        </div>
        <?php 
        	if(isset($_SESSION['logged_user'])) {
        		$a = " | ";
                $user = R::findOne('usersbz', 'number = :n AND phase = :ph', [':n' => $_SESSION['logged_user']->number, ':ph' => $_SESSION['logged_user']->phase]);
        		echo '<div style="display:flex;" id ="drp3" class="prof-head">
                <a style="cursor:pointer;"><img src="'.$user['avatar'].'" class="img-prof-head2" /></a>
                <div class="drop-profmenu not-drop">
                    <div class="razdel" style="border-radius: 13px 13px 0px 0px;">Профиль</div>
                    <a id="l1" href="profile" class="link">'.$_SESSION['logged_user']->number.$a.$_SESSION['logged_user']->name.'</a>
                    <a id="l2" href="logout" class="link">Выйти</a>
                </div>
            </div>';
        	} else {
        		echo '<a id="log" href="login" class="reg-head" id="f">Вход</a>';
        		echo '<a id="reg" href="signup" class="reg-head" id="s">Регистрация</a>';
                echo '<div id ="drp3" class="prof-head">
                <a style="cursor:pointer;"><img src="img/prof-logo.png" class="img-prof-head" /></a>
                <div class="drop-profmenu not-drop">
                    <div class="razdel" style="border-radius: 13px 13px 0px 0px;">Профиль</div>
                    <a id="l1" href="login" class="link">Войти</a>
                    <a id="l2" href="signup" class="link">Регистрация</a>
                </div>
            </div>';
        	}
    	?>
        <div class="menu">
            <img src="img/chev.svg" class="svg" style="top:7%;" />
            <img src="img/chev.svg" class="svg" style="top:37%;" />
            <img src="img/chev.svg" class="svg" style="top:67%;" />
            <a href="#" class="h"></a>
            <div class="drop-headmenu not-drop">
                <!-- <div  class="razdel" id="m3">Phase 1</div>
                <a  href="swrp1" class="link" id="m4">Игроки</a>
                <a  href="top-online?phase=1" class="link" id="m5">Топ онлайн</a>
                <div  class="razdel" id="m6">Phase 2</div>
                <a  href="swrp2" class="link" id="m7">Игроки</a>
                <a  href="top-online?phase=2" class="link" id="m8">Топ онлайн</a>
                <div class="razdel" id="m9">Прочее</div>
                <a href="stats" class="link" id="m10">Статистика</a> -->
                <!-- style="display:none;" -->
                <div class="razdel" id="m1">
                    <div class="bord1"></div>
                    <!-- <div id="t1" class="trngl"></div> -->
                    <p class="razdel-name">Phase 1</p>
                    <div class="drop-second s-not" id ="s1">
                        <a class="link" id="m4" href="swrp1">Игроки</a>
                        <a class="link" id="m5" href="top-online?phase=1">Топ онлайн</a>
                    </div>
                </div>
                <div class="razdel" id="m2">
                    <div class="bord2"></div>
                    <!-- <div id="t2" class="trngl"></div> -->
                    <p class="razdel-name">Phase 2</p>
                    <div class="drop-second s-not" id ="s2">
                        <a class="link" id="m7" href="swrp2">Игроки</a>
                        <a class="link" id="m8" href="top-online?phase=2">Топ онлайн</a>
                    </div>
                </div>
                <div class="razdel" id="m3">
                    <div class="bord3"></div>
                    <!-- <div id="t2" class="trngl"></div> -->
                    <p class="razdel-name">Прочее</p>
                    <div class="drop-second s-not" id ="s3">
                        <a class="link" id="m10" href="stats">Статистика</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>