<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    protected $fillable = ['user_id', 'tanggal', 'gula_darah', 'tensi', 'pesan_dokter'];
}
