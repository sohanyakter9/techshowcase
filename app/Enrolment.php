<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\School;

class Enrolment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug',
    ];

    /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schools()
    {
        return $this->belongsTo(School::class);
    }
    
}
