<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    // diguanakan utk menghubungkan dg tabelyg diinginkan
    // protected $table = 'material'; 

    protected $fillable = ['nama','kode','deskripsi','jenis'];

    public function supplier()
    {
        // return $this->belongsTo('App\Supplier');
        return $this->hasOne('App\Supplier');
    }
}
