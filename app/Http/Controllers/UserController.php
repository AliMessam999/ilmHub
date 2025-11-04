<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RoleModel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function create_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required',Rule::unique('users')],
            'name' => 'required',
            'password' => 'required',
            'role'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } else {

            $user = User::create([
                'email'=>$request->email,
                'name'=>$request->name,
                'phone_num'=>$request->phone_num,
                'password'=>bcrypt($request->password),
                'email_verified_at'=>now(),
                'remember_token'=>'tOkEn',
            ]);
            if ($user) {
                $role = RoleModel::find($request->role);
                $user->assignRole($role);
                return response()->json([
                    "message" => "User Created Successfully"
                ], 200);
            } else {
                return response()->json([
                    "message" => "Something Went Wrong"
                ], 302);
            }
        }
    }

    public function delete_user($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "Please enter the id of user for deleting"
            ], 302);
        }
        if (User::where('id', $id)->count() > 0) {
            $User = User::where('id', $id)->delete();
            if ($User) {
                return response()->json([
                    "message" => "user Deleted Successfully"
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
    public function show_user($id = null)
    {
        $user = User::with('roles')->get();
        return view('admin.user.index', compact('user'));
    }
    public function update_user(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
            'role'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 302);
        } 

            
            $user = User::find($id);
                (isset($request->password) ? $user->update(
                    [
                        'password' => Hash::make($request->password)
                    ]
                ) : "");


                $role = RoleModel::find($request->role);
                (isset($request->role) ? $user->syncRoles($role)  : "");
                $user->update([
                    'name'=>$request->name,
                    'phone_num'=>$request->phone_num,
                ]);
                $user->save();
        if ($user) {
            return response()->json([
                "message" => "user Updated Successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Something went wrong"
            ], 302);
        }
           
    }

    public function create_user_view()
    {
        $roles = RoleModel::get();
        return view('admin.user.create',compact('roles'));
    }

    public function update_user_view($id)
    {
        $roles = RoleModel::get();
        $menu = User::where('id', $id);
        if ($menu->count() > 0) {
            $menu = $menu->with('roles')->first();
            return view('admin.user.update', compact('menu','roles'));
        } else {
            return redirect('/admin/user');
        }
    }
}
