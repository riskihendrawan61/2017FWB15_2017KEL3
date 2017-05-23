<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\petugas;

use App\tagihanstnk;

use App\stnk;

class tagihanstnkcontroller extends Controller
{
    //
    public function awal()
    {
    	return view('tagihanstnk.awal',['data'=>tagihanstnk::paginate(10)]);
    }

    public function hapus($id)
   {
    $tagihanstnk = tagihanstnk::find($id);
    $informasi = $tagihanstnk->delete() ? 'berhasil hapus data' : 'gagal hapus data';
    return redirect('tagihanstnk')->with(['informasi'=>$informasi]);
   }

   public function tambah()
    {
        $stnk = new stnk;
        return view('tagihanstnk.tambah',compact('petugas','stnk'));
    }

   public function simpan(Request $input)
    {
        $tagihanstnk = new tagihanstnk;
        $tagihanstnk->petugas_id = $input->petugas_id;
        $tagihanstnk->stnk_id = $input->stnk_id;
        $tagihanstnk->tanggalpembayaran = $input->tanggalpembayaran;
        $tagihanstnk->nopembayaran = $input->nopembayaran;
        $tagihanstnk->status = $input->status;
        $informasi = $tagihanstnk->save() ? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('tagihanstnk')->with(['informasi'=>$informasi]);
    }

    public function edit($id)
    {
        $tagihanstnk = tagihanstnk::find($id);
        $stnk = new stnk;
        $petugas = new petugas;
        return view('tagihanstnk.edit',compact('stnk','petugas','tagihanstnk'));
    }

    public function update($id, Request $input)
    {
        $tagihanstnk = tagihanstnk::find($id);
        $tagihanstnk = new tagihanstnk;
        $tagihanstnk->petugas_id = $input->petugas_id;
        $tagihanstnk->stnk_id = $input->stnk_id;
        $tagihanstnk->tanggalpembayaran = $input->tanggalpembayaran;
        $tagihanstnk->nopembayaran = $input->nopembayaran;
        $tagihanstnk->status = $input->status;
        $tagihanstnk->save();
        $informasi = $tagihanstnk->save() ? 'Berhasil update data' : 'gagal update data';
        return redirect('tagihanstnk')->with(['informasi'=>$informasi]);
    }
}
