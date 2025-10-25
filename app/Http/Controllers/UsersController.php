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
    $users = User::with('roles')->get(); 
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

public function destroy(User $user)
{
    $currentUser = request()->user();

    abort_unless($currentUser && $currentUser->can('users.manage'), 403);

    if ($currentUser->id === $user->id) {
        return back()->with('error', __('Vous ne pouvez pas supprimer votre propre compte.'));
    }

    $user->delete();

    return redirect()->route('users.index')->with('success', __('Utilisateur supprimé.'));
}


}
