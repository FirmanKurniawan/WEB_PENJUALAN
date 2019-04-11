<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
	public function pembelian(Request $r)
	{
		$barang_masuk = new \App\BrgMasuk();
		$nota = rand(1, 100);
		$barang_masuk->NoNota = $nota;
		$barang_masuk->TglMasuk = "test";
		$barang_masuk->IDDistributor = $r->input('IDDistributor');
		$barang_masuk->IDPetugas = $r->input('IDPetugas');
		$barang_masuk->Total = $r->input('Total');
		$barang_masuk->save();

		$detail = new \App\DetailBrgMasuk();
		$detail->NoNota = $nota;
		$detail->KodeBarang = $r->input('KodeBarang');
		$detail->Jumlah = $r->input('HargaNet') * $r->input('Total');
		$detail->Subtotal = $r->input('HargaJual') * $r->input('Total');
		$detail->save();

		return redirect()->back();
	}
}
