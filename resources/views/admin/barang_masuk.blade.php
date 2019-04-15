@extends('layouts.admin.index')
@section('title')
Barang Masuk
@endsection
@section('isi')

<div class="col-md-12">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Barang Masuk</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">No Nota</th>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">ID Distributor</th>
            <th scope="col">ID Petugas</th>
            <th scope="col">Total</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        @php
          $barang_masuk = \App\BrgMasuk::all();
          $i = 1;
        @endphp
        @foreach($barang_masuk as $b)
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
@endsection
