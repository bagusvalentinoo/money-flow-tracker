<?php

namespace Database\Seeders\User;

use App\Models\User\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AddUsersIncludeTheirRolesForStartingSeeder extends Seeder
{
    private User $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $userAdmin1 = $this->userModel->query()->create(
            array_filter([
                'name' => 'Admin 1',
                'email' => 'darinasidis@gmail.com',
                'password' => Hash::make('qwerty12345')
            ], customArrayFilter())
        );
        $userAdmin1->assignRole(['Admin']);
        $userAdmin1->admin()->create(
            array_filter([
                'gender' => 'Female',
                'photo_profile' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/768px-Default_pfp.svg.png',
            ], customArrayFilter())
        );

        $userMember1 = $this->userModel->query()->create(
            array_filter([
                'name' => 'Naura Ayu',
                'email' => 'nnnauraayu@gmail.com',
                'password' => Hash::make('qwerty12345')
            ], customArrayFilter())
        );
        $userMember1->assignRole(['Member']);
        $userMember1->member()->create(
            array_filter([
                'gender' => 'Female',
                'address' => 'Jl. Raya Cipadung No. 9, RT 10 RW 12, Cibiru, Bandung, Jawa Barat',
                'photo_profile' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/768px-Default_pfp.svg.png',
            ], customArrayFilter())
        );

        $userMember1 = $this->userModel->query()->create(
            array_filter([
                'name' => 'Warren Hui',
                'email' => 'wwarrenhui@gmail.com',
                'password' => Hash::make('qwerty12345')
            ], customArrayFilter())
        );
        $userMember1->assignRole(['Member']);
        $userMember1->member()->create(
            array_filter([
                'gender' => 'Male',
                'address' => 'Jl. Raya Antapani No. 9, RT 10 RW 12, Antapani, Bandung, Jawa Barat',
                'photo_profile' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/768px-Default_pfp.svg.png',
            ], customArrayFilter())
        );
    }
}
