<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UsersController extends Controller
{
    
public function index()
{
    $q = request('q');
    $users = \App\Models\User::when($q, fn($x) =>
        $x->where(fn($w) => $w->where('name','like',"%$q%")->orWhere('email','like',"%$q%"))
    )->orderBy('name')->paginate(15);

    return view('users.index', compact('users'));
}

public function edit(User $user)
{
    return view('users.edit', [
        'user'            => $user,
        'roles'           => Role::orderBy('name')->get(['name']),
        'permissions'     => Permission::orderBy('name')->get(['name']),
        'userRoles'       => $user->getRoleNames()->toArray(),
        'userPermissions' => $user->getPermissionNames()->toArray(),
    ]);
}

public function updateRoles(Request $request, User $user)
{
    $data = $request->validate([
        'roles'   => 'nullable|array',
        'roles.*' => 'string|exists:roles,name',
    ]);

    $user->syncRoles($data['roles'] ?? []);
    return back()->with('success', __('Rôles mis à jour.'));
}

public function updatePermissions(Request $request, User $user)
{
    $data = $request->validate([
        'permissions'   => 'nullable|array',
        'permissions.*' => 'string|exists:permissions,name',
    ]);

    $user->syncPermissions($data['permissions'] ?? []);
    return back()->with('success', __('Permissions mises à jour.'));
}


}
