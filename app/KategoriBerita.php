<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    protected $table='kategori_berita';

    protected $fillabel = [
	'nama','user_id',
    ];
}
