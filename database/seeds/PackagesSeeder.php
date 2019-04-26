<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        DB::table('packages')->insert([
            [
                'name' => 'pre-school',
                'group' => 'nursery and primary',
                'default_price_details' => "{'month':40000,'hour': 2000}"
            ],
            [
                'name' => 'nursery classes',
                'group' => 'nursery and primary',
                'default_price_details' => "{'month':40000,'hour': 2000}"
            ],
            [
                'name' => 'primary / year 1 - 6',
                'group' => 'nursery and primary',
                'default_price_details' => "{'month':40000,'hour': 2000}"
            ],
            [
                'name' => 'common entrance',
                'group' => 'nursery and primary',
                'default_price_details' => "{'month':40000,'hour': 2000}"
            ],
            [
                'name' => 'jss 1 - 3',
                'group' => 'secondary, high-school and post-secondary',
                'default_price_details' => "{'month':65000,'hour': 4000}"
            ],
            [
                'name' => 'sss 1 -3',
                'group' => 'secondary, high-school and post-secondary',
                'default_price_details' => "{'month':65000,'hour': 4000}"
            ],
            [
                'name' => 'checkpoint',
                'group' => 'secondary, high-school and post-secondary',
                'default_price_details' => "{'month':65000,'hour': 4000}"
            ]
        ]);
        DB::commit();
    }
}
