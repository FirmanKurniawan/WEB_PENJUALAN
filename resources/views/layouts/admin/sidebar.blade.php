<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('LTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
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
          <a href="/admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/tambah_admin"><i class="fa fa-circle-o"></i> Admin</a></li>
            <li><a href="/admin/tambah_distributor"><i class="fa fa-circle-o"></i> Distributor</a></li>
            <li><a href="/admin/tambah_petugas"><i class="fa fa-circle-o"></i> Petugas</a></li>
          </ul>
        </li>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Data Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/tambah_barang"><i class="fa fa-circle-o"></i> Tambah Barang</a></li>
            <li><a href="/admin/beli"><i class="fa fa-circle-o"></i> Beli Barang</a></li>
            <li><a href="/admin/jual"><i class="fa fa-circle-o"></i> Jual Barang</a></li>
            <li><a href="/admin/barang_masuk"><i class="fa fa-circle-o"></i> Barang Masuk</a></li>
            <li><a href="/admin/detail_barang_masuk"><i class="fa fa-circle-o"></i> Detail Barang Masuk</a></li>
            <li><a href="/admin/tambah_jenis"><i class="fa fa-circle-o"></i> Jenis Barang</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data Penjualan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/penjualan"><i class="fa fa-circle-o"></i> Penjualan</a></li>
            <li><a href="/admin/detail_penjualan"><i class="fa fa-circle-o"></i> Detail Penjualan</a></li>
          </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>