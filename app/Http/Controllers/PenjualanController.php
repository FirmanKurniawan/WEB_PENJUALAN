<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function penjualan(Request $r)
    {
    	$penjualan = new \App\Penjualan();
    	$faktur = uniqid();
    	$penjualan->NoFaktur = $faktur;
    	$penjualan->TglPenjualan = "1";
    	$penjualan->IDPetugas = $r->input('IDPetugas');
    	$penjualan->Bayar = $r->input('Bayar');
    	$penjualan->Sisa = $r->input('Bayar') - $r->input('HargaJual');
    	$penjualan->Total = $r->input('Total');
    	$penjualan->save();

    	$detail = new \App\DetailPenjualan();
    	$detail->NoFaktur = $faktur;
    	$detail->Jumlah = $r->input('Total') * $r->input('HargaNet');
    	$detail->Subtotal = $r->input('Total') * $r->input('HargaJual');
    	$detail->KodeBarang = $r->input('KodeBarang');
    	$detail->save();

    	$stok = \App\Barang::find($r->input('id'));
    	$stok->Stok = $r->input('Stok') - $r->input('Total');
    	$stok->save();

    	return redirect()->back();
    }
}
