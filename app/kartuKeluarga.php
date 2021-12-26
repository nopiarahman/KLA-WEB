<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kartuKeluarga extends Model
{
    use HasFactory;
    protected $table = "kartuKeluarga"; 
    protected $guarded = [];

    /**
     * Get the penduduk associated with the kartuKeluarga
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function penduduk() 
    {
        return $this->hasOne(penduduk::class);
    }
}
