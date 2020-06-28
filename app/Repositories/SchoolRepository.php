<?php 
namespace App\Repositories;

use App\School;
use App\Enrolment;

class SchoolRepository 
{
    /**
     * The School instance.
     *
     * @var \App\School
     */
    protected $model;

   /**
     * Create a new SchoolRepository instance.
     *
     * @param  \App\School $school
     */
    public function __construct(School $school)
    {
        $this->model = $school;
        
    }
    public function getAll($year, $perPage) 
    {
        if($year)
        {
            $school_records = $this->model
                ->select('id', 'school_code', 'school_name')
                ->with(['enrolments' => function ($query) use ($year) {
                    $query->select('school_id', 'year', 'no_of_students');
                    $query->where('year', '>=', $year);
                    $query->orderBy('year', 'asc');
                }])->paginate($perPage);
        }else
        {
            $school_records = $this->model
                ->select('id', 'school_code', 'school_name')
                ->with(['enrolments' => function ($query) {
                    $query->select('school_id', 'year', 'no_of_students');
                    $query->orderBy('year', 'asc');
                }])->paginate($perPage);
        }

        return $school_records;
    }
}