<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //   User::create
    //   (['name'=>'arjun',
    //     'email'=>'arjun201544@gmail.com',
    //     'password'=>bcrypt('arjun@123'),]
    // );
    // User::create
    // (['name'=>'akshay',
    //                        'email'=>'akshay@gmail.com',
    //                        'password'=>bcrypt('akshay@123')]);
    // }
    User::factory()->count(100)->create();
}
}