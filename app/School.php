<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Enrolment;

class School extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school_code', 'school_name',
    ];

    //
    /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
	public function enrolments()
	{
		return $this->hasMany(Enrolment::class);
	}
}
