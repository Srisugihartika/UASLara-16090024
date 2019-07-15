@extends('layouts.app')


@section('content')

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('public/adminlte/dist/img/avatar5.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="{{ route('admin.home') }}">
            <i class="fa fa-dashboard"></i> <span>Home</span>
            
          </a>
        </li>
        <li class="#">
          <a href="{{ url('caradaftar', []) }}">
            <i class="fa fa-files-o"></i>
            <span>Data Pendaftar</span>
            
          </a>
          
        </li>

        
        
        <li class="#">
          <a href="{{ url('profiladmin', []) }}">
            <i class="fa fa-laptop"></i>
            <span>Profil Admin</span>
            </a>
        </li>
        <li class="#">
          <a href="{{ url('pengumuman', []) }}">
            <i class="fa fa-edit"></i> <span>Pengumuman</span>
            </a>
        </li>
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<section class="content-header">
      <h1>
        ADMIN KPU
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">


      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">KPU</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          Selamat Datang Admin....!
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>

@endsection