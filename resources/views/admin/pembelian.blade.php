@extends('admin.index')
@section('isi')

<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Beli Barang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="pembelian_save">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Petugas</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="IDPetugas">
                      @php
                        $barang = \App\Barang::all();
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
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Barang</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="IDDistributor">
                      @foreach($barang as $b)
                      <option value="{{$id_d->IDDistributor}}">{{$b->NamaBarang}} - Harga Net : Rp. {{$b->HargaNet}} - Harga Jual : Rp. {{$b->HargaJual}} - Stok : {{$b->Stok}}</option>
                      @php
                        $data = \App\Barang::where('id', $b->id)->first();
                      @endphp
                      @endforeach
                    </select>
                  </div>
                      <input type="hidden" name="HargaNet" value="{{$data->HargaNet}}">
                      <input type="hidden" name="HargaJual" value="{{$data->HargaJual}}">
                      <input type="hidden" name="KodeBarang" value="{{$data->KodeBarang}}">
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Total</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputEmail3" placeholder="Total" name="Total">
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
