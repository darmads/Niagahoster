<!DOCTYPE html>
<html>
<head>
	<title>Niagahoster</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />
	<style type="text/css">
		@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
		@font-face{
			font-family: montserratr;
			src: url("./assets/fonts/montserrat/Montserrat-Regular.otf");
		}
		@font-face{
			font-family: montserratb;
			src: url("./assets/fonts/montserrat/Montserrat-Bold.otf");
		}
		@font-face{
			font-family: montserratl;
			src: url("./assets/fonts/montserrat/Montserrat-Light.otf");
		}
		*{
			margin: 0; padding: 0;
			color: rgba(0,0,0,.7);
		}
		body{
			background-color: #f8f9fa;
			font-family: montserratl;
			overflow-x: hidden;
		}
		hr{
			margin: 0; padding: 0;
		}
		h1{
			font-size: 35px;
		}
		h2{
			font-size: 30px;
		}
		#footer .row{
			padding: 30px;
		}
		#footer p{
			font-family: montserratl;
		}
		.social-share-btns {
   			display: inline-block;
   			overflow: hidden;
		}
		.social-share-btns .share-btn {
			float: left;
			margin: 0 5px;
			padding: 8px 16px;
			border-radius: 3px;
			color: #fff;
			font-size: 14px;
			line-height: 18px;
			vertical-align: middle;
		}
		.social-share-btns a{
			text-decoration: none;
		}
		@include transition:background 0.2s ease-in-out;
		i {
			margin-right: 5px;
			display: inline-block;
			font-size: 18px;
			vertical-align: middle;
		}
		.share-btn {
			background-color: #95a5a6;
		}
		.share-btn:hover {
			background-color: #798d8f;
		}
		.share-btn-twitter {
			background-color: #00aced;
		}
		.share-btn-twitter:hover {
			background-color: #0087ba;
		}
		.share-btn-facebook {
			background-color: #3b5998;
		}
		.share-btn-facebook:hover {
			background-color: #2d4373;
		}
		.share-btn-reddit {
			background-color: #ed001c;
		}
		.share-btn-reddit:hover {
			background-color: #ba0016;
		}
		#banks{
			width: 80px;
			margin-right: 5px;
			padding: 10px;
			border: 1px solid white;
			border-radius: 8px;
		}
		.pricing .card {
			background-color: #f8f9fa;
			border: 1px solid #e8e8e8;
		}
		.col-lg-3{
			padding: 0;
		}
		.card-body{
			padding: 0;
			text-align: center;
		}
		#harga2{
			padding: 10px;
		}
		#fitur{
			padding: 30px;
		}
		.pricing .card-title {
			margin: 0.5rem 0;
			font-size: 25px;
			font-family: montserratb;
		}
		.card-body p{
			font-size: 12px;
		}
		.pricing .card-price {
			font-size: 3rem;
		}
		.pricing .card-price sup{
			font-size: 1rem;
		}
		.pricing ul li {
			margin-bottom: 1rem;
		}
		.pricing .text-muted {
			opacity: 0.7;
		}
		#social-media li{
			display: inline-block;
		}
		#social-media img{
			width: 70px;
			margin-top: 30px;
			padding: 10px;
		}
		.pricing .btn {
			font-size: 80%;
			border-radius: 5rem;
			font-weight: bold;
			padding: 1rem;
			opacity: 0.7;
			transition: all 0.2s;
		}
		.card-ribbon {
			position: absolute;
			overflow: hidden;
			top: -10px;
			left: -10px;
			width: 114px;
			height: 112px;
		}
		.checked{
			color: #008fee;
		}
		.card-ribbon span {
			position: absolute;
			display: block;
			width: 160px;
			padding: 10px 0;
			background-color: #00b359;
			box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
			color: #fff;
			font-size: 13px;
			text-transform: uppercase;
			text-align: center;
			left: -35px;
			top: 25px;
			transform: rotate(-45deg);
		}
		.card-ribbon::before, .card-ribbon::after {
			position: absolute;
			z-index: -1;
			content: '';
			display: block;
			border: 5px solid #2980b9;
			border-top-color: transparent;
			border-left-color: transparent;
		}
		.card-ribbon::before {
			top: 0;
			right: 0;
		}
		.card-ribbon::after {
			bottom: 0;
			left: 0;
		}
		#harga{
			font-family: montserratb;
			font-size: 40px;
		}
		#harga sup{
			font-family: montserratr;
			font-size: 20px;
		}
		#harga .koma{
			font-family: montserratb;
		}
		@media (min-width: 992px) {
			.pricing .card:hover {
				margin-top: -.25rem;
				margin-bottom: .25rem;
				box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
			}
			.pricing .card:hover .btn {
				opacity: 1;
			}
		}

		.navbar .container{
			padding: 0;
		}
		.navbar-brand{
			max-width: 200px;	
		}
		.navbar-brand img{
			width: 250px;
		}
		.nav-item{
			font-family: montserratr;
			font-weight: bold;
			font-size: 15px;
			padding-left: 5px;
		}
		#atas{
			background-color: #f8f9fa;
			padding: 10px;
			padding-top: 0;
			font-size: 15px;
		}
		#atas i, span{
			padding-left: 5px;
			padding-right: 5px;
		}
		#atas span, a{
			font-family: montserratr;
		}
		#kiriatas a{
			font-family: montserratl;
			font-size: 12px;
			color: rgba(0,0,0,.7);
		}
		#pricetag{
			margin-right: 5px;
			width: 30px;
		}

		.list-display li {
			font-family: montserratl;
			margin-bottom:.4rem;
			font-size: 15px;
		}
		.list-checkmarks {
			padding-left:1.5rem;
		}
		.list-checkmarks li {
			list-style-type:none;
			padding-left:1rem;
		}
		.list-checkmarks li:before {    
			font-family: 'FontAwesome';
			content: "\f058";
			margin:0 10px 0 -28px;
			color: #17aa1c;
		}
		.list-display2 li {
			font-family: montserratr;
			font-size: 15px;
			padding: 10px;
		}
		.list-checkmars2{
			padding-left: 1.5rem;
		}
		.list-checkmarks2 li {
			list-style-type:none;
			padding-left:1rem;
		}
		.list-checkmarks2 li:before {    
			font-family: 'FontAwesome';
			content: "\f058";
			margin:0 15% 0 0px;
			color: #17aa1c;
		}
		#headingkiri{
			padding-top: 20px;
		}
		#headingkiri h1{
			font-family: montserratb;
			color: rgba(0,0,0,.7);;
		}
		#headingkiri h2{
			font-family: montserratl;
			padding-bottom: 10px;
		}
		#headingkanan img{
			width: 90%;
			padding-bottom: 40px;
		}
		#phps{
			padding-top: 30px;
			padding-bottom: 50px;
		}
		#paket{
			text-align: center;
		}
		#paket h2{
			font-family: montserratb;
		}
		#paket h3{
			font-family: montserratl;
			font-size: 25px;
		}
		#phpmantap{
			max-width: 1000px;
			text-align: left;
		}
		#phpmantap h2{
			margin-bottom: 20px;
			text-align: center;
			font-weight: lighter;
			font-size: 25px;
		}
		#garis{
			border-top: 5px solid #e8e8e8;
			padding: 10px;
			margin: auto;
			width: 100px;
		}
		#pendek, #termasuk{
			text-align: center;
		}
		#embeded{
			width: 60px;
		}
		#judul{
			font-family: montserratb;
			font-size: 17px;
			padding-bottom: 0;
			margin-bottom: 0;
		}
		#caption{
			font-family: montserratr;
			font-size: 14px;
		}
		#termasuk h2{
			font-weight: lighter;
			font-size: 25px;
		}
		#termasukgambar .col-md-4{
			padding: 40px;
		}
		#phplist .col-md-3 p{
			margin: 0; padding: 0;
		}
		#phplist{
			padding: 50px;
			margin-left: 10%;
		}
		#phplist p{
			font-family: montserratr;
		}
		.container{
			padding: 20px;
		}
		#bagikan span{
			font-family: montserratr;
			font-size: 15px;
		}
		#bantuan span, #bantuan i, #bantuan b{
			color: white;
		}
		#bantu{
			font-size: 28px;
		}
		#bantuan{
			padding: 20px;
		}
		#bantu b{
			font-family: montserratb;
		}
		.buttonInside{
			position:relative;
			margin-bottom:10px;
		}
		#inputan{
			width:100%;
			padding: 15px;
			padding-left:10px;
			font-size: 12px;
			border-radius: 30px;
			border:none;outline:none;
		}
		#submitemail{
			position:absolute;
			right: 3px;
			top: 3px;
			font-size: 12px;
			border:none;
			outline:none;
			text-align:center;
			font-weight:bold;
			border-radius: 20px;
			padding:12px;
			background-color: #00a2f3;
		}
		#livechat{
			border: 2px solid white;
			padding: 5px;
			padding-right: 25px;
			padding-left: 25px;
			font-size: 18px;
			border-radius: 30px;
			font-family: montserratr;
		}
		.wrapper{
			width: 100vw;
			background-color: #e8e8e8;
		}
		#footer p, #footer a{
			color: #bfbfbf;
			margin-bottom: 5px;
			font-size: 12px;
			font-family: montserratr;
		}
		#footer a::after{
			content: "\a";
    		white-space: pre;
		}
		@media screen and (max-width: 1200px){
			#atas{
				display: none;
			}
		}
		@media screen and (max-width: 1000px){
			.pb-5, .py-5{
				padding: 0!important;
				margin: 0!important;
			}
			.pricing .card{
				box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
			}
			.col-lg-3{
				margin: 10px;
			}
			.mb-5, .my-5{
				margin-bottom: 0!important;
			}
		}
		@media screen and (max-width: 760px){
			#gambar{
				padding: 20px;
			}
			#bayar{
				padding-top: 0!important;
			}
			#footer .col-md-3{
				margin-bottom: 20px;
			}
			#textgambar{
				display: none;
			}
			#bantu{
				font-size: 20px;
			}
			#bantuan{
				padding: 0;
			}
			#bagikan{
				text-align: center;
			}
			.social-share-btns-container{
				margin-top: 10px;
			}
			#bantuan{
				text-align: center;
			}
			#livechat{
				margin-top: 20px;
				font-size: 15px;
			}
			#phplist{
				text-align: center;
				padding: 20px; margin: 0;
			}
		}
		@media screen and (max-width: 480px){
			#bantu{
				font-size: 20px;
			}
			#bantuan{
				text-align: center;
			}
			#livechat{
				margin-top: 20px;
				font-size: 15px;
			}
			h1{
				font-size: 30px;
			}
			h2{
				font-size: 25px;
			}
			#termasukgambar .col-md-4{
				padding: 20px;
			}
			#gambar{
				padding: 20px;
			}
			#textgambar{
				display: none;
			}
			.list-display li{
				font-size: 17px;
			}
			.navbar-brand img{
				width: 180px;
			}
			#kiri ul{
				margin: 0;
			}
			#kanan ul{
				margin: 0;
			}
			.list-display2 li {
				font-family: montserratr;
				font-size: 17px;
				padding: 10px;
			}
			#phplist{
				text-align: center;
				padding: 20px; margin: 0;
			}
		}
		#copyright a, #copyright p{
			font-size: 10px;
		}
		#copyright a{
			display: inline-block;
		}
		b{
			font-family: montserratb!important;
		}
	</style>
</head>
<body>
	<div class="fixed-top">
	<div style="width: 100vw; background-color: #f8f9fa;">
		<div class="container" id="atas">
			<div class="row">
				<div class="float-left" id="kiriatas">
					<img src="./assets/icons/pricetag.png" id="pricetag"><a href="#"><span>Gratis Ebook 9 Cara Cerdas Menggunakan Domain</span></a>
					<a href="javascript:void(0)" onclick="document.getElementById('kiriatas').style.display = 'none';">[ x ]</a>
				</div>
				<div class="ml-auto" style="padding: 10px;">
					<a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span>0274-5305505</span></a>
					<a href="#"><i class="fa fa-comments" aria-hidden="true"></i><span>Live Chat</span></a>
					<a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i><span>Member Area</span></a>
				</div>
			</div>	
		</div>
		<hr />
	</div>
	
<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
	  <div class="container">
	    <a class="navbar-brand" href="#">
	          <img src="logo.png" alt="">
	        </a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	    <div class="collapse navbar-collapse" id="navbarResponsive">
	      <ul class="navbar-nav ml-auto">
	        <li class="nav-item">
	          <a class="nav-link" href="#">Hosting</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Domain</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Server</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Website</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Afiliasi</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Promo</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Pembayaran</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Review</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Kontak</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Blog</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<hr style="padding-bottom: 10px;">
	</div>
	

	<!-- Page Content -->
	<div class="container">
		<div class="row" style="margin-top: 15%;">
			<div class="col-md-6" id="headingkiri">
				<h1>PHP Hosting</h1>
				<h2>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h2>
				<ul class="list-display list-checkmarks">
			        <li>Solusi PHP untuk performa query yang lebih cepat</li>
			        <li>Konsumsi memori yang lebih rendah</li>
			        <li>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</li>
			        <li>Fitur enkripsi IonCube dan Zend Guard Loaders</li>
			    </ul>
			</div>
			<div class="col-md-6" id="headingkanan">
				<img src="./assets/svg/illustration banner PHP hosting-01.svg">
			</div>
		</div>
	</div>
	<hr />
	<div class="container" id="phps">
		<div class="row align-items-center" style="text-align: center;">
			<div class="col-md-4" id="gambar">
				<embed src="./assets/svg/icon PHP Hosting_zendguard.svg">
			</div>
			<div class="col-md-4" id="gambar">
				<embed src="./assets/svg/icon PHP Hosting_composer.svg">
			</div>
			<div class="col-md-4" id="gambar">
				<embed src="./assets/svg/icon PHP Hosting_ioncube.svg">
			</div>
		</div>
		<div class="row align-items-center" id="textgambar" style="padding: 10px;text-align: center;">
			<div class="col-md-4">
				<p>PHP Zend Guard Loader</p>
			</div>
			<div class="col-md-4">
				<p>PHP Composer</p>
			</div>
			<div class="col-md-4">
				<p>PHP IonCube Loader</p>
			</div>
		</div>
	</div>
	<div class="container" id="paket">
		<h2>Paket Hosting Singapura yang Tepat</h2>
		<h3>Diskon 40% + Domain dan SSL Gratis untuk Anda</h3>
	</div>

	<section class="pricing py-5">
	  <div class="container">
	    <div class="row">
	      <div class="col-lg-3">
	        <div class="card mb-5 mb-lg-0">
	          <div class="card-body">
	            <h5 class="card-title text-center">Bayi</h5>
	            <hr>
	            <div id="harga2">
		            <span class="text-muted" style="text-decoration: line-through;" id="hargacoretbayi"></span><br />
		            <span id="harga"><sup>Rp </sup><span id="hargabayi"></span><sup class="koma" id="komabayi"></sup><sup>/bln</sup></span>
		        </div>
	            <hr>
	            <p style="padding-bottom:0; margin-bottom:0; padding: 10px;"><b id="penggunabayi">938</b> Pengguna Terdaftar</p>
	            <hr>
	            <div id="fitur">
		            <p><b>0.5X RESOURCE POWER</b></p>
		            <p><b>500 MB</b> Disk Space</p>
		            <p><b>Unlimited</b> Bandwidth</p>
		            <p><b>Unlimited</b> Databases</p>
		            <p><b>1</b> Domain</p>
		            <p><b>Instant</b> Backup</p>
		            <p><b>Unlimited SSL</b> Gratis Selamanya</p>
		        </div>
	            <button class="btn btn-outline-dark" style="border: 3px solid grey;padding: 10px; padding-left: 20px; padding-right: 20px; font-family: montserratb; margin-bottom: 30px;">Pilih Sekarang</button>
	          </div>
	        </div>
	      </div>
	      <div class="col-lg-3">
	        <div class="card mb-5 mb-lg-0">
	          <div class="card-body">
	            <h5 class="card-title text-center">Pelajar</h5>
	            <hr>
	            <div id="harga2">
		            <span class="text-muted" style="text-decoration: line-through;" id="hargacoretpelajar"></span><br />
		            <span id="harga"><sup>Rp </sup><span id="hargapelajar"></span><sup class="koma" id="komapelajar"></sup><sup>/bln</sup></span>
		        </div>
	            <hr>
	            <p style="padding-bottom:0; margin-bottom:0; padding: 10px;"><b id="penggunapelajar"></b> Pengguna Terdaftar</p>
	            <hr>
	            <div id="fitur">
		            <p><b>1X RESOURCE POWER</b></p>
		            <p><b>Unlimited</b> Disk Space</p>
		            <p><b>Unlimited</b> Bandwidth</p>
		            <p><b>Unlimited</b> POP3 Email</p>
		            <p><b>Unlimited</b> Databases</p>
		            <p><b>10</b> Addon Domain</p>
		            <p><b>Instant</b> Backup</p>
		            <p><b>Domain Gratis</b> Selamanya</p>
		            <p><b>Unlimited SSL</b> Gratis Selamanya</p>
		        </div>
	            <button class="btn btn-outline-dark" style="border: 3px solid grey;padding: 10px; padding-left: 20px; padding-right: 20px; font-family: montserratb; margin-bottom: 30px;">Pilih Sekarang</button>
	          </div>
	        </div>
	      </div>
	      <div class="col-lg-3">
	        <div class="card mb-5 mb-lg-0">
	          <div class="card-body" style="border: 1px solid #008fee; background-color: #008fee;">
	          	<div class="card-ribbon">
	          		<span>Best Seller!</span>
	          	</div>
	          	<div style="background-color: #008fee;">
		            <h5 class="card-title text-center" style="color: white;">Personal</h5>
		            <div id="harga2">
			            <span style="text-decoration: line-through; color:white;" id="hargacoretpersonal"></span><br />
			            <span id="harga" style="color: white;"><sup  style="color: white;">Rp </sup><span id="hargapersonal"></span><sup class="koma" id="komapersonal" style="color: white;"></sup><sup  style="color: white;">/bln</sup></span>
			        </div>
			    </div>
	            <p style="background-color: #007fde; padding-bottom:0; margin-bottom:0; padding: 10px; color: white;"><b style="color: white;" id="penggunapersonal"></b> Pengguna Terdaftar</p>
	            <div style="background-color: #f8f9fa;">
	            <div id="fitur">
		            <p><b>2X RESOURCE POWER</b></p>
		            <p><b>Unlimited</b> Disk Space</p>
		            <p><b>Unlimited</b> Bandwidth</p>
		            <p><b>Unlimited</b> POP3 Email</p>
		            <p><b>Unlimited</b> Databases</p>
		            <p><b>Unlimited</b> Addon Domains</p>
		            <p><b>Instant</b> Backup</p>
		            <p><b>Domain Gratis</b> Selamanya</p>
		            <p><b>Unlimited SSL</b> Gratis Selamanya</p>
		            <p><b>Private</b> Name Server</p>
		            <p><b>SpamAssasin</b> Mail Protection</p>
		        </div>
	            <button class="btn btn-primary" style="padding: 10px; padding-left: 20px; padding-right: 20px; font-family: montserratb; margin-bottom: 30px;">Pilih Sekarang</button>
	        </div>
	          </div>
	        </div>
	      </div>
	      <div class="col-lg-3">
	        <div class="card mb-5 mb-lg-0">
	          <div class="card-body">
	            <h5 class="card-title text-center">Bisnis</h5>
	            <hr>
	            <div id="harga2">
		            <span class="text-muted" style="text-decoration: line-through;" id="hargacoretbisnis"></span><br />
		            <span id="harga"><sup>Rp </sup><span id="hargabisnis"></span><sup class="koma" id="komabisnis"></sup><sup>/bln</sup></span>
		        </div>
	            <hr>
	            <p style="padding-bottom:0; margin-bottom:0; padding: 10px;"><b id="penggunabisnis"></b> Pengguna Terdaftar</p>
	            <hr>
	            <div id="fitur">
		            <p><b>3X RESOURCE POWER</b></p>
		            <p><b>Unlimited</b> Disk Space</p>
		            <p><b>Unlimited</b> Bandwidth</p>
		            <p><b>Unlimited</b> POP3 Email</p>
		            <p><b>Unlimited</b> Databases</p>
		            <p><b>Unlimited</b> Addon Domains</p>
		            <p><b>Magic Auto</b> Backup & Restore</p>
		            <p><b>Domain Gratis</b> Selamanya</p>
		            <p><b>Unlimited SSL</b> Gratis Selamanya</p>
		            <p><b>Private</b> Name Server</p>
		            <p><b>Prioritas</b> Layanan Support</p>
		            <span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<br /><br />
		            <p><b>SpamExpert</b> Pro Mail Protection</p>
		        </div>
	            <button class="btn btn-outline-dark" style="border: 3px solid grey;padding: 10px; padding-left: 20px; padding-right: 20px; font-family: montserratb; margin-bottom: 30px;">Pilih Sekarang</button>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>

	<div class="container" id="phpmantap">
		<h2>Powerful dengan Limit PHP yang Lebih Besar</h2>
		<div class="row align-items-center">
			<div class="col-md-6" id="kiri">
				<ul class="list-display2 list-checkmarks2">
			        <li>max execution time 300s</li>
			        <li style="background-color: #e8e8e8;">max execution time 300s</li>
			        <li>php memory limit 1024 MB</li>
			    </ul>
			</div>
			<div class="col-md-6" id="kanan">
				<ul class="list-display2 list-checkmarks2">
			        <li>post max size 128 MB</li>
			        <li style="background-color: #e8e8e8;">upload max filesize 128 MB</li>
			        <li>max input vars 2500</li>
			    </ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row align-items-center" id="pendek">
			<div class="col-md-12">
				<div id="garis"></div>
			</div>
		</div>
	</div>
	<div class="container" id="termasuk">
		<div class="row">
			<div class="col-md-12">
				<h2>Semua Paket Hosting Sudah Termasuk</h2>
			</div>
		</div>
		<div class="row" id="termasukgambar">
			<div class="col-md-4">
				<embed id="embeded" src="./assets/svg/icon PHP Hosting_PHP Semua Versi.svg"></embed>
				<p id="judul">PHP Semua Versi</p>
				<p id="caption">Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuai Anda!</p>
			</div>
			<div class="col-md-4">
				<embed id="embeded" src="./assets/svg/icon PHP Hosting_My SQL.svg"></embed>
				<p id="judul">MySQL Versi 5.6</p>
				<p id="caption">Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</p>
			</div>
			<div class="col-md-4">
				<embed id="embeded" src="./assets/svg/icon PHP Hosting_CPanel.svg"></embed>
				<p id="judul">Panel Hosting cPanel</p>
				<p id="caption">Kelola website dengan panel canggih yang familiar di hati Anda.</p>
			</div>
		</div>
		<div class="row" id="termasukgambar">
			<div class="col-md-4">
				<embed id="embeded" src="./assets/svg/icon PHP Hosting_garansi uptime.svg"></embed>
				<p id="judul">Garansi Uptime 99.9%</p>
				<p id="caption">Data center yang mendukung kelangsungan website Anda 24/7.</p>
			</div>
			<div class="col-md-4">
				<embed id="embeded" src="./assets/svg/icon PHP Hosting_InnoDB.svg"></embed>
				<p id="judul">Database InnoDB Unlimited</p>
				<p id="caption">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
			</div>
			<div class="col-md-4">
				<embed id="embeded" src="./assets/svg/icon PHP Hosting_My SQL remote.svg"></embed>
				<p id="judul">Wildcard Remote MySQL</p>
				<p id="caption">Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row align-items-center" id="pendek">
			<div class="col-md-12">
				<div id="garis"></div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 style="font-size: 25px; text-align: center;">Mendukung Penuh Framework Laravel</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6" id="headingkiri">
				<p style="font-size: 18px; font-family: montserratl;">Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda</p>
				<ul class="list-display list-checkmarks">
			        <li>Install Laravel <b>1 klik</b> dengan Softaculous Installer.</li>
			        <li>Mendukung ekstensi <b>PHP MCrypt, phar, mbstring, json, </b>dan <b>fileinfo</b>.</li>
			        <li>Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstal packages pilihan Anda.</li>
			    </ul>
			    <p style="font-size: 13px; padding-bottom: 10px;">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
			    <button type="button" class="btn btn-primary" style="border-radius: 20px; padding-left: 20px; padding-right: 20px; font-family: montserratb; margin-bottom: 15px;">Pilih Hosting Anda</button>
			</div>
			<div class="col-md-6" id="headingkanan">
				<img src="./assets/svg/illustration banner support laravel hosting.svg">
			</div>
		</div>
	</div>
	<hr />
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 style="font-size: 25px; text-align: center;">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h2>
			</div>
		</div>
		<div class="row" id="phplist">
			<div class="col-md-3">
				<p>IcePHP</p>
				<p>apc</p>
				<p>apcu</p>
				<p>apm</p>
				<p>ares</p>
				<p>bcmath</p>
				<p>bcompiler</p>
				<p>big_int</p>
				<p>bitset</p>
				<p>bloomy</p>
				<p>bz2_filter</p>
				<p>clamav</p>
				<p>coin_acceptor</p>
				<p>crack</p>
				<p>dba</p>
			</div>
			<div class="col-md-3">
				<p>http</p>
				<p>huffman</p>
				<p>idn</p>
				<p>igbinary</p>
				<p>imagick</p>
				<p>imap</p>
				<p>inclued</p>
				<p>inotify</p>
				<p>interbase</p>
				<p>inti</p>
				<p>ioncube_loader</p>
				<p>ioncube_loader_4</p>
				<p>jsmin</p>
				<p>json</p>
				<p>ldap</p>
			</div>
			<div class="col-md-3">
				<p>nd_pdo_mysql</p>
				<p>oauth</p>
				<p>oci8</p>
				<p>odbc</p>
				<p>opcache</p>
				<p>pdf</p>
				<p>pdo</p>
				<p>pdo_dblib</p>
				<p>pdo_firebird</p>
				<p>pdo_mysql</p>
				<p>pdo_odbc</p>
				<p>pdo_pgsql</p>
				<p>pdo_sqlite</p>
				<p>pgsql</p>
				<p>phalcon</p>
			</div>
			<div class="col-md-3">
				<p>stats</p>
				<p>stem</p>
				<p>stomp</p>
				<p>suhosin</p>
				<p>sybase_ct</p>
				<p>sysvmsg</p>
				<p>sysvsem</p>
				<p>sysvshm</p>
				<p>tidy</p>
				<p>timezonedb</p>
				<p>trader</p>
				<p>translit</p>
				<p>uploadprogress</p>
				<p>uri_template</p>
				<p>uuid</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<button type="button" class="btn btn-outline-dark" style="border-radius: 20px; border: 3px solid grey; padding-left: 20px; padding-right: 20px; font-family: montserratb;">Selengkapnya</button>
			</div>
		</div>
	</div>
	<div class="container" style="padding-top: 50px; padding-bottom: 0; margin-bottom: 0;">
		<div class="row">
			<div class="col-md-12">
				<h2 style="font-size: 25px;">Linux Hosting yang Stabil<br />dengan Teknologi LVE</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6" id="headingkiri">
				<p style="font-size: 15px; font-family: montserratl; padding-bottom: 15px;">SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan teknologi <b>LVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi dengan <b>SSD</b> untuk kecepatan <b>MySQL</b> dan caching, Apache load balancer berbasis LiteSpeed Technologies, <b>CageFS</b> security, <b>Raid-10</b> protection dan auto backup untuk keamanan website PHP Anda.</p>
			    <button type="button" class="btn btn-primary" style="border-radius: 20px; padding-left: 20px; padding-right: 20px; font-family: montserratb; margin-bottom: 15px;">Pilih Hosting Anda</button>
			</div>
			<div class="col-md-6" id="headingkanan">
				<embed style="max-width: 100%;" src="./assets/images/Image support.png">
			</div>
		</div>
	</div>
	<div class="wrapper">
		<div class="container">
			<div class="row align-items-center" id="bagikan">
				<div class="col-md-6">
					<span>Bagikan jika Anda menyukai halaman ini.</span>
				</div>
				<div class="col-md-6">
					<div class="social-share-btns-container" style="text-align: center;">
					  <div class="social-share-btns">
					    <a class="share-btn share-btn-facebook" href="#">
					      <i class="ion-social-facebook" style="color: white;"></i>
					      Share
					    </a>
					    <a class="share-btn share-btn-twitter" href="#">
					      <i class="ion-social-twitter" style="color: white;"></i>
					      Tweet
					    </a>
					    <a class="share-btn share-btn-reddit" href="#">
					      <i class="ion-social-google" style="color: white;"></i>
					      Share
					    </a>
					  </div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper" style="padding: 20px; background-color: #00a2f3;">
		<div class="container">
			<div class="row align-items-center" id="bantuan">
				<div class="col-md-9">
					<span id="bantu">Perlu <b>BANTUAN?</b> Hubungi Kami : <b>0274-5305505</b></span>
				</div>
				<div class="col-md-3">
					<button class="btn btn-outline-light" id="livechat"><i class="fa fa-comments" style="font-size: 25px;"></i>  Live Chat</button>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper" style="background-color: #303030;">
		<div class="container" id="footer">
			<div class="row">
				<div class="col-md-3">
					<p style="color: #8e8e8e; margin-bottom: 0; font-size: 13px;">HUBUNGI KAMI</p>
					<br />
					<p>0274-5305505</p>
					<p>Senin - Minggu</p>
					<p>24 Jam Nonstop</p>
					<br />
					<p>Jl. Selokan Mataram Monjali</p>
					<p>Karangjati MT I/304</p>
					<p>Sinduadi, Mlati, Sleman</p>
					<p>Yogyakarta 55284</p>
				</div>
				<div class="col-md-3">
					<p style="color: #8e8e8e; margin-bottom: 0;font-size: 13px;">LAYANAN</p>
					<br />
					<a href="#">Domain</a>
					<a href="#">Shared Hosting</a>
					<a href="#">Cloud VPS Hosting</a>
					<a href="#">Managed VPS Hosting</a>
					<a href="#">Web Builder</a>
					<a href="#">Keamanan SSL / HTTPS</a>
					<a href="#">Jasa Pembuatan Website</a>
					<a href="#">Program Affiliasi</a>
				</div>
				<div class="col-md-3">
					<p style="color: #8e8e8e; margin-bottom: 0;font-size: 13px;">SERVICE HOSTING</p>
					<br />
					<a href="#">Hosting Murah</a>
					<a href="#">Hosting Indonesia</a>
					<a href="#">Hosting Singapura SG</a>
					<a href="#">Hosting PHP</a>
					<a href="#">Web Builder</a>
					<a href="#">Hosting Wordpress</a>
					<a href="#">Hosting Laravel</a>
				</div>
				<div class="col-md-3">
					<a href="#" style="color: #8e8e8e; margin-bottom: 0;font-size: 13px;">TUTORIAL</a>
					<br />
					<a href="#">Knowledgebase</a>
					<a href="#">Blog</a>
					<a href="#">Cara Pembayaran</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p style="color: #8e8e8e; margin-bottom: 0; font-size: 13px;">TENTANG KAMI</p>
					<br />
					<a href="#">Tim Niagahoster</a>
					<a href="#">Karir</a>
					<a href="#">Events</a>
					<a href="#">Penawaran & Promo Spesial</a>
					<a href="#">Kontak Kami</a>
				</div>
				<div class="col-md-3">
					<p style="color: #8e8e8e; margin-bottom: 0;font-size: 13px;">KENAPA PILIH NIAGAHOSTER?</p>
					<br />
					<a href="#">Support Terbaik</a>
					<a href="#">Garansi Harga Termurah</a>
					<a href="#">Domain Gratis Selamanya</a>
					<a href="#">Datacenter Hosting Terbaik</a>
					<a href="#">Review Pelanggan</a>
				</div>
				<div class="col-md-3">
					<p style="color: #8e8e8e; margin-bottom: 0;font-size: 13px;">NEWSLETTER</p>
					<br />
					<div class="buttonInside">
						<input id="inputan" placeholder="Email" type="email">
						<button class="btn btn-primary" id="submitemail">Berlangganan</button>
					</div>
					<p style="color: #8e8e8e; margin-bottom: 0;">Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda</p>
				</div>
				<div class="col-md-3" style="margin-bottom: 0;">
					<ul id="social-media">
						<li><a href="#" style="color: white;"><img src="./assets/icons/facebook.png"></a></li>
						<li><a href="#" style="color: white;"><img src="./assets/icons/twitter.png"></a></li>
						<li><a href="#" style="color: white;"><img src="./assets/icons/google.png"></a></li>
					</ul>
				</div>
			</div>
			<div class="row" id="bayar">
				<div class="col-md-12">
					<p style="color: #8e8e8e; margin-bottom: 15px;font-size: 13px;">PEMBAYARAN</p>
					<img id="banks" src="./assets/bank/bca.png">
					<img id="banks" src="./assets/bank/mandiri.png">
					<img id="banks" src="./assets/bank/bni.png">
					<img id="banks" src="./assets/bank/visa.png">
					<img id="banks" src="./assets/bank/mastercard.png">
					<img id="banks" src="./assets/bank/atmbersama.png">
					<img id="banks" src="./assets/bank/permata.png">
					<img id="banks" src="./assets/bank/prima.png">
					<img id="banks" src="./assets/bank/alto.png">
					<br />
					<p style="color: #8e8e8e; margin-top: 15px;">Aktivasi instan dengan e-Payment Hosting dan domain langsung aktif!</p>
				</div>
			</div>
			<div class="row" id="copyright">
				<div class="col-md-9">
					<p>Copyright &#169;2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta</p>
					<p>Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology</p>
				</div>
				<div class="col-md-3">
					<p><a href="#">Syarat dan Ketentuan</a> | <a href="#">Kebijakan Privasi</a></p>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script>
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function() {
			if (this.readyState == 4) {
				var obj = JSON.parse(this.responseText);
				var s = obj.bayi.harga;
				var x = s.split('.');
				document.getElementById('hargabayi').innerHTML = x[0];
				document.getElementById('komabayi').innerHTML = "." + x[1] + " ";
				document.getElementById('hargacoretbayi').innerHTML = "Rp " + obj.bayi.hargacoret;
				document.getElementById('penggunabayi').innerHTML = obj.bayi.pengguna;
				s = obj.pelajar.harga;
				x = s.split('.');
				document.getElementById('hargapelajar').innerHTML = x[0];
				document.getElementById('komapelajar').innerHTML = "." + x[1] + " ";
				document.getElementById('hargacoretpelajar').innerHTML = "Rp " + obj.pelajar.hargacoret;
				document.getElementById('penggunapelajar').innerHTML = obj.pelajar.pengguna;
				s = obj.personal.harga;
				x = s.split('.');
				document.getElementById('hargapersonal').innerHTML = x[0];
				document.getElementById('komapersonal').innerHTML = "." + x[1] + " ";
				document.getElementById('hargacoretpersonal').innerHTML = "Rp " + obj.personal.hargacoret;
				document.getElementById('penggunapersonal').innerHTML = obj.personal.pengguna;
				s = obj.bisnis.harga;
				x = s.split('.');
				document.getElementById('hargabisnis').innerHTML = x[0];
				document.getElementById('komabisnis').innerHTML = "." + x[1] + " ";
				document.getElementById('hargacoretbisnis').innerHTML = "Rp " + obj.bisnis.hargacoret;
				document.getElementById('penggunabisnis').innerHTML = obj.bisnis.pengguna;
				document.getElementById('hargapersonal').style.color = "#ffffff";
			}
		}
		xhr.withCredentials = true;
		xhr.Credentials = true;
		//xhr.open("POST", "http://10.10.107.2:5000/_session", true);
		xhr.open("GET", "./data.json", true);
		xhr.send();
	</script>
</body>
</html>