<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->delete();
        DB::table('roles_permissions')->delete();
        DB::table('users_permissions')->delete();

        $permissions = array(
            array('name' => 'Read', 'slug' => 'read'),
        );

        // Insert permissions
        DB::table('permissions')->insert($permissions);

        DB::table('users')->insert([
            'name' => 'test test',
            'email' => 'webmaster@gmail.com',
            'password' => '$2y$10$sgEPreNxcHq0gtVFEXFSFOYMES5nXqyWcjnOiqAYMO3CB4kxtbkKi',
        ]);

        DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'admin'
        ]);

        DB::table('users_roles')->insert([
            'user_id' => 1,
            'role_id' => 1
        ]);

        foreach ($permissions as $key => $item) {
            DB::table('roles_permissions')->insert([
                'role_id' => 1,
                'permission_id' => $key + 1
            ]);

            DB::table('users_permissions')->insert([
                'user_id' => 1,
                'permission_id' => $key + 1
            ]);
        }
    }
}
