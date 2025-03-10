<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function create_product_test() {}

    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
