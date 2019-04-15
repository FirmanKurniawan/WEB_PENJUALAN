@extends('admin.index')
@section('isi')

<div class="col-md-12">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Penjualan</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">No Faktur</th>
            <th scope="col">Tanggal Penjualan</th>
            <th scope="col">ID Petugas</th>
            <th scope="col">Bayar</th>
            <th scope="col">Sisa</th>
            <th scope="col">Total</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        @php
          $detail_penjualan = \App\Penjualan::all();
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
            <td>{{$b->TglPenjualan}}</td>
            <td>{{$b->IDPetugas}}</td>
            <td>{{$b->Bayar}}</td>
            <td>{{$b->Sisa}}</td>
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
