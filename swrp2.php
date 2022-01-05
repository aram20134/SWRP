<?php
$title="[SWRP] Phase 2";
require "db.php";
require __DIR__ . '/header.php';
?>
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
} elseif ($result2['map'] == "ngg_sw_m5") {
	$map = "Naboo";
	$nabo1 = "1";
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
	$sim2 = "2";
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


<div class ="content">
    <p class="name-server">
    	Русский StarWars Phase 2 | Быстрая загрузка
    </p>
    <div class="box-online second">
            <div class="text-online2">
            	<img src="img/planet3.png" class="ico"><?php echo $map2; ?>
            </div>
        	<div class="text-online2">
            	<img src="img/phase2/clone2.png" class="ico2"><?php echo $result2['playerscount']; ?>
            </div>
        </div>
</div>

<?php 
require __DIR__ . '/footer.php'; 
?>