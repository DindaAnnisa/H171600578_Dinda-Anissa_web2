<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    protected $table='kategori_galeri';

    protected $fillabel = [
	'nama','user_id',
    ];
}
