<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'aup_name' => fake() -> word(),
            'aup_dennier' => fake() -> word(),
            'aup_meters_threads' => fake() -> numberBetween(1,1200),
            'aup_type_threads'=> fake() -> word(),
            'aup_status' => fake() -> word(),
        ];
    }
}
