<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'actividades';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get plan al que pertenece
     */
    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }
}
