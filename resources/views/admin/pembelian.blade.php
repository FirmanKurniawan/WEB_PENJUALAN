@extends('admin.index')
@section('isi')

<div class="col-md-12">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Barang Masuk</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nota</th>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">ID Distributor</th>
            <th scope="col">ID Petugas</th>
            <th scope="col">Total</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        @php
          $barang = \App\BrgMasuk::all();
          $i = 1;
        @endphp
        @foreach($barang as $b)
        @php
          $id_jenis = \App\Jenis::where('id', $b->KodeJenis)->value('Jenis');
        @endphp
        <tbody>
          <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$b->NoNota}}</td>
            <td>{{$b->TglMasuk}}</td>
            <td>{{$b->IDDistributor}}</td>
            <td>{{$b->IDPetugas}}</td>
            <td>{{$b->Total}}</td>
            <td><a href="delete_admin/{{$b->id}}">Hapus</a></td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>

<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Barang Masuk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="barang_masuk">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Petugas</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="IDPetugas">
                      @php
                        $id_petugas = \App\Petugas::all();
                        $id_distributor = \App\Distributor::all();
                      @endphp
                      @foreach($id_petugas as $id_p)
                      <option value="{{$id_p->IDPetugas}}">{{$id_p->NamaPetugas}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Distributor</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="IDDistributor">
                      @foreach($id_distributor as $id_d)
                      <option value="{{$id_d->IDDistributor}}">{{$id_d->NamaDistributor}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Total</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Total" name="Total">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</div>
@endsection
