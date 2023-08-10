<?php
require "phpqrcode/qrlib.php";
require "require/rb.php";

function gerarQr($voucher,$file){
	$text = "http://wifi.seamar/login?username=".$voucher."&password=";
	QRcode::png($text, $file);
	}
if (isset($_POST['plano'])){
	$plano = $_POST['plano'];
}
else {
	$plano = "0";
}
if ($plano=="0"){
	$v = "";
}else{
	$voucher = gerar_senha();
	$file = "img/".$voucher.".png";
	if($plano=="2h"){
		if($API->connect($ip,$usuario,$senha)){
			$add = $API->comm("/ip/hotspot/user/add", array(
				'server' => "all",
				'name' => $voucher,
				'password' => "",
				'profile' =>  "2h",
				'limit-uptime' => "02:00:00",
				'limit-bytes-total' => "2048M",
				'comment' =>  ""
			)
			);
			gerarQr($voucher,$file);
			$v = '
			<div class="card" style="width: 12rem;" id="vc">
			<div style="text-align: center;"> <img style="width: 70%; padding-top: 5px;" src="img/logo.png" alt="Card image cap"> </div><hr>
			<div class="card-body"><center>
			  <p class="card-text">VOUCHER</p>
			  <b><h5 class="card-title">'.$voucher.'</h5><HR>
			  <img src="'.$file.'">
			  <h5 class="card-title">2 Horas - 2GB</h5>
			  <h5 class="card-title">R$ 5,00</h5></b>
						</center>
			 
			</div>
			</div>
			';
			$msg = "Voucher: ".$voucher." criado. Plano 2 horas.";
			MSG($msg);
		}
	}
	if($plano=="3d"){
		if($API->connect($ip,$usuario,$senha)){
			$add = $API->comm("/ip/hotspot/user/add", array(
				'server' => "all",
				'name' => $voucher,
				'password' => "",
				'profile' =>  "3d",
				'limit-uptime' => "3d00:00:00",
				'limit-bytes-total' => "20480M",
				'comment' =>  ""
			)
			);
			gerarQr($voucher,$file);
			$v = '
			<div class="card" style="width: 12rem;" id="vc">
			<div style="text-align: center;"> <img style="width: 70%; padding-top: 5px;" src="img/logo.png" alt="Card image cap"> </div><hr>
			<div class="card-body"><center>
			  <p class="card-text">VOUCHER</p>
			  <b><h5 class="card-title">'.$voucher.'</h5><HR>
			  <img src="'.$file.'">
			  <h5 class="card-title">Viagem - Ilimitado</h5>
			  <h5 class="card-title">R$ 40,00</h5></b>
						</center>
			 
			</div>
			</div>
			';
			$msg = "Voucher: ".$voucher." criado. Plano 3 dias.";
			MSG($msg);
			
		}
	}
	if($plano=="10h"){
		if($API->connect($ip,$usuario,$senha)){
			$add = $API->comm("/ip/hotspot/user/add", array(
				'server' => "all",
				'name' => $voucher,
				'password' => "",
				'profile' =>  "10h",
				'limit-uptime' => "10:00:00",
				'limit-bytes-total' => "5120M",
				'comment' =>  ""
			)
			);
			gerarQr($voucher,$file);
			$v = '
			<div class="card" style="width: 12rem;" id="vc">
			<div style="text-align: center;"> <img style="width: 70%; padding-top: 5px;" src="img/logo.png" alt="Card image cap"> </div><hr>
			<div class="card-body"><center>
			  <p class="card-text">VOUCHER</p>
			  <b><h5 class="card-title">'.$voucher.'</h5><HR>
			  <img src="'.$file.'">
			  <h5 class="card-title">10 Horas - 5GB</h5>
			  <h5 class="card-title">R$ 15,00</h5></b>
						</center>
			 
			</div>
			</div>
			';
			$msg = "Voucher: ".$voucher." criado. Plano 10 horas.";
			MSG($msg);
		}
	}
	if($plano=="1d"){
		if($API->connect($ip,$usuario,$senha)){
			$add = $API->comm("/ip/hotspot/user/add", array(
				'server' => "all",
				'name' => $voucher,
				'password' => "",
				'profile' =>  "1d",
				'limit-uptime' => "1d00:00:00",
				'limit-bytes-total' => "10240M",
				'comment' =>  ""
			)
			);
			gerarQr($voucher,$file);
			$v = '
			<div class="card" style="width: 12rem;" id="vc">
			<div style="text-align: center;"> <img style="width: 70%; padding-top: 5px;" src="img/logo.png" alt="Card image cap"> </div><hr>
			<div class="card-body"><center>
			  <p class="card-text">VOUCHER</p>
			  <b><h5 class="card-title">'.$voucher.'</h5><HR>
			  <img src="'.$file.'">
			  <h5 class="card-title">24 Horas - 10GB</h5>
			  <h5 class="card-title">R$ 25,00</h5></b>
						</center>
			 
			</div>
			</div>
			';
			$msg = "Voucher: ".$voucher." criado. Plano 24 horas.";
			//MSG($msg);
			$url = 'https://api.telegram.org/bot6181661995:AAEW6Snyp2ARYRiACJ5h2QaIttpZZQ5MOAE/sendMessage\?chat_id=-927221224&text='.$msg;
			echo "<script>
			varWindow = window.open ('".$url."', 'popup')
			window.setTimeout(varWindow.close(),1000);
			</script>";
		}
	}
}
	

function gerar_senha(){
	$ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
	$senha = str_shuffle($ma);
	return substr(str_shuffle($senha),0,8);
  }

function MSG($msg){

	$token="6181661995:AAEW6Snyp2ARYRiACJ5h2QaIttpZZQ5MOAE";
$grupo="-927221224";

$parametros['chat_id']=$grupo;
$parametros['text']=$msg;
// PARA ACEITAR TAGS HTML
$parametros['parse_mode']='html'; 
// PARA NÃO MOSTRAR O PREVIW DE UM LINK
$parametros['disable_web_page_preview']=true; 

$options = array(
	'http' => array(
	'method'  => 'POST',
	'content' => json_encode($parametros),
	'header'=>  "Content-Type: application/json\r\n" .
				"Accept: application/json\r\n"
	)
);

$context  = stream_context_create( $options );
file_get_contents('https://api.telegram.org/bot'.$token.'/sendMessage', false, $context );
}
function teste($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}
?>