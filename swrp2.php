<?php
$title="[SWRP] Phase 2";
require __DIR__ . '/header2.php';
$bz2 = R::getAssoc('SELECT * FROM bz2');
?>
<?php
// ВТОРОЙ СЕРВЕР
$url2="http://83.234.136.125:3334/players2";
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_URL,$url2);
curl_setopt($ch2, CURLOPT_TIMEOUT, 3);
$result2=json_decode(curl_exec($ch2), true);
curl_close($ch2);
 ?>
<?php
// MAPS
if ($result2['map'] == "rp_corellia_ngg_winter" or $result2['map'] == "rp_corellia_ngg") {
	$map2 = "Corellia";
	$desc2 = "База";
} elseif ($result2['map'] == "ngg_sw_m3") {
	$map2 = "Tatooine";
	$desc2 = "Симуляция сражения";
} elseif ($result2['map'] == "ngg_sw_m12") {
	$map2 = "Takodana";
	$desc2 = "Превосходство";
} elseif ($result2['map'] == "ngg_sw_m6") {
	$map2 = "Geonosis";
	$desc2 = "Цитадель";
} elseif ($result2['map'] == "ngg_sw_m10") {
	$map2 = "Korriban";
	$desc2 = "Контроль территорий";
} elseif ($result2['map'] == "ngg_sw_m11") {
	$map2 = "Naboo";
	$desc2 = "Симуляция сражения";
} elseif ($result2['map'] == "ngg_sw_m4") {
	$map2 = "Tatooine";
	$desc2 = "Цитадель";
	$sim2 = "1";
} elseif ($result2['map'] == "ngg_sw_m7") {
	$map2 = "Geonosis";
	$desc2 = "Цитадель";
	$gen2 = "1";
} elseif ($result2['map'] == "ngg_sw_m5") {
	$map2 = "Naboo";
	$desc2 = "Превосходство";
	$nabo2 = "1";
} elseif ($result2['map'] == "ngg_sw_m13") {
	$map2 = "Mygeeto";
	$desc2 = "Контроль территорий";
} else {
	$map2 = "Corellia";
	$desc2 = "База";
}
?>
<script src="jquery-3.6.0.min.js"></script>
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<!--SCRYPT-->
    <script>

    $(document).ready(function () {
    	
    var map2 = '<?php echo $map2 ?>';
    
    var sim2 = '<?php echo $sim2 ?>';
    
    var gen2 = '<?php echo $gen2 ?>';
    
    var nabo2 = '<?php echo $nabo2 ?>';
    
    var _0xe908=["\x43\x6F\x72\x65\x6C\x6C\x69\x61","\x6D\x61\x70\x2D\x63\x6F\x72\x65\x6C\x6C\x69\x61","\x74\x6F\x67\x67\x6C\x65\x43\x6C\x61\x73\x73","\x2E\x73\x65\x63\x6F\x6E\x64","\x54\x61\x74\x6F\x6F\x69\x6E\x65","\x31","\x6D\x61\x70\x2D\x74\x61\x74\x6F\x6F\x69\x6E\x65\x5F\x73\x69\x6D","\x47\x65\x6F\x6E\x6F\x73\x69\x73","\x6D\x61\x70\x2D\x67\x65\x6F\x6E\x6F\x73\x69\x73\x32","\x4E\x61\x62\x6F\x6F","\x6D\x61\x70\x2D\x6E\x61\x62\x6F\x6F\x32","\x4B\x6F\x72\x72\x69\x62\x61\x6E","\x6D\x61\x70\x2D\x6B\x6F\x72\x72\x69\x62\x61\x6E","\x6D\x61\x70\x2D\x6E\x61\x62\x6F\x6F","\x6D\x61\x70\x2D\x74\x61\x74\x6F\x6F\x69\x6E\x65","\x54\x61\x6B\x6F\x64\x61\x6E\x61","\x6D\x61\x70\x2D\x74\x61\x6B\x6F\x64\x61\x6E\x61","\x6D\x61\x70\x2D\x67\x65\x6F\x6E\x6F\x73\x69\x73","\x4D\x79\x67\x65\x65\x74\x6F","\x6D\x61\x70\x2D\x6D\x79\x67\x65\x65\x74\x6F"];if(map2== _0xe908[0]){$(_0xe908[3])[_0xe908[2]](_0xe908[1])}else {if(map2== _0xe908[4]&& sim2== _0xe908[5]){$(_0xe908[3])[_0xe908[2]](_0xe908[6])}else {if(map2== _0xe908[7]&& gen2== _0xe908[5]){$(_0xe908[3])[_0xe908[2]](_0xe908[8])}else {if(map2== _0xe908[9]&& nabo1== _0xe908[5]){$(_0xe908[3])[_0xe908[2]](_0xe908[10])}else {if(map2== _0xe908[11]){$(_0xe908[3])[_0xe908[2]](_0xe908[12])}else {if(map2== _0xe908[9]){$(_0xe908[3])[_0xe908[2]](_0xe908[13])}else {if(map2== _0xe908[4]){$(_0xe908[3])[_0xe908[2]](_0xe908[14])}else {if(map2== _0xe908[15]){$(_0xe908[3])[_0xe908[2]](_0xe908[16])}else {if(map2== _0xe908[7]){$(_0xe908[3])[_0xe908[2]](_0xe908[17])}else {if(map2== _0xe908[18]){$(_0xe908[3])[_0xe908[2]](_0xe908[19])}}}}}}}}}}
	
});
    </script>
<div class ="content">
    <p class="name-server">
    	Русский StarWars Phase 2 | Быстрая загрузка
    </p>
    <div class="box-online second">
            <div class="text-online2">
            	<svg class="ico" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 107.366 107.366" style="enable-background:new 0 0 107.366 107.366" xml:space="preserve"><path style="fill:#010002" d="M107.366 53.683C107.366 24.082 83.283 0 53.683 0c-4.982 0-9.785.734-14.366 2.011l-.107-.071c-.025.036-.043.075-.068.115C16.595 8.417 0 29.125 0 53.683c0 29.601 24.082 53.683 53.683 53.683 4.985 0 9.785-.734 14.366-2.011l.107.075c.025-.036.047-.075.068-.115 22.546-6.367 39.142-27.078 39.142-51.632zM5.343 56.292H24.69c.193 5.766.837 11.438 2.004 16.942H9.366C7.047 68.002 5.662 62.29 5.343 56.292zm96.679-5.215H82.679c-.197-5.769-.837-11.442-2.008-16.946H98c2.319 5.233 3.704 10.945 4.022 16.946zm-24.554 0h-21.18V34.131h19.061c1.231 5.494 1.915 11.167 2.119 16.946zM56.292 28.924V5.343c2.53.136 5.014.415 7.43.923a85.297 85.297 0 0 1 10.289 22.658H56.292zm-5.215 0h-18.12a86.214 86.214 0 0 1 9.57-22.368 48.285 48.285 0 0 1 8.55-1.213v23.581zm0 5.208v16.946H29.84c.111-5.766.712-11.442 1.85-16.946h19.387zM24.633 51.077H5.34c.319-6.002 1.704-11.717 4.023-16.946h17.046a98.406 98.406 0 0 0-1.776 16.946zm5.265 5.215h21.18v16.942H32.013c-1.228-5.494-1.911-11.166-2.115-16.942zm21.179 22.149v23.581c-2.53-.136-5.018-.415-7.43-.923a85.434 85.434 0 0 1-10.293-22.658h17.723zm5.215 0h18.116a86.375 86.375 0 0 1-9.57 22.368 47.919 47.919 0 0 1-8.55 1.213V78.441h.004zm0-5.207V56.292h21.237c-.111 5.762-.712 11.438-1.854 16.942H56.292zm26.44-16.942h19.294c-.319 6.002-1.704 11.714-4.023 16.942H80.957a98.28 98.28 0 0 0 1.775-16.942zM95.28 28.924H79.393c-1.943-7.147-4.681-13.993-8.235-20.403 10.136 3.933 18.607 11.173 24.122 20.403zM35.219 8.883c-3.31 6.32-5.848 13.041-7.627 20.038H12.086c5.339-8.93 13.428-16.023 23.133-20.038zM12.086 78.441h15.89c1.94 7.147 4.678 13.993 8.231 20.403-10.135-3.933-18.606-11.173-24.121-20.403zm60.06 20.042c3.31-6.32 5.848-13.041 7.627-20.038H95.28c-5.34 8.929-13.428 16.022-23.134 20.038z"/></svg>
            	<div class = "maps">
                		<div class = "m"><?php echo $map2; ?></div>
                		<div><?php echo $desc2; ?></div>
                	</div>
            </div>
        	<div class="text-online2">
            	<img src="img/phase2/clone2.png" class="ico2">
            	<div id ="onl2"></div>
            	<?php 
                	if ($result2['raw']['numplayers'] != NULL) {
                		echo $result2['raw']['numplayers']."/128"; 
                	} else {
                		echo 'offline';
                	}
            	?>
            </div>
            <?php 
			if ($result2['raw']['numplayers'] != NULL) {
				echo '<div id="difftime"></div>';
			} else {
				echo '<div id="difftime" style="background-color:red;"></div>';
			}
		?>
        </div>
        <h1>Игроки на сервере</h1>
	<div class ="players">
	<script>
        var pl;
        var players;
        function getplayers () {
            $.ajax({
                url: './refs/getplayers2.php',
                method: 'get',
                dataType: 'html',
                async: false,
                data: {type: ''},
                success: function(data){
                    players = data.search('<');
                    pl = data.slice(players);
                    pl.slice(players);
                    players = data.slice(0, players);
                    $('#onl').html(players);
                    $('.players').html(pl);
                    setTimeout(getplayers, 5000);
                }
            });
        }
        getplayers();
    </script>
	</div>
</div>

<?php 
require __DIR__ . '/footer.php'; 
?>