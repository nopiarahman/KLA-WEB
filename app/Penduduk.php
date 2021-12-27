<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = "penduduks"; 
    protected $guarded = ['id','created_at','updated_at'];
    
    /**
     * Get the kartuKeluarga that owns the Penduduk
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kartuKeluarga()
    {
        return $this->belongsTo(kartuKeluarga::class);
    }
    /**
     * Get the user that owns the Penduduk
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the pengajuan associated with the Penduduk
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pengajuan()
    {
        return $this->hasOne(pengajuan::class);
    }
}
