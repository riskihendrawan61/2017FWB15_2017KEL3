<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\stnk;

use App\kendaraan;

class stnkcontroller extends Controller
{
    //
    public function awal()
    {
    	return view('stnk.awal',['data'=>stnk::paginate(10)]);
    }

    public function hapus($id)
   {
    $stnk = stnk::find($id);
    $informasi = $stnk->delete() ? 'berhasil hapus data' : 'gagal hapus data';
    return redirect('stnk')->with(['informasi'=>$informasi]);
   }

   public function tambah()
    {
        $kendaraan = new kendaraan;
        return view('stnk.tambah',compact('kendaraan'));
    }

   public function simpan(Request $input)
    {
        $stnk = new stnk;
        $stnk->norangka = $input->norangka;
        $stnk->nomesin = $input->nomesin;
        $stnk->warna = $input->warna;
        $stnk->silinder = $input->silinder;
        $stnk->bahanbakar = $input->bahanbakar;
        $stnk->kendaraan_id = $input->kendaraan_id;
        $informasi = $stnk->save() ? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('stnk')->with(['informasi'=>$informasi]);
    }

    public function edit($id)
    {
        $stnk = stnk::find($id);
        $kendaraan = new kendaraan;
        return view('stnk.edit',compact('kendaraan','stnk'));
    }

    public function update($id, Request $input)
    {
        $stnk = stnk::find($id);
        $stnk = new stnk;
        $stnk->norangka = $input->norangka;
        $stnk->nomesin = $input->nomesin;
        $stnk->warna = $input->warna;
        $stnk->silinder = $input->silinder;
        $stnk->bahanbakar = $input->bahanbakar;
        $stnk->kendaraan_id = $input->kendaraan_id;
        $stnk->save();
        $informasi = $stnk->save() ? 'Berhasil update data' : 'gagal update data';
        return redirect('stnk')->with(['informasi'=>$informasi]);
    }
}
