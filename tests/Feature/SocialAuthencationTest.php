<?php

namespace Tests\Feature;

use Laravel\Socialite\Facades\Socialite;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SocialAuthencationTest extends TestCase
{
    public function testFacebookAuthencation()
    {
        Socialite::shouldReceive('driver->fields->scopes->user')->andReturn(true);
        $this->get(route('social', ['callback' => 'facebook']));
    }

    public function testTwitterAuthencation()
    {
        Socialite::shouldReceive('driver->fields->scopes->user')->andReturn();
        $this->get(route('social', ['callback' => 'twitter']));
    }
}
