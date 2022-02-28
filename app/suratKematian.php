<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratKematian extends Model
{
    use HasFactory;
    protected $table = "suratKematian";
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get the penduduk that owns the suratKematian
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penduduk()
    {
        return $this->belongsTo(penduduk::class);
    }
}
