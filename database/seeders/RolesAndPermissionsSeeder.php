<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Define permissions
        $perms = [
            'users.manage','subscriptions.manage','courses.manage',
            'zaytouna.view','congress.view','students.view',
            'coachs.add','caochs.edit','coachs.delete',
            'users.manage','roles.manage','bookings.manage',
            'settings.manage','reports.view','meetings.manage'
        ];
        foreach ($perms as $p) Permission::firstOrCreate(['name' => $p, 'guard_name' => 'web']);

        // Define roles (examples from your workflow)
        $roles = [
            'admin'         => ['*'], // * = all permissions (we’ll handle below)
            'zaytouna'           => ['zaytouna.view'],
            'student'    => ['students.view'],
            'congress'   => ['congress.view'],
        ];

        foreach ($roles as $roleName => $plist) {
            $role = Role::firstOrCreate(['name' => $roleName, 'guard_name' => 'web']);
            if (in_array('*', $plist, true)) {
                $role->syncPermissions(Permission::all());
            } else {
                $role->syncPermissions(Permission::whereIn('name', $plist)->get());
            }
        }

        // Example: give first user admin
        $user = \App\Models\User::where('email', 'benazzouzabderrahmen7@gmail.com')->first();
        if ($user && !$user->hasRole('admin')) $user->assignRole('admin');

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
    }
}
