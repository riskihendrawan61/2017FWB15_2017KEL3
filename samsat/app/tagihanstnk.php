<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tagihanstnk extends Model
{
    protected $table = 'tagihanstnk';

    protected $guarded = ['id','stnk_id','petugas_id'];

    public function stnk()
    {
    	return $this->belongsTo(stnk::class);
    }

    public function petugas()
    {
    	return $this->belongsTo(petugas::class);
    }

    public function listtagihanstnk()
    {
        $out = [];
        foreach ($this->all() as $tagihanstnk)
        {
            $out[$tagihanstnk->id] = "{$tagihanstnk->nopembayaran_tagihanstnk}";
        }
        return $out;
    }
}
 