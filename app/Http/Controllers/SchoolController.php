<?php

namespace App\Http\Controllers;

use App\Repositories\SchoolRepository;
use App\Repositories\EnrolmentRepository;
use Illuminate\Http\Request;


class SchoolController extends Controller
{
    /**
     * The SchoolRepository instance.
     *
     * @var \App\Repositories\SchoolRepository
     */
    protected $schoolRepository;

    /**
     * The pagination number.
     *
     * @var int
     */
    protected $perPages;
    
    /**
     * Create a new SchoolController instance.
     *
     * @param  \App\Repositories\SchoolRepository $schoolRepository
     * @return void
    */
    public function __construct(SchoolRepository $schoolRepository)
    {
        $this->schoolRepository = $schoolRepository;
        $this->perPages = 30;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, EnrolmentRepository $enrolmentRepository)
    {
        $currentYear = $request->year;
        $schools = $this->schoolRepository->getAll($currentYear, $this->perPages);
        $year = $enrolmentRepository->getAllYear();

        return view('school', [
            'schools' => $schools,
            'year' => $year,
            'current' => $currentYear
        ]);
    }
}
