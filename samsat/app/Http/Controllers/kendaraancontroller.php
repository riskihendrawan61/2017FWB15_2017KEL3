<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\wajibpajak;

use App\kendaraan;

class kendaraancontroller extends Controller
{
    //
   public function awal()
    {
    	$semuakendaraan = kendaraan::all();
        return view('kendaraan.awal',['data'=>kendaraan::paginate(10)]);

    }

    public function lihat($id)
    {
        $kendaraan = kendaraan::find($id);
        return view('kendaraan.lihat')->with(array('kendaraan'=>$kendaraan));
    }

    public function hapus($id)
   {
    $kendaraan = kendaraan::find($id);
    $informasi = $kendaraan->delete() ? 'berhasil hapus data' : 'gagal hapus data';
    return redirect('kendaraan')->with(['informasi'=>$informasi]);
   }

   public function tambah()
    {
    	$wajibpajak = new wajibpajak;
    	return view('kendaraan.tambah',compact('wajibpajak'));
    }

    public function simpan(Request $input)
    {
    	$kendaraan = new kendaraan;
        $kendaraan->wajibpajak_id = $input->wajibpajak_id;
    	$kendaraan->merk= $input->merk;
    	$kendaraan->jenis= $input->jenis;
        $informasi = $kendaraan->save() ? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('kendaraan')->with(['informasi'=>$informasi]);
    }

    public function edit($id)
    {
        $kendaraan = kendaraan::find($id);
        $wajibpajak = new wajibpajak;
        return view('kendaraan.edit',compact('kendaraan','wajibpajak'));
    }

    public function update($id, Request $input)
    {
        $kendaraan = kendaraan::find($id);
        $kendaraan->wajibpajak_id = $input->wajibpajak_id;
        $kendaraan->merk= $input->merk;
        $kendaraan->jenis= $input->jenis;
        $kendaraan->save();
        $informasi = $kendaraan->save() ? 'Berhasil update data' : 'gagal update data';
        return redirect('kendaraan')->with(['informasi'=>$informasi]);
    }
}
