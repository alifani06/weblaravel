<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table='supplier';

    protected $fillable = ['nama','alamat','email','no_hp','jenis'];

public function material()
{
    // return $this->hasOne('App\Material');
     return $this->belongsTo('App\Material');

}    

}
