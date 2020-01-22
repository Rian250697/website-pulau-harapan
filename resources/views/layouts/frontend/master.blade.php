<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Website Pulau Harapan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Grand Tour Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/creative.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->

	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">

	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->

</head>
<body>

<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-3 py-3 fixed-top">
			<div id="logo">
				<h1 class="mt-md-0 mt-2"> <a href=""><span class="fa fa-map-signs"></span> Rian Travel </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class="active"><a href="">Home</a></li>
				<li class=""><a href="#deskripsi">Deskripsi</a></li>
				<li class=""><a href="#paketwisata">Paket Wisata Pulau Harapan</a></li>
				<li class=""><a href="#dokumentasi">Dokumentasi</a></li>
				<li class=""><a href="#kontak">Kontak</a></li>
				<li class="booking"><a href="#">Book Now</a></li>
			</ul>
		</nav>
		<!-- //nav -->
    </div>
</header>
<!-- //header -->

<!-- banner -->
<section class="banner_w3lspvt" id="home">
	<div class="csslider infinity" id="slider1">
		<input type="radio" name="slides" checked="checked" id="slides_1" />
		<input type="radio" name="slides" id="slides_2" />
		<input type="radio" name="slides" id="slides_3" />
		<input type="radio" name="slides" id="slides_4" />
		<ul>
			<li>
				<div class="banner-top">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h4 class="text-wh">Kawasan Wisata Pulau Harapan.</h4>
								<h3 class="text-wh">Pulau perak</h3>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top1">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h4 class="text-wh">Wisata Pulau Harapan.</h4>
								<h3 class="text-wh">Pulau Harapan </h3>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top2">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h4 class="text-wh">Kawasan Wisata Pulau Harapan.</h4>
								<h4 class="text-wh">Terumbu Karang yang cantik</h4>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top3">
					<div class="overlay1">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h4 class="text-wh">Kawasa Wisata Pulau Harapan.</h4>
								<h4 class="text-wh">Pantai yang begitu indah</h4>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="arrows">
			<label for="slides_1"></label>
			<label for="slides_2"></label>
			<label for="slides_3"></label>
			<label for="slides_4"></label>
		</div>
	</div>
</section>
@yield('content')
<!-- destinations -->

<!--footer -->
<footer>
<section class="footer footer_w3layouts_section_1its py-5" id="kontak">
	<div class="container">
        <h3 class="heading text-capitalize text-center py-lg-6 py-sm-5"> Kontak</h3>
		<div class="row footer-top">
			<div class="col-lg-4 col-sm-4 mt-sm-2 mt-5 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Alamat</h3>
				</div>
				<div class="footer-text">
					<p>Lokasi : Pulau Harapan</p>
					<p>No.Hp : 083819481579</p>
					<p>Email : <a href="mailto:info@example.com">hardiansyahrian@gmail.com</a></p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-4 mt-sm-2 mt-5 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Biodata Travel</h3>
				</div>
				<div class="footer-text">
                    <p class="mt-2">Nama : Rian Hardiansyah</p>
                    <p class="mt-2">Umur : 22 Tahun</p>
                    <p class="mt-2">Pekerjan : Mahasiswa</p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 mt-sm-4 mt-5 footer-grid_section_1its_w3">
				<div class="image-tour position-relative">
					<img src="images/rian.jpg" alt="" class="img-fluid" />
				</div>
            </div>
			<div class="col-lg-4 col-sm-4 mt-sm-2 mt-5 footer-grid_section_1its_w3">
				<div class="footer-title">
                    <h3>Tujuan</h3>
                    <p>Bisnis Travel ini bisa berjalan dengan lancar dan sukses ke depannya,
                        dan dapat membantu dan mempermudah Para Wisatawan dalam melakukan perjalanan wisata Ke Pulau Harapan.
                    </p>
				</div>
            </div>
		</div>
	</div>
</section>
</footer>
<!-- //footer -->

<!-- copyright -->
{{-- <div class="copyright py-3 text-center">
	<p>© 2019 Grand Tour. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank"> W3layouts </a></p>
</div>
<!-- //copyright -->

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top">
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div> --}}
<!-- move top -->


</body>
</html>
