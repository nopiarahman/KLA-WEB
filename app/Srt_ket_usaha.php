<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Srt_ket_usaha extends Model
{
    protected $guarded = [];
    public function penduduk()
    {
        return $this->belongsTo(penduduk::class);
    }
}
