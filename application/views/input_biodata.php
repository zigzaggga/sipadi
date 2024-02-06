<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>SIPADI</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	 <link href="<?php echo base_url('bizland/mb.png'); ?>" rel="icon">
	<!-- Google Fonts -->

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		  rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo base_url('bizland/assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
	<link href="<?php echo base_url('bizland/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('bizland/assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('bizland/assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('bizland/assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('bizland/assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?php echo base_url('bizland/assets/css/style.css'); ?>" rel="stylesheet">

	<!-- =======================================================
	* Template Name: BizLand - v3.6.0
	* Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
	* Author: BootstrapMade.com
	* License: https://bootstrapmade.com/license/
	======================================================== -->
</head>

<body>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
	<div class="container d-flex justify-content-center justify-content-md-between">


	</div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
	<div class="container d-flex align-items-center justify-content-between">

		<h1 class="logo"></h1>
		<!-- Uncomment below if you prefer to use an image logo -->
		<!-- <a href="index.html class="logo"><img src="assets/img/logo.png" alt=""></a>-->

		<nav id="navbar" class="navbar">
			<ul>
				<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
				<li><a class="nav-link scrollto" href="<?php echo base_url(''); ?>#info">Info Penyakit Dan Hama</a></li>
				<li><a class="nav-link scrollto" href="<?php echo base_url(''); ?>#petunjuk">Petunjuk</a></li>
				<li><a class="nav-link scrollto " href="<?php echo base_url('konsultasi'); ?>">Diagnosa</a></li>
				<li><a class="nav-link scrollto " href="<?php echo base_url('auth/login'); ?>">Login</a></li>
			</ul>
			<i class="fa fa-server mobile-nav-toggle"></i>
		</nav><!-- .navbar -->

	</div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
	<div class="container" data-aos="zoom-out" data-aos-delay="100">

		<div class="navbar-inner"
			 style="border:3px solid #bbb; border-radius:20px; padding:10px 20px 10px 20px; margin-top:0%; margin-left:30%; margin-right:30%">
			<div>
				<div class="modal-header">
					<h3>Input Biodata</h3>
				</div>
				<div style="margin-top:10px">
					<form action="<?php echo base_url();?>Konsultasi/simpan_biodata" method="get" enctype="multipart/form-data">
						<div class="form-group">
							<div class="form-group">
								<label>Nama</label>
								<input name="nama" type="text" id="nama" class="form-control" placeholder="Nama">
							</div>
						</div>
						<br>
						<div class="form-group">
							<div class="form-group">
								<label>Alamat</label>
								<input name="alamat" type="text" id="alamat" class="form-control" placeholder="Alamat">
							</div>
						</div>
						<br>
						<div class="form-group">
							<div class="controls">
								<label>Pekerjaan</label>
								<input name="pekerjaan" type="text" id="pekerjaan" class="form-control" placeholder="Pekerjaan">
							</div>
						</div>
						<br>
						<div class="control-group">
							<div class="controls">
								<input type="submit" name="next" id="next" value="Lanjut" class="btn btn-success">
								<a href="../" class="btn btn-warning">Kembali</a>
							</div>
						</div>

					
					</form>
				</div>
			</div>
		</div>

	</div>

</section><!-- End Hero -->

<main id="main">

	<!-- ======= Featured Services Section ======= -->


	<!-- ======= About Section ======= -->
	<!--  <section id="about" class="featured-services" style=" background-image: url('<?php echo base_url('bizland/assets/img/bh.jpg'); ?>');">
 -->

	<!-- ======= Testimonials Section ======= -->
	<section id="testimonials" class="testimonials">
		<div class="container" data-aos="zoom-in">

			<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
				<div class="swiper-wrapper">


					<div class="swiper-slide">
						<div class="testimonial-item">
							<img src="<?php echo base_url('bizland/assets/img/testimonials/steve.jpg'); ?>"
								 class="testimonial-img" alt="">
							<h3>Steve Jobs</h3>

							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Jika saya mencoba yang terbaik dan gagal, setidaknya saya telah melakukan yang terbaik
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
						</div>
					</div><!-- End testimonial item -->

					<div class="swiper-slide">
						<div class="testimonial-item">
							<img src="<?php echo base_url('bizland/assets/img/testimonials/jack.jpg'); ?>"
								 class="testimonial-img" alt="">
							<h3>Jack Ma</h3>
							<h4>Ceo Alibaba</h4>

							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Berubahlah selagi kamu dalam kondisi terbaikmu, sebelum muncul hal-hal buruk. Akan
								terlalu lambat untuk membetulkan atap saat musim hujan terlanjur datang. Pinjamlah
								payung selagi matahari masih bersinar
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
						</div>
					</div><!-- End testimonial item -->

					<div class="swiper-slide">
						<div class="testimonial-item">
							<img src="<?php echo base_url('bizland/assets/img/testimonials/mark.jpg'); ?>"
								 class="testimonial-img" alt="">
							<h3>Mark Zuckerberg</h3>
							<h4>Ceo Facebook</h4>
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Orang yang sukses adalah orang yang selalu menciptakan hal-hal baru serta mencari cara
								untuk membuat peningkatan
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
						</div>
					</div><!-- End testimonial item -->

					<div class="swiper-slide">
						<div class="testimonial-item">
							<img src="<?php echo base_url('bizland/assets/img/testimonials/jeff.jpg'); ?>"
								 class="testimonial-img" alt="">
							<h3>Jeff Bezos</h3>
							<h4>Ceo Amazon</h4>
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Saya tahu bahwa jika saya gagal, saya takkan menyesalinya, tetapi saya tahu satu-satunya
								yang akan saya sesali adalah jika saya tidak mencoba
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
						</div>
					</div><!-- End testimonial item -->

				</div>
				<div class="swiper-pagination"></div>
			</div>

		</div>
	</section><!-- End Testimonials Section -->


	<!-- ======= Footer ======= -->
	<footer id="footer">


		<div class="container py-4">
			<div class="copyright">
				&copy; Copyright <strong><span>Sistem Pakar Penyakit dan Hama Padi </span></strong>. All Rights Reserved
			</div>
			<div class="credits">
				<!-- All the links in the footer should remain intact. -->
				<!-- You can delete the links only if you purchased the pro version. -->
				<!-- Licensing information: https://bootstrapmade.com/license/ -->
				<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->

			</div>
		</div>
	</footer><!-- End Footer -->

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
				class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?php echo base_url('bizland/assets/vendor/aos/aos.js'); ?>"></script>
	<script src="<?php echo base_url('bizland/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?php echo base_url('bizland/assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
	<script src="<?php echo base_url('bizland/assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
	<script src="<?php echo base_url('bizland/assets/vendor/php-email-form/validate.js'); ?>"></script>
	<script src="<?php echo base_url('bizland/assets/vendor/purecounter/purecounter.js'); ?>"></script>
	<script src="<?php echo base_url('bizland/assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
	<script src="<?php echo base_url('bizland/assets/vendor/waypoints/noframework.waypoints.js'); ?>"></script>

	<!-- Template Main JS File -->
	<script src="<?php echo base_url('bizland/assets/js/main.js'); ?>"></script>

</body>

</html>
