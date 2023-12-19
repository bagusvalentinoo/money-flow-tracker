<?php

namespace Database\Seeders\User;

use App\Models\User\Role;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class AddRolesForStartingSeeder extends Seeder
{
    private Role $roleModel;

    public function __construct(Role $roleModel)
    {
        $this->roleModel = $roleModel;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->roleModel->query()->insert([
            [
                'id' => Uuid::uuid4(),
                'name' => 'Admin',
                'guard_name' => 'web'
            ],
            [
                'id' => Uuid::uuid4(),
                'name' => 'Member',
                'guard_name' => 'web'
            ]
        ]);
    }
}
