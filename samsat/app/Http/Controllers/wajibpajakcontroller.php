<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\wajibpajak;

class wajibpajakcontroller extends Controller
{
    public function awal()
    {
    	return view('wajibpajak.awal',['data'=>wajibpajak::paginate(10)]);
    }
    public function tambah()
    {
    	return view('wajibpajak.tambah');
    }
    public function simpan(Request $input)
    {
        $this->validate($input,[
            'nama'=>'required',
            'jekel'=>'required',
            'alamat'=>'required',
            'telepon'=>'required|integer',
        ]);

    	$wajibpajak = new wajibpajak;
    	$wajibpajak->nama = $input->nama;
    	$wajibpajak->jekel = $input->jekel;
    	$wajibpajak->alamat = $input->alamat;
    	$wajibpajak->telepon = $input->telepon;
    	$informasi = $wajibpajak->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('wajibpajak')->withErrors(['informasi'=>$informasi]);
    }
    public function lihat($id)
    {
        $wajibpajak = wajibpajak::find($id);
        return view('wajibpajak.lihat')->with(array('wajibpajak'=>$wajibpajak));
    }

    public function hapus($id)
   {
    $wajibpajak = wajibpajak::find($id);
    $informasi = $wajibpajak->delete() ? 'berhasil hapus data' : 'gagal hapus data';
    return redirect('wajibpajak')->with(['informasi'=>$informasi]);
   }
}