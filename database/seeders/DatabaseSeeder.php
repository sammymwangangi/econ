<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
// use App\Models\Prod\ValueStream;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ShiftSeeder::class,
            ValueStreamSeeder::class,
            MachineSeeder::class,
            EmployeeSeeder::class,
            ProductSeeder::class,
            AvailabilityLossSeeder::class,
        ]);
        // \App\Models\User::factory(1)->create();

        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit models']);
        Permission::create(['name' => 'delete models']);
        Permission::create(['name' => 'create models']);

        // create roles and assign created permissions


        // may be done by chaining
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'admin'])
            ->givePermissionTo(['create models', 'edit models']);

        // or can be done as separate statements
        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo('create models');
    }
}
