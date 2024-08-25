<?php

namespace Tests\Feature;

use Tests\TestCase;
use Mockery;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProveedorControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test index method returns the correct view and data.
     *
     * @return void
     */
    public function testIndexReturnsCorrectView()
    {
        // Arrange: Crea un mock para el modelo Proveedor
        $mock = Mockery::mock('alias:App\Models\Proveedor');
        $mock->shouldReceive('all')->once()->andReturn(collect([
            (object) [
                'aup_id' => 1,
                'aup_name' => 'Proveedor 1',
                'aup_dennier' => 'some_dennier',
                'aup_meters_threads' => 12,
                'aup_type_threads' => 'some',
                'aup_status' => 'active'
            ],
        ]));

        // Act: Llama al método index del controlador
        $response = $this->get(route('supplier.index'));

        // Assert: Comprueba que la vista es la correcta y que se pasa la variable correcta
        $response->assertStatus(200);
        $response->assertViewIs('layouts.supplier');
        $response->assertViewHas('proveedor');
        $this->assertCount(1, $response->viewData('proveedor'));
    }
}
