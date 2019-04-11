@extends('admin.index')
@section('isi')

<div class="col-md-12">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Detail Barang Masuk</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NoNota</th>
            <th scope="col">KodeBarang</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Subtotal</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        @php
          $barang = \App\DetailBrgMasuk::all();
          $barang1 = \App\DetailBrgMasuk::all();
          $i = 1;
        @endphp
        @foreach($barang as $b)
        @php
          $id_jenis = \App\Jenis::where('id', $b->KodeJenis)->value('Jenis');
        @endphp
        <tbody>
          <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$b->name}}</td>
            <td>{{$b->email}}</td>
            <td><a href="delete_admin/{{$b->id}}">Hapus</a></td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
