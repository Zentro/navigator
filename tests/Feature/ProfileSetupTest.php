<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProfileSetupTest extends TestCase
{
    use RefreshDatabase;

    public function test_profile_setup_page_is_displayed(): void
    {
        $user = User::factory()->create([
            'profile_completed_at' => null,
        ]);

        $response = $this
            ->actingAs($user)
            ->get('/profile/setup');

        $response->assertOk();
    }

    public function test_profile_setup_can_be_setup(): void
    {
        $user = User::factory()->create([
            'profile_completed_at' => null,
        ]);

        $response = $this
            ->actingAs($user)
            ->patch('/profile/setup', [
                'address' => '123 Test St',
                'apartment_number' => '123',
                'zip_code' => '123',
                'city' => 'Test',
                'state' => 'Test'
            ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/profile');

        $user->refresh();

        $response->assertOk();
    }
}