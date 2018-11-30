<?php

use App\User;
use Illuminate\Database\Seeder;
use jeremykenedy\LaravelRoles\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Add Roles
         *
         */
        if (Role::where('name', '=', 'Toko')->first() === null) {
            $TokoRole = Role::create([
                'name'        => 'Toko',
                'slug'        => 'printing',
                'description' => 'Toko Printing',
                // 'level'       => 5,
            ]);
        }

        if (Role::where('name', '=', 'User')->first() === null) {
            $userRole = Role::create([
                'name'        => 'User',
                'slug'        => 'user',
                'description' => 'User Role',
                // 'level'       => 1,
            ]);
        }

        if (Role::where('name', '=', 'Super Admin')->first() === null) {
            $userRole = Role::create([
                'name'        => 'Superadmin',
                'slug'        => 'superadmin',
                'description' => 'Superadmin Role',
                // 'level'       => 0,
            ]);
        }
    }
}
