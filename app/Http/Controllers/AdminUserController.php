<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

use App\Models\Users;
use App\Traits\DeleteModelTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{

    use DeleteModelTrait;
    private $user;

    public function __construct(Users $user, Role $role)
    {
        $this->user = $user;
        $this->role = $role;
    }

    public function index()
    {
        $users = $this->user->simplePaginate(10);

        return \view('admin.user.index', \compact('users'));
    }

    public function create()
    {
        $roles = $this->role->all();
        return \view('admin.user.add', \compact('roles'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $user = $this->user->create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'address' => $request->address
            ]);
            $user->roles()->attach($request->role_id);
            DB::commit();
            return \redirect()->route('users.index');
        } catch (\Exception $ex) {
            DB::rollback();
            Log::error('Message: ' . $ex->getMessage() . '---- Line: ' . $ex->getLine());
        }
    }

    public function edit($id)
    {
        $roles = $this->role->all();
        $user = $this->user->find($id);
        $rolesOfUser = $user->roles;
        return \view('admin.user.edit', \compact('roles', 'user', 'rolesOfUser'));
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->user->find($id)->update([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'address' => $request->address
            ]);
            $user = $this->user->find($id);
            $user->roles()->sync($request->role_id);
            DB::commit();
            return \redirect()->route('users.index');
        } catch (\Exception $ex) {
            DB::rollback();
            Log::error('Message: ' . $ex->getMessage() . '---- Line: ' . $ex->getLine());
        }
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->user);
    }
}
