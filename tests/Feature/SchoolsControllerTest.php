<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SchoolsControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertSeeText('School')
            ->assertViewIs('welcome');
    }

    public function testSchoolPagecode() 
    {
        $school = factory('App\School', 3)->create();
        $enrolments = factory('App\Enrolment', 20)->create();
        $school = $school->random();

        $response = $this->get('/schools/');

        $response->assertStatus(200)
            ->assertSeeText('School')
            ->assertViewIs('school')
            ->assertViewHas('schools')
            ->assertSeeText($school->school_name);
    }
}
