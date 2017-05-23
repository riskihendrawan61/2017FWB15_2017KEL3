<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stnk extends Model
{
    //
    protected $table = 'stnk';
    //protected $fillable = ['username','password'];
    protected $guarded = ['id','kendaraan_id'];

    public function tagihanstnk()
    {
    	return $this->hasMany(tagihanstnk::class);
    }

        public function kendaraan()
    {
        return $this->belongsto(kendaraan::class);
    }


    public function liststnk()
    {
        $out = [];
        foreach ($this->all() as $stnk)
        {
            $out[$stnk->id] = "{$stnk->nomesin_stnk}";
        }
        return $out;
    }
}
  