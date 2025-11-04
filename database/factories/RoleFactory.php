<?php

namespace Database\Factories;

use App\Models\RoleModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoleFactory extends Factory
{
    protected $model = RoleModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $roles = ['CEO', 'Admin', 'Accounts','Clerk'];

        return [
            'name' => $this->faker->unique->randomElement($roles)
        ];
    }
}