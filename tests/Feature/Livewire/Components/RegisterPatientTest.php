<?php

namespace Tests\Feature\Livewire\Components;

use App\Livewire\Components\RegisterPatient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class RegisterPatientTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(RegisterPatient::class)
            ->assertStatus(200);
    }
}
