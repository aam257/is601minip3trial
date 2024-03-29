<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
  public function testSave()
      {
          $user = factory(\App\User::class)->make();
          $this->assertTrue($user->save());
      }
      public function testQuestions()
      {
          $user = factory(\App\User::class)->make();
          $this->assertTrue(is_object($user->question()->get()));
      }

      public function testProfile()
      {
          $user = factory(\App\User::class)->make();
          $this->assertTrue(is_object($user->profile()->get()));
      }
}
