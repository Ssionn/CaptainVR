<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }

    public function test_that_return_coaches_from_database()
    {
        $this->assertDatabaseHas('coaches', [
            'name' => 'John Doe',
        ]);
    }
}
