<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class wajibpajak extends Model implements AuthenticatableContract
{
    //
    use Authenticatable;
    //
    protected $table = 'wajibpajak';
    //protected $fillable = ['username','password'];
    protected $guarded = ['id'];

    protected $fillable= ['nama','jekel','alamat','telepon'];
}
