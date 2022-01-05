<?php
$title="[SWRP] Главная";
require "db.php";
require __DIR__ . '/header.php';
?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(87038010, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/87038010" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php
// ПЕРВЫЙ СЕРВЕР
$url="https://api.trackyserver.com/widget/index.php?id=7448";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url);
$result=json_decode(curl_exec($ch), true);
curl_close($ch);
 ?>
 
<?php
// ВТОРОЙ СЕРВЕР
$url2="https://api.trackyserver.com/widget/index.php?id=660455";
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_URL,$url2);
$result2=json_decode(curl_exec($ch2), true);
curl_close($ch2);
 ?>
<?php
// MAPS
if ($result['map'] == "rp_anaxes_ngg_winter") {
	$map = "Anaxes";
} elseif ($result['map'] == "ngg_sw_m3") {
	$map = "Tatooine";
} elseif ($result['map'] == "ngg_sw_m12") {
	$map = "Takodana";
} elseif ($result['map'] == "ngg_sw_m6") {
	$map = "Geonosis";
} elseif ($result['map'] == "ngg_sw_m10") {
	$map = "Korriban";
} elseif ($result['map'] == "ngg_sw_m11") {
	$map = "Naboo";
} elseif ($result['map'] == "ngg_sw_m4") {
	$map = "Tatooine";
	$sim1 = 1;
} elseif ($result['map'] == "ngg_sw_m7") {
	$map = "Geonosis";
	$sim1 = "1";
} elseif ($result['map'] == "ngg_sw_m5") {
	$map = "Naboo";
	$nabo1 = "1";
} else {
	$map = "Anaxes";
}
if ($result2['map'] == "rp_corellia_ngg_winter") {
	$map2 = "Corellia";
} elseif ($result2['map'] == "ngg_sw_m3") {
	$map2 = "Tatooine";
} elseif ($result2['map'] == "ngg_sw_m12") {
	$map2 = "Takodana";
} elseif ($result2['map'] == "ngg_sw_m6") {
	$map2 = "Geonosis";
} elseif ($result2['map'] == "ngg_sw_m10") {
	$map2 = "Korriban";
} elseif ($result2['map'] == "ngg_sw_m11") {
	$map2 = "Naboo";
} elseif ($result2['map'] == "ngg_sw_m4") {
	$map2 = "Tatooine";
	$sim2 = 1;
} elseif ($result2['map'] == "ngg_sw_m7") {
	$map2 = "Geonosis";
	$sim2 = "1";
} elseif ($result2['map'] == "ngg_sw_m5") {
	$map2 = "Naboo";
	$nabo2 = "1";
}
?>
 <script src="jquery-3.6.0.min.js"></script>
<!--SCRYPT-->
    <script>
    // PRELOADER
    
    // $(window).on('load', function () {
    // 	$('.preloader').addClass('loaded');
    // });
    // if ($(window).on('load')) {
    // 	console.log("lad");
    // } else {
    // 	console.log("lod");
    // }
    
    
    $(document).ready(function () {
    	$('.first').hover(function () {
        	if(!$(this).hasClass('active-server')) {
            	$(this).toggleClass('box-online-hover');
        	}
    	});
    	$('.second').hover(function () {
        	if(!$(this).hasClass('active-server')) {
    		$(this).toggleClass('box-online-hover');
        	}
    	});
    var map = '<?php echo $map ?>';
    var map2 = '<?php echo $map2 ?>';
    
    var sim1 = '<?php echo $sim1 ?>';
    var sim2 = '<?php echo $sim2 ?>';
    
    var gen1 = '<?php echo $gen1 ?>';
    var gen2 = '<?php echo $gen2 ?>';
    
    var nabo1 = '<?php echo $nabo1 ?>';
    var nabo2 = '<?php echo $nabo2 ?>';
    
    if (map == "Anaxes") {
    	$('.first').toggleClass('map-anaxes');
    } else if (map == "Tatooine" && sim1 == "1") {
    	$('.first').toggleClass('map-tatooine_sim'); 
    } else if (map == "Geonosis" && gen1 == "1") {
    	$('.first').toggleClass('map-geonosis2');
    } else if (map == "Naboo" && nabo1 == "1") {
    	$('.first').toggleClass('map-naboo2'); 
    } else if (map == "Korriban") {
    	$('.first').toggleClass('map-korriban');
    } else if (map == "Geonosis") {
    	$('.first').toggleClass('map-geonosis');
    } else if (map == "Tatooine") {
    	$('.first').toggleClass('map-tatooine'); 
    } else if (map == "Takodana") {
    	$('.first').toggleClass('map-takodana');
    } else if (map == "Naboo") {
    	$('.first').toggleClass('map-naboo');
    }
    if (map2 == "Corellia") {
    	$('.second').toggleClass('map-corellia');
    } else if (map2 == "Tatooine" && sim2 == "1") {
    	$('.second').toggleClass('map-tatooine_sim');
    } else if (map2 == "Geonosis" && gen2 == "1"){
    	$('.second').toggleClass('map-geonosis2');
    } else if (map2 == "Naboo" && nabo1 == "1") {
    	$('.second').toggleClass('map-naboo2'); 
    } else if (map2 == "Korriban") {
    	$('.second').toggleClass('map-korriban');
    } else if (map2 == "Naboo") {
    	$('.second').toggleClass('map-naboo');
    } else if (map2 == "Tatooine") {
    	$('.second').toggleClass('map-tatooine'); 
    } else if (map2 == "Takodana") {
    	$('.second').toggleClass('map-takodana');
    } else if (map == "Geonosis") {
    	$('.second').toggleClass('map-geonosis');
    }
});
    </script>
<!--SCRYPT-->
<!--STOP HERE--> <!--STOP HERE--> <!--STOP HERE-->
    <div class="content">

        <div class="menu-content">
            <h3>Добро пожаловать!</h3>
            <p>Это эксперементальная версия сайта, неофициально связанная с проектами SWRP NGG. Данный сайт представляет из себя комплекс взаимосвязанных фреймворков, позволяющих в будущем сделать сайт многофункциональным центром. На данный момент сайту выделен уклон на первый сервер и реализацию небольшой игры, аналога игры динозавра с гугл хрома.
                <br><br>
                Если у вас есть вопросы, предложения или вы нашли баг, обратитесь к Fish'у #3493.
            </p>
        </div>
        <h1 class="online-head">СТАТУС СЕРВЕРОВ</h1>
        <div class="online-log">
        	<p class="name-server">
                Русский StarWars Phase 1 | Быстрая загрузка
            </p>
            <a href="swrp1" style="display:inherit;width:100%;justify-content:center;">
            <div class="box-online first">
                <div class="description">ПОДРОБНЕЕ</div>
                <!--<div class="desc-content1 not-active">-->
                <!--    Карта: <?php echo $map; ?> <br>-->
                <!--    Кол-во игроков: <?php echo $result['playerscount']; ?>-->
                <!--</div>-->
                <div class="text-online1">
                	<img src="img/planet5.png" class="ico"><?php echo $map; ?>
                </div>
                <div class="text-online1">
                	<img src="img/phase1/clone1.png" class="ico2"><?php echo $result['playerscount']; ?>
                </div>
            </div>
            </a>
            <p class="name-server">
                Русский StarWars Phase 2 | Быстрая загрузка
            </p>
            <a href="swrp2" style="display:inherit;width:100%;justify-content:center;">
            <div class="box-online second">
                <div class="description">ПОДРОБНЕЕ</div>
                <!--<div class="desc-content2 not-active">-->
                <!--    Карта: <?php echo $result2['map']; ?> <br>-->
                <!--    Кол-во игроков: <?php echo $result2['playerscount']; ?> <br>-->
                <!--</div>-->
                <div class="text-online2">
                	<img src="img/planet3.png" class="ico"><?php echo $map2; ?>
                </div>
            	<div class="text-online2">
                	<img src="img/phase2/clone2.png" class="ico2"><?php echo $result2['playerscount']; ?>
                </div>
            </div>
            </a>
        </div>
    </div>
<!--STOP HERE--> <!--STOP HERE--> <!--STOP HERE-->
<?php 
require __DIR__ . '/footer.php'; 
?>