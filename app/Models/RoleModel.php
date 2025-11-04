<?php

namespace App\Models;

use Spatie\Permission\Models\Role;
use Database\Factories\RoleFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoleModel extends Role
{
    public $table = 'model_has_roles';
    use HasFactory;
    protected $guarded =[];

   
    protected static function newFactory()
    {
        return RoleFactory::new();
    }
}