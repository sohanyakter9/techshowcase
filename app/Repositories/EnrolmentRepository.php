<?php 
namespace App\Repositories;
use App\Enrolment;

class EnrolmentRepository 
{
    /**
     * The Enrolment instance.
     *
     * @var \App\Enrolment
     */
    protected $model;

   /**
     * Create a new EnrolmentRepository instance.
     *
     * @param  \App\Enrolment $enrolment
     */
    public function __construct(Enrolment $enrolment)
    {
        $this->model = $enrolment;
        
    }
    public function getAllYear() 
    {
        return $this->model
            ->select('year')
            ->groupBy('year')
            ->orderBy('year','asc')
            ->get();
    }
}