<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPelanggan extends Model
{

	protected $primaryKey = 'id_pelanggan';

    protected $fillable=['nama_pelanggan', 'alamat'];
}
