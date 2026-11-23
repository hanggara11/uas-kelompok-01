<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_profile_pages_render_without_database_data(): void
    {
        foreach ([
            '/hanggara' => 'Hanggara',
            '/gekya' => 'Gekya',
            '/anonim' => 'Anonim',
        ] as $path => $name) {
            $this->get($path)
                ->assertOk()
                ->assertSeeText($name)
                ->assertSeeText('Belum diisi');
        }
    }
}
