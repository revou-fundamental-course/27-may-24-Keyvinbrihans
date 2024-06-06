<!DOCTYPE HTML>
<html>
	<head>
		<title>Sistem Informasi Alumni</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"> 
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/animate.min.css" />
		<script src="assets/js/scrollmagic.js"></script>
		<script>
			var secone = new ScrollMagic.Controller();
			var sectwo = new ScrollMagic.Controller();
			var secthree = new ScrollMagic.Controller();
			var footer = new ScrollMagic.Controller();
		</script>
		<style>
			#one, #two, #three, #footer {
				opacity: 0;
		-webkit-transform: scale(0.9);
			 -moz-transform: scale(0.9);
				-ms-transform: scale(0.9);
				 -o-transform: scale(0.9);
						transform: scale(0.9);
		-webkit-transition: all 1s ease-in-out;
			 -moz-transition: all 1s ease-in-out;
				-ms-transition: all 1s ease-in-out;
				 -o-transition: all 1s ease-in-out;
						transition: all 1s ease-in-out;
			}
			#one.visible, #two.visible, #three.visible, #footer.visible {
				opacity: 1;
		-webkit-transform: none;
			 -moz-transform: none;
				-ms-transform: none;
				 -o-transform: none;
						transform: none;
			}
			.preloader {
				position: fixed;
				top: 0;
				left: 0;
				bottom:0;
				right:0;
				width: 100%;
				height: 100vh;
				z-index: 99999999;
				background-image: url('images/loading.gif');
				background-repeat: no-repeat;
				background-color: #FFF;
				background-position: center;
			}
			#stop-scrolling {
				height: 100% !important;
				overflow: hidden !important;
			}
			.loadtext{
				display: flex;
				justify-content: center;
				align-items: center;
				height: 50%;
				font-size:80px;
			}
			.loadtext2{
				display: flex;
				justify-content: center;
				align-items: center;
				height: 50%;
			}
			.linkusual{
				color:royalblue;
			}
			.linkusual:hover{
				color:darkblue;
			}
		</style>
	</head>
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/604866fa385de407571e7aca/1f0dd4h6v';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	<body id="stop-scrolling">
	<div class="preloader"><h1 class="loadtext">Please Wait...</h1><br>
	<h2 class="loadtext2">Too slow? <a class="linkusual" href="basic.php">Load the basic!</a></h2>
	</div>
		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo animate__animated animate__lightSpeedInLeft"><a href="index.php">SisInfoAlumni <span>MHS</span></a></div>
				<a class="animate__animated animate__heartBeat" href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="#">Home</a></li>
					<li><a href="login/login.php">Login</a></li>
					<li><a href="login/daftar/register.php">Register</a></li>
					<li><a href="qna.html">Help & Support</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/bgmhs.jpg" alt="gambarmhs" />
					<div class="inner">
					<div class="animate__jackInTheBox animate__animated">
						<header>
							<h2 style="font-size:50px">Sistem Informasi Alumni</h2>
						</header>
						</div>
					</div>
				</article>
				<article>
					<img src="images/slider2.jpg" alt="batamviews" />
					<div class="inner">
						<header>
							<h2 style="font-size:50px">Sistem Informasi Alumni</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slider3.jpeg"  alt="batamviews" />
					<div class="inner">
						<header>
							<h2 style="font-size:50px">Sistem Informasi Alumni</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slider4.jpeg"  alt="batamviews" />
					<div class="inner">
						<header>
							<h2 style="font-size:50px">Sistem Informasi Alumni</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/USM.jpeg" style="height:450px;" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>VISI MISI</p>
										<h2>UNIVERSITAS SEMARANG</h2>
									</header>
									<p>Universitas Semarang didirikan pada 23 Juni 1987 dengan bentuk awal politeknik (Politeknik Semarang) yang memiliki 4 program studi (PS) D-III yaitu Kepaniteraan Hukum, Manajemen Perusahaan, Teknik Sipil Hidro, dan Teknologi Hasil Pertanian. Pada tahun 1994, Politeknik Semarang resmi berubah bentuk menjadi universitas dengan nama Universitas Semarang (USM) yang saat ini memiliki 16 Program Studi yaitu D-III Manajemen Perusahaan, S-1 Ilmu Hukum, S-1 Manajemen, S-1 Akuntansi, S-1 Teknik Sipil, S-1 Teknik Elektro, S-1 Perencanaan Wilayah dan Kota, S-1 Teknologi Hasil Pertanian, S-1 Psikologi, S-1 Sistem Informasi, S-1 Teknik Informatika, S-1 Ilmu Komunikasi, S-1 Pariwisata, S-2 Magister Manajemen, S-2 Magister Ilmu Hukum dan S-2 Magister Psikologi.</p>
									<footer class="align-center">
										<a target="_blank" href="" class="button alt">Lebih Lengkap</a>
									</footer>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/proker2.jpeg" style="height: 450px;" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>Pelatihan Fakultas</p>
										<h2>FAKULTAS Prodi Sistem Informasi USM Gelar Workshop Visualisasi Data Geospatial</h2>
									</header>
									<p>FAKULTASProdi Sistem Informasi USM Gelar Workshop Visualisasi Data Geospatial
Bywarta usmPosted on September 16, 2023     COMMENTS
SEMARANG- Program Studi S1 Sistem Informasi Fakultas Teknologi Informasi dan Komunikasi (FTIK) Universitas Semarang (USM) menggelar workshop Visualisasi Data Geospatial di laboratorium computer pada Sabtu, 16 September 2023.

Kegiatan yang mengambil tema Remote sensing using Google Earth Engine (GEE) ini menghadrikan narasumber dari GeoAccess Indonesia Adi Guna Prasetyo.</p>
									<footer class="align-center">
										<a target="_blank" href="" class="button alt">Lebih Lengkap</a>
									</footer>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<h2>Sistem Informasi Alumni</h2>
						<h3>Daftar Sekarang!</h3>
						<a href="login/daftar/register.php" class="button animate__animated animate__tada animate__infinite">Sign UP!</a>
					</header>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
					<header class="align-center">
						<p class="special">Info Lowongan</h2>
					</header>
					<div class="gallery">
					<div class="box">
							<div class="image fit">
								<img src="images/loker1.jpeg" style="height: 450px;" alt="" />
							</div>
								<div class="content">
									<header class="align-center">
										<p>Lowongan Pekerjaan</p>
										<h2>Lowongan Kerja MANAGEMENT TRAINEE USM Career and Alumni Center</h2>
									</header>
									<footer class="align-center">
										<a target="_blank" href="https://ucac.usm.ac.id/jobs/lowongan-kerja-management-trainee-usm-career-and-alumni-center/" class="button alt">Lebih Lengkap</a>
									</footer>
								</div>
							</div>
						
					</div>
				</div>
			</section>


		<!-- Footer -->
			<footer id="footer">
				<p style="color:white">Sosial Media Kami</p>
				<div class="container">
					<ul class="icons">
						<li><a href="https://instagram.com/ti.usm?igshid=MzRlODBiNWFlZA==" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://www.facebook.com/usm.jaya?mibextid=9R9pXO" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.youtube.com/channel/UCB4z1RU_IB_4y-fT5uXl5aA" class="icon fa-youtube"><span class="label">Youtube</span></a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script>
			function preloaderFadeOutInit(){
				$('.preloader').fadeOut('slow');
				$('body').attr('id','');
				}
				// Window load function
				jQuery(window).on('load', function () {
				(function ($) {
				preloaderFadeOutInit();
				})(jQuery);
				});
			</script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
				new ScrollMagic.Scene({
							triggerElement: "#one",
							triggerHook: 0.9,
							offset: 50,
							reverse: false
						})
						.setClassToggle("#one", "visible")
						.addTo(secone);
				new ScrollMagic.Scene({
							triggerElement: "#two",
							triggerHook: 0.9,
							offset: 50,
							reverse: false
						})
						.setClassToggle("#two", "visible")
						.addTo(sectwo);
				new ScrollMagic.Scene({
							triggerElement: "#three",
							triggerHook: 0.9,
							offset: 50,
							reverse: false
						})
						.setClassToggle("#three", "visible")
						.addTo(secthree);
				new ScrollMagic.Scene({
							triggerElement: "#footer",
							triggerHook: 0.9,
							offset: 50,
							reverse: false
						})
						.setClassToggle("#footer", "visible")
						.addTo(footer);
			</script>

	</body>
</html>