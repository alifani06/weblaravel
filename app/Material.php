<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    // diguanakan utk menghubungkan dg tabelyg diinginkan
    // protected $table = 'material'; 

    protected $fillable = ['nama','kode','deskripsi'];
}
