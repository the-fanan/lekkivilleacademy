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

        $user2 = \App\User::create([
            'name' => 'Ben Mike',
            'email' => 'ben123@yahoo.com',
            'operating_regions' => 'Lekki, Ajah, VGC',
            'profile_image' => 'master/images/stock/tutor2.jpeg',
            'password' => bcrypt('ben123'),
 
        ]);

        $user2->assignRole('tutor');
    }
}
