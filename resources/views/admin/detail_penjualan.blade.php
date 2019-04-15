@extends('layouts.admin.index')
@section('title')
Detail Penjualan
@endsection
@section('isi')

<div class="col-md-12">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Detail Penjualan</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">No Faktur</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Subtotal</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        @php
          $detail_penjualan = \App\DetailPenjualan::all();
          $i = 1;
        @endphp
        @foreach($detail_penjualan as $b)
        @php
          $id_jenis = \App\Jenis::where('id', $b->KodeJenis)->value('Jenis');
        @endphp
        <tbody>
          <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$b->NoFaktur}}</td>
            <td>{{$b->KodeBarang}}</td>
            <td>{{$b->Jumlah}}</td>
            <td>{{$b->Subtotal}}</td>
            <td><a href="delete_admin/{{$b->id}}">Hapus</a></td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
