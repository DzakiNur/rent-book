<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Facades\Schema;  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'Dzaki',
                'email' => 'dzaki@gmail.com',
                'password' => Hash::make('dzaki123'),
                'phone' => '0812345678',
                'address' => 'Bogor',
                'isAdmin' => true,
                // 'roles_id' => '1',
            ],
            [
                'username' => 'jaki',
                'email' => 'jaki@gmail.com',
                'password' => Hash::make('jaki123'),
                'phone' => '09876543567',
                'address' => 'Bandung',
                'isAdmin' => false,
                // 'role_id' => '2',
            ],
        ]);

        // Schema::disableForeignKeyConstraints();
        // Role::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     'admin',
        //     'client',
        // ];

        // foreach($data as $value)
        // {
        //     Role::insert([
        //         'name' => $value,
        //     ]);
        // }
    }
}
