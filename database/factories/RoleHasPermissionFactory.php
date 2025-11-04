<?php

namespace Database\Factories;

use App\Models\RoleHasPermission;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoleHasPermission>
 */
class RoleHasPermissionFactory extends Factory
{
    protected $model = RoleHasPermission::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'role_id' => 1,
            'permission_id' => 1
        ];
    }
}