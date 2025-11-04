<?php

namespace App\Http\Controllers;

use App\Models\RoleModel;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function create_role(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', Rule::unique('roles')],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {
                $role = RoleModel::create(['name' => $request->name, 'guard_name' => 'web']);
                if ($request->permissions) {
                    $permissions = collect($request->permissions)->map(function ($perm) use ($role) {
                        return [
                            'role_id' => $role->id,
                            'permission_id' => $perm
                        ];
                    })->toArray();
                    DB::table('role_has_permissions')->insert($permissions);
                }
                
                if ($role) {
                    return response()->json([
                        "message" => "Role Created Successfully"
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Something Went Wrong"
                    ], 302);
                }
        }
    }

    public function delete_role($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of role for deleting"
            ], 302);
        }
        if (Role::where('id', $id)->count() > 0) {
            $Role = Role::where('id', $id)->delete();
            if ($Role) {
                return response()->json([
                    "message" => "Role Deleted Successfully"
                ], 200);
            } else {
                return response()->json([
                    "message" => "Something went wrong!"
                ], 302);
            }
        } else {
            return response()->json([
                "message" => "Record not found or already deleted"
            ], 302);
        }
    }
    public function show_role($id = null)
    {
        $role = Role::get();
        return view('admin.role.index', compact('role'));
    }
    public function update_role(Request $request, $id)
    {
        if (Role::where('id', $id)->count() > 0) {
                $validator = Validator::make($request->all(), [
                    'name' => ['required'],
                ]);
            if (Role::where('id', '!=', $id)->where('name', 'LIKE', $request->name)->count() > 0) {
                return response()->json([
                    "message" => "The Name Has Already Been Taken"
                ], 302);
            }
            if ($validator->fails()) {
                return response()->json($validator->errors(), 302);
            } else {
                $role = RoleModel::find($id);
                $role->update(['name'=>$request->name]);
                $role->save();
                $role->syncPermissions($request->permissions);
                        if ($role) {
                            return response()->json([
                                "message" => "Role Updated Successfully"
                            ], 200);
                        } else {
                            return response()->json([
                                "message" => "Something went wrong"
                            ], 302);
                        }
                    }
            }
    }

    public function create_role_view()
    {
        $modules = Permission::groupBy('module')->pluck('module');
        $permissions =  collect($modules)->map(function ($module) {
            $str = Str::of($module)->camel()->plural()->ucsplit()->toArray();
            $permissions = Permission::where('module', $module)->get(['id', 'name'])->toArray();

            $permissions = collect($permissions)->map(function ($perm) {
                return array_merge($perm, ['selected' => 'no']);
            })->toArray();
            return [
                'module' => implode(" ", $str),
                'module_name' => $module,
                'selected' => 'no',
                'permissions' => $permissions
            ];
        });
        return view('admin.role.create',compact('permissions'));
    }

    public function update_role_view($id)
    {
        
        $permissions =  $this->findPermission($id);
        $role = Role::where('id', $id);
        if ($role->count() > 0) {
            $role = $role->first();
            return view('admin.role.update', compact('role','permissions'));
        } else {
            return redirect('/admin/role');
        }
    }

   public function  findPermission($roleId){
        $existingPermissions = RoleModel::with('permissions')->where('id', $roleId)->first();
        $oldPermissions = $existingPermissions->permissions->toArray();
        $oldPermissionsModelKeys = collect($oldPermissions)->map(function ($perm) {
            return $perm['id'];
        });

        $mappedPermissiosn = collect($oldPermissions)->map(function ($perm) {
            return [
                'id' => $perm['id'],
                'name' => $perm['name'],
                'module' => $perm['module'],
                'selected' => 'yes'
            ];
        });
        $remainingPermissions = Permission::whereNotIn('id', $oldPermissionsModelKeys)->get();
        $newpermissions = collect($remainingPermissions)->map(function ($perm) {
            return [
                'id' => $perm['id'],
                'name' => $perm['name'],
                'module' => $perm['module'],
                'selected' => 'no'
            ];
        })->toArray();;
        $mergedPermissions = $mappedPermissiosn->merge($newpermissions);
        $modules = Permission::groupBy('module')->pluck('module');
        return collect($modules)->map(function ($module) use ($mergedPermissions) {
            $str = Str::of($module)->camel()->plural()->ucsplit()->toArray();

            $filtered = $mergedPermissions->filter(function ($perm) use ($module) {
                return $perm['module'] ==  $module;
            });

            return [
                'module' => implode(" ", $str),
                'selected' => 'no',
                'permissions' => $filtered
            ];
        });
    }
}
