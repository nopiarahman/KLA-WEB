<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Srt_ket_tdk_mampu extends Model
{
    protected $guarded = [];
    
    /**
     * Get the penduduk that owns the Srt_ket_tdk_mampu
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penduduk()
    {
        return $this->belongsTo(penduduk::class);
    }
}
