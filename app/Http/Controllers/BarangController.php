<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function save_barang(Request $r)
    {
    	$save = new \App\Barang();
    	$save->NamaBarang = $r->input('NamaBarang');
    	$save->KodeJenis = $r->input('KodeJenis');
    	$save->HargaNet = $r->input('HargaNet');
    	$save->HargaJual = $r->input('HargaJual');
    	$save->Stok = $r->input('Stok');
    	$save->KodeBarang = str_random(5);
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
}
