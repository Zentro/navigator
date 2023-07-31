<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FuelQuoteFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_fuelquote_form_page_is_displayed(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/quoteform');

        $response->assertOk();
    }

    public function test_fuelquote_form_can_submit(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post('/quoteform/submit', [
                'gallons' => 23131,
                'totalamountdue' => 40247.94,
                'pricepergallons' => 1.74,
                'delivdate' => '2023-07-31 20:29:45',
            ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('quotehistory');
    }

    public function test_fuelquote_history_page_is_displayed(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/quotehistory');

        $response->assertOk();
    }
}