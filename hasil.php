<?php 
	include "lib/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Unicat</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list ml-auto">
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>001-1234-88888</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>info.deercreative@gmail.com</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav_contaner">
								<ul class="main_nav">
									<li><a href="index.php">Beranda</a></li>
									<li><a href="info.php">Info</a></li>
									<li><a href="jadwal.php">Jadwal</a></li>
									<li class="active"><a href="hasil.php">Hasil Seleksi</a></li>
								</ul>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>
							<nav class="ml-auto">
								<ul class="secondary_nav">
									<li class="login_button"><a href="login/">Masuk</a></li>
									<li class="signup_button"><a href="daftar/">Daftar</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">Beranda</a></li>
				<li class="menu_mm"><a href="info.php">Info</a></li>
				<li class="menu_mm"><a href="jadwal.php">Jadwal</a></li>
				<li class="menu_mm"><a href="hasil.php">Hasil Seleksi</a></li>
			</ul>
		</nav>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<center><h2>Pilih Jurusan</h2></center>
			<div class="row features_row">
				
				<!-- Features Item -->
				<?php 
					$tampiljurusan = mysqli_query($mysqli,"SELECT * from jurusan");
					while($jurusan = mysqli_fetch_array($tampiljurusan))
                    {
				?>
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
						<h3 class="feature_title"><?php echo $jurusan['Nama_Jurusan']; ?></h3>
						<div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
						<div class="courses_button trans_200"><a href="detail_seleksi.php?id_jurusan=<?php echo $jurusan['Id_Jurusan']; ?>">Pilih</a></div>
					</div>
				</div>

				<?php 
					}
				?>

			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a href="#">Copyright notification</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>