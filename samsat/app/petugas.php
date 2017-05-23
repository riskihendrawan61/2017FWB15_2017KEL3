<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model implements AuthenticatableContract
{
    use Authenticatable;
    //
    protected $table = 'petugas';
    //protected $fillable = ['username','password'];
    protected $guarded = ['id'];

    public function tagihanstnk()
    {
    	return $this->hasMany(tagihanstnk::class);
    }

    public function listpetugas()
    {
        $out = [];
        foreach ($this->all() as $petugas)
        {
            $out[$petugas->id] = "{$petugas->nama}";
        }
        return $out;
    }
}
