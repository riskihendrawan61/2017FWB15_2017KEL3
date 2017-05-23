<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\petugas;
use Illuminate\Auth\SessionGuard;
use Auth;
class SesiController extends Controller
{
    public function index()
	{
		return view('master');
	}

	public function form()
	{
		if(Auth::check()){
			return redirect('/');
		}else
		return view('loginpetugas')->withErrors(['Silahkan Login Terlebih Dahulu']);
	}

	public function validasi(Request $input)
	{
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
		]);
		$petugas = petugas::where($input->only('username','password'))->first();
		if(! is_null($petugas))
		{
			Auth::login($petugas);
			
			if(Auth::check())
				return redirect('/')->with('informasi',"Selamat datang ".Auth::user()->username);
		}
		return redirect('/loginpetugas')->withErrors(['Pengguna tidak ditemukan']);
	}
	public function logout(){
		if(Auth::check()){
			Auth::logout();
			return redirect('/loginpetugas')->withErrors(['Silahkan login untuk masuk ke sistem']);
		}else{
			return redirect('/loginpetugas')->withErrors(['Silahkan login terlebih dahulu']);
		}
		
	}
}