@extends('admin.index')
@section('isi')

<div class="col-md-12">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Distributor</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ID Petugas</th>
            <th scope="col">Nama Petugas</th>
            <th scope="col">Alamat</th>
            <th scope="col">Email</th>
            <th scope="col">Telepon</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @php
          $barang = \App\Petugas::all();
          $i = 1;
        @endphp
        @foreach($barang as $b)
        @php
          $id_jenis = \App\Jenis::where('id', $b->KodeJenis)->value('Jenis');
        @endphp
        <tbody>
          <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$b->IDPetugas}}</td>
            <td>{{$b->NamaPetugas}}</td>
            <td>{{$b->Alamat}}</td>
            <td>{{$b->Email}}</td>
            <td>{{$b->Telepon}}</td>
            <td><a href="delete_petugas/{{$b->id}}">Hapus</a></td>
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
              <h3 class="box-title">Tambah Petugas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @php
              $jenis = \App\Jenis::all();
            @endphp
            <form class="form-horizontal" method="POST" action="save_petugas">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Petugas</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Petugas" name="NamaPetugas">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Alamat" name="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Telepon</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputEmail3" placeholder="Telepon" name="Telepon">
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
