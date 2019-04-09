@extends('admin.index')
@section('isi')
<div class="col-md-12">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Jenis Barang</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Kode Jenis</th>
            <th scope="col">Jenis</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @php
          $barang = \App\Jenis::all();
          $i = 1;
        @endphp
        @foreach($barang as $b)
        @php
          $id_jenis = \App\Jenis::where('id', $b->KodeJenis)->value('Jenis');
        @endphp
        <tbody>
          <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$b->KodeJenis}}</td>
            <td>{{$b->Jenis}}</td>
            <td><a href="delete_jenis/{{$b->id}}">Hapus</a></td>
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
              <h3 class="box-title">Tambah Jenis</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="save_jenis">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Jenis Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Jenis Barang" name="Jenis">
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
