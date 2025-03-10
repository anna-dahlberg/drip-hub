<?php

namespace Tests\Feature;

use App\Models\Material;
use App\Models\ModelRing;
use App\Models\RingType;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_product()
    {
        $types = RingType::factory()->count(3)->create();
        $materials = Material::factory()->count(3)->create();
        $models = ModelRing::factory()->count(3)->create();

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('products.create'));

        $response->assertStatus(200);
        $response->assertViewIs('products.create');
        $response->assertViewHasAll(['types', 'materials', 'models']);
    }

    public function test_edit_product() {}

    public function test_destroy_product() {}
}
