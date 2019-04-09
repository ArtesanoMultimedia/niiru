<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'planes';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Get actividades de un plan
     */
    public function actividades()
    {
        return $this->hasMany('App\Actividad');
    }

    /**
     * Get usuario que creó el plan.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable = ['titulo', 'user_id'];
}
