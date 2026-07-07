<?php

use App\Models\News;

test('news show page displays the news title and content', function () {
    $news = News::factory()->create([
        'title' => 'テストニュース',
        'content' => 'テスト本文です。',
    ]);

    $response = $this->get("/news/{$news->id}");

    $response->assertStatus(200);
    $response->assertSee('テストニュース');
    $response->assertSee('テスト本文です。');
});
