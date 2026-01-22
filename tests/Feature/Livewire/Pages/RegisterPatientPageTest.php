<?php

namespace Tests\Feature\Livewire\Pages;

use App\Livewire\Pages\RegisterPatientPage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class RegisterPatientPageTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(RegisterPatientPage::class)
            ->assertStatus(200);
    }
}
