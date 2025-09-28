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
    $permissions     = Permission::orderBy('name')->get(['name']);
    $userPermissions = $user->getPermissionNames()->toArray();

    return view('users.edit', [
        'user'            => $user,
        'permissions'     => $permissions,
        'userPermissions' => $userPermissions,
    ]);
}

public function update(Request $request, User $user)
{
    // Only validate / update permissions
    $data = $request->validate([
        'permissions'   => 'nullable|array',
        'permissions.*' => 'string|exists:permissions,name',
    ]);

    $user->syncPermissions($data['permissions'] ?? []); // roles & identity untouched

    return redirect()
        ->route('users.edit', $user)
        ->with('success', __('Permissions mises à jour.'));
}


}
