<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    public function testStatusCode()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function testBody()
    {
        $response = $this->get('/register');
        $response->assertSeeText("名前：");
        $response->assertSeeText("メールアドレス：");
        $response->assertSeeText("パスワード：");
        $response->assertSeeText("パスワード（確認）：");
        $response->assertSeeText("送信");
    }
}
