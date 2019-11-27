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
<<<<<<< HEAD
            'name' => 'Eniseyin Olajide',
            'email' => 'eniseyinolajide@gmail.com',
            'password' => 'secret'
=======
            'name' => 'Fanan Dala',
            'email' => 'fanan.dala@yahoo.com',
            'password' => 'fanan123'
>>>>>>> ef095f33a17bef2ab355906518afd81c352d88be
        ]);

        $user->assignRole('admin');

        $user2 = \App\User::create([
<<<<<<< HEAD
            'name' => 'Test Tutor',
            'email' => 'a@a.com',
            'operating_regions' => 'Lekki, Ajah, VGC',
            'profile_image' => 'master/images/stock/tutor2.jpeg',
            'password' => 'secret',

=======
            'name' => 'Ben Mike',
            'email' => 'ben123@yahoo.com',
            'operating_regions' => 'Lekki, Ajah, VGC',
            'profile_image' => 'master/images/stock/tutor2.jpeg',
            'password' => 'ben123',
 
>>>>>>> ef095f33a17bef2ab355906518afd81c352d88be
        ]);

        $user2->assignRole('tutor');
    }
}
