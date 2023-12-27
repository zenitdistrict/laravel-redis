<?php

namespace Tests\Feature;

use Tests\TestCase;

class UrlControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testGetUrlItems(): void
    {
        $response = $this->get(route('url.index'));

        $response->assertStatus(200);
    }
}
