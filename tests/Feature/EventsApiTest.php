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

    /**
     * イベント情報取得APIテスト
     *
     * @test
     */
    public function should_配列形式のイベントを取得する()
    {
        factory(Event::class, 5)->create();

        $response = $this->json('GET', route('event.index'));
        $events = Event::with(['user'])->orderBy('date', 'desc')->get();

        $expected_data = $events->map(function ($event) {
            return [
                'id' => $event->id,
                'name' => $event->name,
                'date' => $event->date
            ];
        })->all();
        $response->assertStatus(200)
            ->assertJsonCount(5);
    }
}
