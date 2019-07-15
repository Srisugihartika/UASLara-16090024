@extends('template.app')


@section('content')

<header class="header d-flex flex-row justify-content-end align-items-center">

		<!-- Logo -->
		<div class="logo_container mr-auto">
			<div class="logo">
				
				<a href="#">
					<span>R</span>Relasi<span>.</span>
				</a>
			</div>
		</div>
           
		
		<!-- Main Navigation -->
		<nav class="main_nav justify-self-end">
			<ul class="nav_items">
				<li class="active"><a href="{{ route('user.masuk')}}"><span>home</span></a></li>
				<li ><a href="{{ route('user.fdaftar') }}"><span>cara daftar</span></a></li>
				<li><a href="{{ route('user.daftar') }}"><span>daftar</span></a></li>
				<li><a href="{{ route('user.info') }}"><span>informasi</span></a></li>
			</ul>
		</nav>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<span class="hamburger_text">Menu</span>
			<span class="hamburger_icon"></span>
		</div>

</header>
<div class="fs_menu_overlay"></div>
	<div class="fs_menu_container">
		<div class="fs_menu_shapes"><img src="public/userzeta/images/menu_shapes.png" alt=""></div>
		<nav class="fs_menu_nav">
			<ul class="fs_menu_list">
				
				<li><a href="#"><span><span>H</span>Home</span></a></li>
				<li><a href="#"><span><span>S</span>Services</span></a></li>
				<li><a href="#"><span><span>E</span>Elements</span></a></li>
				<li><a href="#"><span><span>B</span>Blog</span></a></li>
				<li><a href="#"><span><span>C</span>Contact</span></a></li>
			</ul>
		</nav>
		<div class="fs_social_container d-flex flex-row justify-content-end align-items-center">
			<ul class="fs_social">
				<li><a href="#"><i class="fab fa-pinterest trans_300"></i></a></li>
				<li><a href="#"><i class="fab fa-facebook-f trans_300"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter trans_300"></i></a></li>
				<li><a href="#"><i class="fab fa-dribbble trans_300"></i></a></li>
				<li><a href="#"><i class="fab fa-behance trans_300"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin-in trans_300"></i></a></li>
			</ul>
		</div>
	</div>
	<!-- Hero Slider --><!-- Hero Slider -->
	
	<div class="home">
		<div class="hero_slider_container slider_prlx">
			<div class="owl-carousel owl-theme hero_slider">

				<!-- Slider Item -->
				<div class="owl-item main_slider_item">
					<!-- <div class="contact_background prlx" style="background-image: url(public/userzeta/images/contact_background.jpg);"></div> -->
					<div class="main_slider_item_bg" style="background-image: url('private/public/userzeta/images/gallery_2_large.jpg')"></div> 
					<!-- <div class="main_slider_item_bg"><img src="public/userzeta/images/gallery_2_large.jpg" alt=""></div> -->
					<!-- <img src="{{asset('public/userzeta/images/bisa.jpg')}}" class="main_slider_item_bg" alt=""> -->
					
				</div>

				<!-- Slider Item -->
				<div class="owl-item main_slider_item">
					<div class="main_slider_item_bg" style="background-image: url('public/userzeta/images/Relawan-Demokrasi.jpg');"></div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item main_slider_item">
					<div class="main_slider_item_bg" style="background-image: url('public/userzeta/images/foto.jpg');"></div>
					</div>				
					<div class="container">
						<div class="row">
							<div class="col slider_content_col">
								<div class="main_slider_content">
									<h1>Apa Itu</h1>
									<h1><span>RELASI</span>?</h1>
									<p>Relawan Demokrasi merupakan orang atau kelompok orang yang  menjadi mitra Komisi Pemilihan Umum dalam menginformasikan atau menyosialisasikan kegiatan Kepemiluan, dalam hal ini adalah Pemilu Serentak.</p>
									<div class="button discover_button">
										<a href="#" class="d-flex flex-row align-items-center justify-content-center">cara daftar<img src="public/userzeta/images/arrow_right.svg" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

			<!-- Slider Dots -->

			<div class="main_slider_dots">
				<div class="container">
					<div class="row">
						<div class="col">
							<ul id="main_slider_custom_dots" class="main_slider_custom_dots">
								<li class="main_slider_custom_dot active">01.</li>
								<li class="main_slider_custom_dot">02.</li>
								<li class="main_slider_custom_dot">03.</li>
							</ul>
						</div>
					</div>
				</div>		
			</div>

			<!-- Slider Dots -->

			<div class="main_slider_nav_left main_slider_nav">
				<i class="fas fa-chevron-left trans_300"></i>
			</div>

			<div class="main_slider_nav_right main_slider_nav">
				<i class="fas fa-chevron-right trans_300"></i>
			</div>

		</div>
	</div>

	<div class="home_social_container d-flex flex-row justify-content-end align-items-center">
		<ul class="home_social">
			<li><a href="#"><i class="fab fa-pinterest trans_300"></i></a></li>
			<li><a href="#"><i class="fab fa-facebook-f trans_300"></i></a></li>
			<li><a href="#"><i class="fab fa-twitter trans_300"></i></a></li>
			<li><a href="#"><i class="fab fa-dribbble trans_300"></i></a></li>
			<li><a href="#"><i class="fab fa-behance trans_300"></i></a></li>
			<li><a href="#"><i class="fab fa-linkedin-in trans_300"></i></a></li>
		</ul>
	</div>
		
	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row align-items-end">

				<!-- Features Item -->
				<div class="col-lg-4 features_col">
					<div class="features_item d-flex flex-column align-items-center justify-content-end text-center">
						<!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="public/userzeta/images/icon_1.svg" alt="">
						</div>
						<h3>tugas relasi</h3>
						<p>Menginformasikan kepada masyarakat pentingnya demokrasi, pemilu dan partisipasi masyarakat. Tanggal, hari dan jam pemungutan suara. Tata cara pemberian suara dalam pemilu serentak. Pengenalan Peserta Pemilu. Hal-hal lain yang dianggap sesuai dengan kebutuhan sasaran atau basis pemilih.</p>
					</div>
				</div>
				
				<!-- Features Item -->
				<div class="col-lg-4 features_col">
					<div class="features_item d-flex flex-column align-items-center justify-content-center text-center">
						<!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="public/userzeta/images/icon_2.svg" alt="">
						</div>
						<h3>fasilitas</h3>
						<p>Mendapatkan fasilitas berupa T Shirt, Rompi dll. Memberikan dukungan transport dan kegiatan. Memperoleh Pengalaman dan wawasan dalam sosialisasi pemilu. Anda akan ambil bagian sejarah Penyelenggaraan Pemilu di Indonesia. Manfaat lain mendapatkan teman,pengembangan pribadi dan sosial.</p>
					</div>
				</div>
				
				<!-- Features Item -->
				<div class="col-lg-4 features_col">
					<div class="features_item d-flex flex-column align-items-center justify-content-center text-center">
						<!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="public/userzeta/images/icon_3.svg" alt="">
						</div>
						<h3>mitra KPU</h3>
						<p>Relawan Demokrasi menjadi mitra Komisi Pemilihan Umum (KPU) dalam menjalankan agenda sosialisasi dan pendidikan pemilih berbasis Kabupaten/Kota. Relawan Demokrasi merupakan gerakan sosial yang dimaksudkan untuk meningkatkan partisipasi dan kualitas pemilih dalam menggunakan hak pilih.</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	
	<!-- Contact -->

	<div class="contact prlx_parent">
		<!-- <div class="contact_background parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="images/contact_background.jpg"></div> -->
		<div class="contact_background prlx" style="background-image: url(public/userzeta/images/contact_background.jpg);"></div>
		<div class="contact_shapes"><img src="public/userzeta/images/contact_shape.png" alt=""></div>
		
			
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center section_title contact_title">
					<h2>AYO Bergabung dalam Relawan Demokrasi</h2>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-6 offset-lg-3 text-center contact_text">
					<p>Permilih Berdaulat Negara Kuat.!!</p>
					<div class="button contact_button">
						<a href="#" class="d-flex flex-row align-items-center justify-content-center">daftar<img src="public/userzeta/images/arrow_right.svg" alt=""></a>
					</div>
				</div>
			</div>
		
	</div>
	@endsection