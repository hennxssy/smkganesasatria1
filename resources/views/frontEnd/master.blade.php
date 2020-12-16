<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Pendaftaran Siswa Baru</title>
@include('frontEnd.includes.head')
</head>

<!-- Body -->
<body>

<!-- banner -->
<div class=" banner">
	<div class="wthree-different-dot">
	<!-- header -->
		<div class="header">
			<div class="container">  
				<div class="header-mdl agileits-logo"><!-- header-two --> 
					<h1><a href="index.html">Penerimaan Siswa Baru <br>SMA Ganesa Satria</a></h1> 
				</div>
				<div class="header-nav"><!-- header-three --> 	
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button> 
						</div>
						<!-- top-nav -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								@if (Route::has('login'))
								@auth
								<li><a href="/index">Home</a></li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#sejarah" class="scroll" data-hover="Testimonials">Sejarah Ganesa Satria</a></li>
										<li><a href="#visimisi" class="scroll" data-hover="Pricing tables">Visi Misi</a></li>
										<li><a href="#identitas" class="scroll" data-hover="Pricing tables">Informasi Sekolah</a></li>
									</ul>
								</li>
								<li><a href="/logout">Logout</a></li>
								<li><a href="#gallery" class="scroll" data-hover="Gallery">Gallery</a></li>
								<li><a href="#info" class="scroll" data-hover="Contact">Contact</a></li>
								@else
								<li><a href="/index">Home</a></li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#sejarah" class="scroll" data-hover="Testimonials">Sejarah Ganesa Satria</a></li>
										<li><a href="#visimisi" class="scroll" data-hover="Pricing tables">Visi Misi</a></li>
										<li><a href="#identitas" class="scroll" data-hover="Pricing tables">Informasi Sekolah</a></li>
									</ul>
								</li>
								<li><a href="/login">Login / Register</a></li>
								<li><a href="#gallery" class="scroll" data-hover="Gallery">Gallery</a></li>
								<li><a href="#info" class="scroll" data-hover="Contact">Contact</a></li>
								@endauth
								@endif
							</ul>  
							<div class="clearfix"> </div>	
						</div>
					</nav>    
				</div>	
			</div>	
		</div>	
		<!-- //header --> 
		
		<!-- banner slider -->
		<div class="banner-top">
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides callbacks callbacks1" id="slider4">
						<li>	
						<div class="wthree-different-dot">
							<div class="banner_text">
							<div class="container">
								
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll">
										<i class="fa  fa-long-arrow-down"></i>
									</a>
								</div>
							</div>
							</div>
						</div>
						</li>
						<li>
						<div class="wthree-different-dot">	
							<div class="banner_text">
							<div class="container">
								
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll">
										<i class="fa  fa-long-arrow-down"></i>
									</a>
								</div>
							</div>
							</div>
							</div>
						</li>
						<li>	
						<div class="wthree-different-dot">
							<div class="banner_text">
							<div class="container">
								
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll">
										<i class="fa  fa-long-arrow-down"></i>
									</a>
								</div>
							</div>
							</div>
							</div>
						</li>
						<li>	
						<div class="wthree-different-dot">
							<div class="banner_text">
							<div class="container">
								
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll">
										<i class="fa  fa-long-arrow-down"></i>
									</a>
								</div>
							</div>
							</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- banner slider -->
		
	</div>
</div>
<!-- //banner -->

<!-- Modal pop-up -->

<!-- //Modal pop-up -->

<!-- about -->
<section class="about" id="">
	<div class="container">
		<h3 class="heading text-center text-uppercase mb-5">Cara Pendaftaran dan Jadwal Tes</h3>
		<p class="aboutpara text-center"><h4>
		Cara Pendaftaran Siswa Baru :
		<br>										
		<br>
		1. Melakukan Register						
		<br>
		2. Mengisi Form Biodata						
		<br>
		3. Melakukan Cetak Kartu Peserta			
		<br>
		<br>

*(Jadwal Tes di Hubungi Melalui Email/No Telp)	
<br>
<br>
-----------------------------------------------------------	
<br>
Jadwal Tes
<br>
<br>
Gelombang 1 (25 September)
<br>
<br>
Sesi 1	: 09.00 - 11.00
<br>
Sesi 2	: 13.00 - 15.00
<br>
<br>
Gelombang 2 (15 Oktober)
<br>
<br>
Sesi 1	: 09.00 - 11.00
<br>
Sesi 2	: 13.00 - 15.00
<br>
<br>
Gelombang 3 (5 November)
<br>
<br>
Sesi 1	: 09.00 - 11.00
<br>
Sesi 2	: 13.00 - 15.00
</h4></p>
</div>
</section>
<section class="about" id="sejarah">
	<div class="container-fluid">
		<div class="jumbotron">
			<div class="col-12 text-center">
				<h3 class="heading text-uppercase">Sejarah Ganesa Satria</h3>
				<div class="heading-underline"></div>
			</div>
		</div>
	</div>
	<div class="container">
	<p class="aboutpara text-center"><h4 style="text-align: justify;">
Yayasan Perguruan Ganesa Satria didirikan pada tanggal 14 November 1983.
<br>
Pendirinya adalah Drs. H. Timbul Suryanto. Dengan keanggotaan badan pendiri yayasan yang terdiri dari : Ny. Hj. Sumiarsih; 
<br> Ir. Irwan Setiadi; Ari Tjahyono, SH; Erman Triatmo, SH; Ir. Suryo Utomo dan Dra. Rahmi Indriati.
<br>
<br>
SMK GANESA SATRIA yang berasal dari bahasa Sanskerta yaitu Ganesa bermakna “gajah”. Kata “gajah” artinya “yang memiliki dan menguasai ilmu pengetahuan”. Sedangkan Satria memiliki makna baik, jujur dan bertanggung jawab. Sehingga menjadi GANESA SATRIA yang bermakna sebagai sebuah visi, yakni “TERLAHIRKANNYA PUTRA – PUTRI TERBAIK BANGSA YANG MENGUASAI ILMU PENGETAHUAN DENGAN KEPRIBADIAN YANG BAIK, JUJUR DAN BERTANGGUNG JAWAB”.
<br>
<br>
Pada tahun 1985 didirikanlah SMEA Ganesa Satria yang sekarang dikenal dengan SMK Ganesa Satria 1 yang berawal hanya denga 22 orang murid untuk rumpun perdagangan. Hingga tercatat di tahun 2005 mencapai 1477 peserta didik yang dititipkan oleh para orang tua mereka. Sebagai sebuah sekolah yang terus menerus berusaha membangun manajemennya secara profesional SMK Ganesa Satria 1 membuktikan bahwa sekolah ini memberikan beberapa prestasi yang dapat mengharumkan yayasan perguruan seperti Juara 1 Uji Kompetensi Program keahlian Bisnis Daring Pemasaran, Juara 2 Program keahlian Akuntansi tingkat kota depok pada masa itu, serta prestasi prestasi non akademik seperti juara taekwondo, PMR maupun paskibra.

</h4></p>
</div>
</section>
<!-- about -->
<section class="about" id="visimisi">
	<div class="container-fluid">
		<div class="jumbotron">
			<div class="col-12 text-center">
				<h3 class="heading text-uppercase">Visi Misi Sekolah</h3>
				<div class="heading-underline"></div>
			</div>
		</div>
	</div>
	<div class="container">
<h4 class="heading" style="font-weight: bold;">VISI</h4>
<br>
<p class="aboutpara text-center"><h4>
“Sebagai pusat pendidikan yang menghasilkan peserta didik yang kompeten, handal, mandiri, terampil, yang mampu menselaraskan antara kemajuan IPTEK dan IMTAQ serta sanggup bersaing di era global”.</h4></p>
<br><br>
<h4 class="heading text-uppercase mb-5" style="font-weight: bold;">Misi<span></span></h4>
<br>
<p class="aboutpara text-center"><h4>
1. Menumbuhkan keimanan dan ketaqwaan kepada Tuhan Yang Maha Esa.
<br><br>
2. Menyelenggarakan pendidikan yang efektif, efisien dan berkualitas.
<br><br>
3. Menghasilkan tenaga kerja yang profesional sesua dengan kompetensinya untuk memenuhi tuntutan dunia usaha atau   dunia industri.
<br><br>
4. Menjadikan SMK Ganesa Satria 1 Depok sebagai pilihan utama masyarakat.
<br><br>
5. Membekali peserta didik dengan kemampuan untuk dapat mengembangkan diri.
<br><br>
6. Menghasilkan tamatan yang mandiri, kreatif, inovatif, berkarakter dan berakhlak mulia.


</h4></p>
</div>
</section>
<section class="about" id="identitas">
	<div class="container-fluid">
		<div class="jumbotron">
			<div class="col-12 text-center">
				<h3 class="heading text-uppercase">Informasi Sekolah</h3>
				<div class="heading-underline"></div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row inner-sec">
			
		<div class="col-lg-6 about-info text-left" data-aos="flip-left" >
		<h4 class="sub-hd mb-4">KEPALA SEKOLAH:</h4>
		<br>
		<p class="aboutpara text-center"><h4>
		Dra. Umiyati
		<br><br>

</h4>
</p>
</div>

		<div class="col-lg-6 about-img" data-aos="flip-right">
			
		<h4 class="sub-hd mb-4">EKSTRAKULIKULER:</h4>
		<br>
		<p class="aboutpara text-center"><h4>
1. BASKET
<br><br>
2. FUTSAL
<br><br>
3. BULUTANGKIS
<br><br>
4. Volly
<br><br>
5. TAPAKSUCI
<br><br>
6. PRAMUKA
<br><br>
7. SEPAK TAKRAU 
<br><br>
8. TAE KWON DO
<br><br>
9. PASKIBRA 
<br><br>
10. SENI
<br><br>
11. ROHIS
<br><br>

		
</h4>
</p>
</div>
		<div class="col-lg-6 about-info text-left" data-aos="flip-left" >
			
		<h4 class="sub-hd mb-4">FASILITAS SEKOLAH:</h4>
		<br>
		<p class="aboutpara text-center"><h4>
			1. LAB AKUNTANSI
			<br><br>
			2. LAP TKJ
			<br><br>
			3. LAB KOMPUTER
			<br><br>
			4. LAB BAHASA
			<br><br>
			5. RUANGAN BK
			<br><br>
			6. RUANGAN KEPALA SEKOLAH
			<br><br>
			7. RUANGAN WAKIL KEPALA SEKOLAH
			<br><br>
			8. RUANGAN GURU
			<br><br>
			9. RUANGAN ADMINISTRASI
			<br><br>
			10. RUANGAN UKS
			<br><br>
			11.	RUANG OSIS
			<br><br>
			12.	RUANG BISNIS KREATIF
			<br><br>
			13.	UNIT PRODUKSI
			<br><br>
			14.	BANK MINI
			<br><br>
			15.	AULA
			<br><br>
			16. PERPUSTAKAAN
			<br><br>
			17. Musholah
			<br><br>
			18. KANTIN
			<br><br>
			19. LAPANGAN
			<br><br>
			20.	TEMPAT PARKIR
			<br><br>
			21.	TAMAN
			<br><br>
			<br><br>
			</h4>
		</p>
</div>
</div>
</div>
</section>
<hr>

<section class="gallery" id="gallery">
	<div class="container-fluid">
		<div class="jumbotron">
			<div class="col-12 text-center">
				<h3 class="heading text-uppercase">Gallery</h3>
				<div class="heading-underline"></div>
			</div>
		</div>
	</div>
	<div class="container">
			<div class="row inner-sec">
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a title=" " href="images/p1.jpg">
							<div class="section_1_gallery_grid1">
								<img src="{{asset('gallery/images/a1.jpg')}}" alt=" " class="img-fluid" />
								<div class="proj_gallery_grid1_pos">
									<br><br>
								</div>
							</div>
						</a>
					</div>
					<div class="sectio qn_1_gallery_grid" data-aos="zoom-in">
						<a title=" " href="images/p2.jpg">
							<div class="section_1_gallery_grid1">
								<img src="{{asset('gallery/images/a2.jpg')}}" alt=" " class="img-fluid" />
								<div class="proj_gallery_grid1_pos">
									<br><br>
								</div>
							</div>
						</a>
					</div>

				</div>
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a title=" " href="images/p4.jpg">
							<div class="section_1_gallery_grid1">
								<img src="{{asset('gallery/images/a9.jpg')}}" alt=" " class="img-fluid" />
								<div class="proj_gallery_grid1_pos">
									<br><br>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title=" " href="images/p5.jpg">
							<div class="section_1_gallery_grid1">
								<img src="{{asset('gallery/images/a10.jpg')}}" alt=" " class="img-fluid" />
								<div class="proj_gallery_grid1_pos">
									<br><br>
								</div>
							</div>
						</a>
					</div>

				</div>
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a title="" href="images/p3.jpg">
							<div class="section_1_gallery_grid1">
								<img src="{{asset('gallery/images/a6.jpg')}}" alt=" " class="img-fluid" />
								<div class="proj_gallery_grid1_pos">
									<br><br>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<div class="section_1_gallery_grid1">
							<a title=" " href="images/p2.jpg">							
								<img src="{{asset('gallery/images/a8.jpg')}}" alt=" " class="img-fluid" />
								<div class="proj_gallery_grid1_pos">
									<br><br>
								</div>
							</div>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section>
		<br><br>
		<br><br>


 
<!-- footer -->
<section class="footer" id="info">
		<div class="container">
		<h3 class="heading text-center text-uppercase mb-5" style="color: white;">Contact Info</h3>
					
					<ul class="contact_info">
						<li style="color: white;" ><span class="fa fa-map-marker"  aria-hidden="true"></span>
						Jl. Merdeka Raya No.3 Komp. Yayasan Ganesa Satria, Abadijaya, Kec. Sukmajaya
 						Kota Depok, Jawa Barat 16411
						</li>
						<li><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:info@example.com" style="color: white;">smkganesa1.dpk@gmail.com</a></li>
						<li style="color: white;"><span class="fa fa-phone" aria-hidden="true"></span>(021) 77824244</li>
						
					</ul>
				</div>
		<div class="agile-nav">
			<ul>
				<li><a href="/index">Home</a></li>
				<li><a href="#gallery" class="scroll">Gallery</a></li>
				<li><a href="#info" class="scroll">Contact us</a></li>
			</ul>
		</div>
	</div>
</section>
<!-- //footer -->

<!-- copyright -->

	@include('frontEnd.includes.script')

</body>
<!-- //Body -->

</html>