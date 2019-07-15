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
        <li><a href="{{ route('user.masuk')}}"><span>home</span></a></li>
        <li ><a href="{{ route('user.fdaftar') }}"><span>cara daftar</span></a></li>
        <li class="active"><a href="{{ route('user.daftar') }}"><span>daftar</span></a></li>
        <li><a href="{{ route('user.info') }}"><span>informasi</span></a></li>
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

    <h5 class="display-4">FORMULIR DAFTAR</h5>
  
</div>
<form action="#" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group col-6">
    <label for="nama"><h3> NAMA :</h3></label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="form-group col-6">
    <label for="alamat"><h3>ALAMAT :</h3></label>
    <input type="text" class="form-control" id="alamat" name="alamat">
  </div>
  <div class="form-group col-6">
    <label for="nohp"><h3>NO HP :</h3></label>
    <input type="text" class="form-control" id="nohp" name="nohp">
  </div>
  <div class="form-group col-6">
    <label for="email"><h3>EMAIL :</h3></label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group col-6" >
          <label for="basis" ><h3>PILIH BASIS :</h3></label>
                       
                            <div class="form-group">
                                <select name="basis">
                                    <option value="Bagama">Basis Agama</option>
                                    <option value="Bkeluarga">Basis Keluarga</option>
                                    <option value="Bkomunitas">Basis Komunitas</option>
                                    <option value="Bwarganet">Basis Warganet</option>
                                    <option value="Bdisabilitas">Basis Disabilitas</option>
                                </select>
                            </div>
                        

        </div>

  
  <div class="col-xs-12 col-6">
    <label for="fto"><h3>FOTO :</h3></label>
    <div class="custom-file">
    <input type="file" class="custom-file-input" name="foto" required>
    <label class="custom-file-label" for="validatedCustomFile">Pilih Foto</label>
  </div>
  </div>

    <div class="form-group col-6 col-sm-12 col-md-12">
    <label for="file"><h3>FILE :</h3></label>
    <div class="custom-file">
    <input type="file" class="custom-file-input" name="file" required>
    <label class="custom-file-label" for="validatedCustomFile" >Pilih File</label> 
  </div>
  </div>

  <div class="form-group col-6">
   <div class="button contact_button">
        <a href="{{ url('upload', []) }}" class="d-flex flex-row align-items-center justify-content-center">daftar<img src="public/userzeta/images/arrow_right.svg" alt=""></a>
    </div>
  </div>
                   
               
  </div>
</form>
@endsection