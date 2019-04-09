<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function save_distributor(Request $r)
    {
    	$distributor = new \App\Distributor();
    	$distributor->NamaDistributor = $r->input('NamaDistributor');
        $distributor->IDDistributor = str_random(5);
    	$distributor->Alamat = $r->input('Alamat');
    	$distributor->KotaAsal = $r->input('KotaAsal');
    	$distributor->Email = $r->input('Email');
    	$distributor->Telepon = $r->input('Telepon');
    	$distributor->save();

    	return redirect()->back();
    }

    public function save_petugas(Request $r)
    {
    	$petugas = new \App\Petugas();
        $petugas->NamaPetugas = $r->input('NamaPetugas');
        $petugas->IDPetugas = str_random(5);
        $petugas->Alamat = $r->input('Alamat');
        $petugas->Email = $r->input('Email');
        $petugas->Telepon = $r->input('Telepon');
        $petugas->save();

        return redirect()->back();
    }

    public function save_admin(Request $r)
    {
        $admin = new \App\User();
        $admin->name = $r->input('name');
        $admin->email = $r->input('email');
        $admin->status = 2;
        $admin->password = bcrypt($r->input('password'));
        $admin->save();

        return redirect()->back();
    }

    public function delete_admin($id)
    {
        $admin = \App\User::find($id);
        $admin->delete();

        return redirect()->back();
    }

    public function delete_distributor($id)
    {
        $distributor = \App\Distributor::find($id);
        $distributor->delete();

        return redirect()->back();
    }

    public function delete_petugas($id)
    {
        $petugas = \App\Petugas::find($id);
        $petugas->delete();

        return redirect()->back();
    }
}
