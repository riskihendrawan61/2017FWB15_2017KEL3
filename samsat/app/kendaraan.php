<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    protected $table = 'kendaraan';

    protected $guarded = ['id','wajibpajak_id'];

    public function wajibpajak()
    {
    	return $this->belongsTo(wajibpajak::class);
    }

        public function stnk()
    {
        return $this->hasMany(stnk::class);
    }

     public function listkendaraan()
    {
        $out = [];
        foreach ($this->all() as $kendaraan)
        {
            $out[$kendaraan->id] = "{$kendaraan->merk}";
        }
        return $out;
    }
}
