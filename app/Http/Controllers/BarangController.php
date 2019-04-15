<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function save_barang(Request $r)
    {
    	$save = new \App\Barang();
    	$save->NamaBarang = $r->input('NamaBarang');
    	$save->KodeJenis = $r->input('KodeJenis1');
    	$save->HargaNet = $r->input('HargaNet');
    	$save->HargaJual = $r->input('HargaJual');
    	$save->Stok = $r->input('Stok');
        $kode = str_random(5);
    	$save->KodeBarang = $kode;
    	$save->save();

    	return redirect()->back();
    }

    public function save_jenis(Request $r)
    {
    	$save = new \App\Jenis();
    	$save->Jenis = $r->input('Jenis');
        $save->KodeJenis = str_random(5);
    	$save->save();

    	return redirect()->back();
    }

    public function delete_barang($id)
    {
        $barang = \App\Barang::find($id);
        $barang->delete();

        return redirect()->back();
    }

    public function delete_jenis($id)
    {
        $jenis = \App\Jenis::find($id);
        $jenis->delete();

        return redirect()->back();
    }

    public function barang_masuk(Request $r)
    {
        $barang = new \App\BrgMasuk();
        $barang->IDPetugas = $r->input('IDPetugas');
        $barang->IDDistributor = $r->input('IDDistributor');
        $barang->Total = $r->input('Total');
        $barang->TglMasuk = "tes";
        $nota = rand(1, 100);
        $barang->NoNota = $nota;
        

        $detail = new \App\DetailBrgMasuk();
        $detail->NoNota = $nota;
        $detail->KodeBarang = "1";
        $detail->Jumlah = "1";
        $detail->Subtotal = "1";
        $barang->save();
        $detail->save();

        return redirect()->back();
    }

    public function detail_penjualan()
    {
        
    }
}
