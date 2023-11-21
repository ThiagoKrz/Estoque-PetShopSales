<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use App\Models\Categoria;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $nome = $this->faker->unique()->sentence();
        return [
            'nome' => $nome,
            'descricao' => $this->faker->paragraph(),
            'preco' => $this->faker->randomNumber(2),
            'slug' => Str::slug($nome),
            'imagem' => $this->faker->imageUrl(400, 400),
            'id_categoria' => Categoria::pluck('id')->random(),
            'id_user' => User::pluck('id')->random(),
        ];
    }
}
