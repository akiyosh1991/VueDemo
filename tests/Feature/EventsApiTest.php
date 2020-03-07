<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Event;
use App\User;

class EventsApiTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        // データベースマイグレーション
        $this->artisan('migrate');

        // テストユーザー作成
        factory(User::class, 10)->create();
    }

    /**
     * イベント登録APIテスト
     *
     * @test
     */
    public function should_登録したイベント名を返却する()
    {
        $data = [
            'user_id' => 4,
            'name' => 'this is first event',
            'date' => 'place',
            'place' => 'tokyo',
            'description' => 'this is first event description.',
        ];

        $response = $this->postJson(route('event.create'), $data);
        $response->assertStatus(201);
    }
}
