<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('admin123');
        $user->status = 'active';
        $user->type = 'admin';
        $user->save();

        $user = new \App\User();
        $user->name = 'Guest';
        $user->email = 'guest@gmail.com';
        $user->password = bcrypt('guest123');
        $user->status = 'active';
        $user->type = 'guest';
        $user->save();

    }
}
