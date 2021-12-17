<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\employeeController
 */
class employeeControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function test_behaves_as_expected()
    {
        $employees = employee::factory()->count(3)->create();

        $response = $this->get(route('employee.test'));
    }


    /**
     * @test
     */
    public function get_behaves_as_expected()
    {
        $employee = Employee::factory()->create();

        $response = $this->get(route('employee.get'));
    }
}
