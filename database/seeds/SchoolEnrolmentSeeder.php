<?php

use Illuminate\Database\Seeder;
use App\School;
use App\Enrolment;

class SchoolEnrolmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enrolments_json_data = File::get('database/data/school-enrolments-data.json');

        $enrolments_data_full = json_decode($enrolments_json_data, true);
        $enrolments_data_chunk = array_chunk($enrolments_data_full, 100, true); 

        foreach($enrolments_data_chunk as $enrolments_data)
        {
            foreach($enrolments_data as $enrolment)
            {
                // Create School Records
                $school = School::create(
                    [
                        'school_code' => $enrolment['School Code'],
                        'school_name' => $enrolment['School Name'],
                    ]
                );
    
                $enrolment_records = array_slice($enrolment, 2);
                foreach($enrolment_records as $year => $enrolment_record)
                {
                    // Create Enrolment Records
                    Enrolment::create(
                        [
                            'school_id' => $school->id,
                            'year' => str_replace('HC_', '', $year),
                            'no_of_students' => $enrolment_record,
                        ]
                    );
    
                }
            }            

        }
    }
}
