<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function testStatusCode()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function testBody()
    {
        $response = $this->get('/login');
        $response->assertSeeText("メールアドレス：");
        $response->assertSeeText("パスワード：");
        $response->assertSeeText("ログイン");
    }
}
