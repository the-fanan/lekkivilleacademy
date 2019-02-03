<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Fanan Dala',
            'email' => 'fanan.dala@yahoo.com',
            'password' => bcrypt('fanan123')
        ]);

        $user->assignRole('admin');
    }
}
