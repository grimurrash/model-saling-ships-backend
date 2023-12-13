<?php

namespace Tests\Feature;

use App\Models\News;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class NewsTest extends TestCase
{
    use DatabaseTransactions;

    public function testGetList(): void
    {
        News::factory(2)->create();
        $response = $this->get(route('news.list'));
        $response->assertOk();
        $data = $response->json();
        $this->assertNotEmpty($data['items']);
        $this->assertCount(2, $data['items']);
    }

    public function testShow(): void
    {
        $new = News::factory()->create();
        $response = $this->get(route('news.show', ['slug' => $new->slug]));
        $response->assertOk();
        $data = $response->json();
        $this->assertEquals($new->id, $data['id']);
    }
}
