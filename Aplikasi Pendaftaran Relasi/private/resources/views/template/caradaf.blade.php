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
				<li ><a href="{{ route('user.masuk')}}"><span>home</span></a></li>
				<li class="active" ><a href="{{ route('user.fdaftar') }}"><span>cara daftar</span></a></li>
				<li><a href="{{ route('user.daftar') }}"><span>daftar</span></a></li>
				<li><a href="{{ route('user.daftar') }}"><span>informasi</span></a></li>
			</ul>
		</nav>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<span class="hamburger_text">Menu</span>
			<span class="hamburger_icon"></span>
		</div>

</header>
<div class="content">
<div class="post-content entry-content">
							
<p><strong>MEKANISME KERJA</strong></p>
<ul>
<li type="1">Dalam menjalankan tugasnya relawan demokrasi menggunakan pilihan metode yang sesuai dengan kebutuhan, antara lain:
<ul style="margin-top: -1;" type="square">
<li>Simulasi.</li>
<li>Bermain peran/role playing.</li>
<li>Diskusi kelompok/FGD.</li>
<li>Ceramah.</li>
<li>Alat bantu (visual dan non visual).</li>
<li>Posing materi sosialisasi ke media sosial.</li>
</ul>
</li>
<li type="1">Agenda kegiatan relawan demokrasi melipui:
<ul style="margin-top: -1;" type="square">
<li>Memetakan varian kelompok sasaran (mapping).</li>
<li>Mengideniikasi kebutuhan varian kelompok sasaran.</li>
<li>Ideniikasi materi dan metode sosialisasi yang akan dilakukan.</li>
<li>Menyusun jadwal kegiatan dan berkoordinasi dengan relawan<br />
pemilu yang lain.</li>
<li>Melaksanakan kegiatan sesuai dengan jadwal.</li>
<li>Menyusun dan melaporkan kegiatan kepada KPU Kabupaten/Kota.</li>
</ul>
</li>
</ul>
<p><strong>PERSYARATAN RELAWAN DEMOKRASI</strong></p>
<ol>Untuk mengikui program Relawan Demokrasi, seseorang harus memiliki persyaratan sebagai berikut:</p>
<li>Warga Negara Indonesia.</li>
<li>Dilarang untuk merekrut anak/saudara/sanak famili tanpa ada kompetensi.</li>
<li>Berusia minimal 17 tahun pada saat mendatar, khusus untuk relawan pemilih pemula maksimal berusia 25 tahun.</li>
<li>Pendidikan minimal SLTA atau sederajat.</li>
<li>Berdomisili di wilayah setempat: a. Setiap kecamatan diharuskan ada perwakilan dari relawan; b. Jika ada wilayah dengan geograis pulau-pulau kecil/daerah terluar/daerah perbatasan diusahakan ada perwakilan relawan.</li>
<li>Non-partisan, sekurang-kurangnya dalam 5 (lima) tahun terakhir idak menjadi anggota Partai Politik.</li>
<li>Memiliki komitmen menjadi relawan pemilu.</li>
<li>Terdatar sebagai pemilih.</li>
<li>Memiliki kemampuan berkomunikasi yang baik.</li>
<li>Bertanggungjawab dan berakhlak baik.</li>
<li>Bukan bagian dari penyelenggara pemilu.</li>
<li>Memiliki pengalaman dalam kegiatan penyuluhan atau aktif dalam organisasi kemasyarakatan/kemahasiswaan.</li>
<li>Membuat program kerja yang akan dilaksanakan.</li>
<li>Relawan demokrasi diutamakan:
<ul>
<li>bagi relawan basis pemilih warga internet mampu mengoperasikan, membuat content/desain/slogan/meme dan memiliki minimal 3 (iga) akun medsos (FB, Twiter, Instagram) dengan follower atau 5 friends sebanyak : • Wilayah Jawa, minimal followers 2000 orang untuk relawan basis pemilih warga internet. •Wilayah Jawa Tengah minimal followers 1000 orang untuk relawan basis pemilih warga internet.</li>
<li>bagi relawan basis komunitas berkedudukan sebagai ketua/anggota komunitas tertentu.</li>
<li>bagi relawan basis disabilitas berkedudukan sebagai ketua/anggota lembaga penyandang disabilitas.</li>
<li>bagi relawan basis keagamaan berkedudukan sebagai penyuluh keagamaan Non-PNS</li>
</ul>
</li>
<li>Bagi peserta yang pernah mengikui kegiatan KPU (Kursus Kepemiluan/ Jambore Demokrasi/ KPU Goes to Campus/ School/ Pesantren) memperoleh prioritas</li>
</ol>
<p><strong>Persyaratan tersebut dibuktikan dengan: </strong></p>
<ol>
<li>Fot KTP yang masih berlaku.</li>
<li>Fotokopi ijazah SLTA atau sederajat.</li>
<li>Pas foto 4 x 6.</li>
<li>Surat pernyataan tidak menjadi anggota partai politik sekurangkurangnya dalam 5 (lima) tahun terakhir.</li>
<li>Surat pernyataan kesediaan menjadi relawan demokrasi.</li>
<li>Surat keterangan terdaftar sebagai pemilih dari PPS.</li>
<li>Surat pernyataan tidak pernah dipidana penjara atau melakukan tindak pidana.</li>
<li>Surat pernyataan bukan bagian dari penyelenggara pemilu 2019.</li>
<li>Sertfikat/Piagam yang berkaitan dengan kegiatan KPU (bagi yang mempunyai).</li>
<li>Datar riwayat hidup.</li>
</ol>
</ol>
<h3><strong>CARA DAFTAR : </strong></h3>
<ol>
<li>Isi form yang ada pada form daftar.</li>
<li>Upload foto dengan backgroud biru/merah.</li>
<li>Scan file di bawah ini dan dijadiin satu dalam format pdf :</li>
	<p>- Surat pernyataan tidak menjadi anggota partai politik sekurangkurangnya dalam 5 (lima) tahun terakhir.</p>
	<p>- Surat pernyataan kesediaan menjadi relawan demokrasi.</p>
	<p>- Surat keterangan terdaftar sebagai pemilih dari PPS.</P>
	<P>- Surat pernyataan tidak pernah dipidana penjara atau melakukan tindak pidana.</P>
	<P>- Surat pernyataan bukan bagian dari penyelenggara pemilu 2019.</P>
	<P>- Sertfikat/Piagam yang berkaitan dengan kegiatan KPU (bagi yang mempunyai).</P>
	<P>- Datar riwayat hidup.</li>
</ol>
<p><strong>Dokumen Pendaftaran dapat di unduh di bawah ini :</strong><br />
<a href='#' class='small-button smallblue' target="_blank">SURAT PERNYATAAN</a><br />
<a href='#' class='small-button smallblue' target="_blank">DAFTAR RIWAYAT HIDUP</a><br />
<a href='#' class='small-button smallblue' target="_blank">FORMULIR PENDAFTARAN</a></p>
</div>
</div>
														

@endsection