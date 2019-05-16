<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VotesTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testSave()
    {

        $user = $user = factory(\App\User::class)->make();
        $user->save();
        $votes = factory(\App\Votes::class)->make();
        $votes->user()->associate($user);
        $this->assertTrue($votes->save());    }
}
