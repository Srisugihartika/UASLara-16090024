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
				<li ><a href="{{ route('user.fdaftar') }}"><span>cara daftar</span></a></li>
				<li><a href="{{ route('user.daftar') }}"><span>daftar</span></a></li>
				<li class="active"><a href="{{ route('user.info') }}"><span>informasi</span></a></li>
			</ul>
		</nav>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<span class="hamburger_text">Menu</span>
			<span class="hamburger_icon"></span>
		</div>

</header>

<div class="content">
<div class="jumbotron">

    <h5 class="display-4">PENGUMUMAN RELASI</h5>
  
</div>
</div>
@endsection