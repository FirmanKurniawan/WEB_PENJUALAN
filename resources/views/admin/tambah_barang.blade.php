@extends('admin.index')
@section('isi')

<div class="col-md-12">
	<div class="box box-info">
		<div class="box-header with-border">
			<h3 class="box-title">Barang</h3>
			<table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nama Barang</th>
			      <th scope="col">Jenis</th>
			      <th scope="col">Harga Net</th>
			      <th scope="col">Harga Jual</th>
			      <th scope="col">Stok</th>
            <th scope="col">Action</th>
			    </tr>
			  </thead>
			  @php
			  	$barang = \App\Barang::all();
			  	$i = 1;
			  @endphp
			  @foreach($barang as $b)
			  @php
			  	$id_jenis = \App\Jenis::where('KodeJenis', $b->KodeJenis)->value('Jenis');
			  @endphp
			  <tbody>
			    <tr>
			      <th scope="row">{{$i++}}</th>
			      <td>{{$b->NamaBarang}}</td>
			      <td>{{$id_jenis}}</td>
			      <td>{{$b->HargaNet}}</td>
			      <td>{{$b->HargaJual}}</td>
			      <td>{{$b->Stok}}</td>
            <td><a href="delete_barang/{{$b->id}}">Hapus</a></td>
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
              <h3 class="box-title">Tambah Barang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @php
            	$jenis = \App\Jenis::all();
            @endphp
            <form class="form-horizontal" method="POST" action="save_barang">
            	@csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Barang" name="NamaBarang">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="KodeJenis1">
                    	<option readonly>Pilih Jenis</option>
                    @foreach($jenis as $j)
                    	<option value="{{$j->KodeJenis}}">{{$j->Jenis}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga Net</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Harga Net" name="HargaNet">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga Jual</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Harga Jual" name="HargaJual">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Stok Barang</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputEmail3" placeholder="Stok Barang" name="Stok">
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
