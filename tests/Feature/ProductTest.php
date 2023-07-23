<?php

namespace Tests\Feature;

use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /** @test */
    public function it_can_list_products(): void
    {
        $products = Product::factory()->count(5)->create();

        $this->get(route('products.index'))
            ->assertSuccessful()
            ->assertViewHas('products', $products);
    }

    /** @test */
    public function it_can_create_a_product(): void
    {
        $product = Product::factory()->make()->toArray();

        $this->post(route('products.store'), $product)
            ->assertSessionHasNoErrors()
            ->assertRedirectToRoute('products.index');

        $this->assertDatabaseHas('products', $product);
    }

    /** @test */
    public function it_can_update_a_product(): void
    {
        $product = Product::factory()->create();

        $updatedData = Product::factory()->make()->toArray();

        $this->put(route('products.update', $product->id), $updatedData)
            ->assertSessionHasNoErrors()
            ->assertRedirectToRoute('products.index');

        $this->assertDatabaseMissing('products', $product->toArray());

        $this->assertDatabaseHas('products', $updatedData);
    }

    /** @test */
    public function it_can_show_a_product(): void
    {
        $product = Product::factory()->create();

        $this->get(route('products.show', $product->id))
            ->assertSuccessful()
            ->assertViewHas('product', $product);
    }

    /** @test */
    public function it_can_delete_a_product(): void
    {
        $product = Product::factory()->create();

        $this->delete(route('products.destroy', $product->id))
            ->assertSessionHasNoErrors()
            ->assertRedirectToRoute('products.index');

        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
}
