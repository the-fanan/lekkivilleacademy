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
                'amount' => 5000,
                'group' => 'nursery and primary',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'nursery classes',
                'amount' => 5000,
                'group' => 'nursery and primary',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'primary / year 1 - 6',
                'amount' => 8000,
                'group' => 'nursery and primary',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'common entrance',
                'amount' => 10000,
                'group' => 'nursery and primary',
                'duration_type' => 'month',
                'duration_amount' => '4'
            ],
            [
                'name' => 'special entrance to selected secondary schools',
                'amount' => 15000,
                'group' => 'nursery and primary',
                'duration_type' => 'month',
                'duration_amount' => '2'
            ],
            [
                'name' => 'jss 1 - 3',
                'amount' => 10000,
                'group' => 'secondary, high-school and post-secondary',
                'duration_type' => 'month',
                'duration_amount' => '2'
            ],
            [
                'name' => 'sss 1 -3',
                'amount' => 10000,
                'group' => 'secondary, high-school and post-secondary',
                'duration_type' => 'month',
                'duration_amount' => '2'
            ],
            [
                'name' => 'checkpoint',
                'amount' => 20000,
                'group' => 'secondary, high-school and post-secondary',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'junior WAEC',
                'amount' => 30000,
                'group' => 'secondary, high-school and post-secondary',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'senior WAEC',
                'amount' => 40000,
                'group' => 'secondary, high-school and post-secondary',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'NECO',
                'amount' => 40000,
                'group' => 'secondary, high-school and post-secondary',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'IGCSE',
                'amount' => 40000,
                'group' => 'secondary, high-school and post-secondary',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'JAMB & post JAMB',
                'amount' => 30000,
                'group' => 'secondary, high-school and post-secondary',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'SAT I & II',
                'amount' => 50000,
                'group' => 'foreign exams',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'A levels',
                'amount' => 60000,
                'group' => 'foreign exams',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'PAT',
                'amount' => 60000,
                'group' => 'foreign exams',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'GRE',
                'amount' => 60000,
                'group' => 'foreign exams',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'GMAT',
                'amount' => 60000,
                'group' => 'foreign exams',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'IELTS',
                'amount' => 60000,
                'group' => 'foreign exams',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'TOEFL',
                'amount' => 60000,
                'group' => 'foreign exams',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'writing skills (creative writing)',
                'amount' => 20000,
                'group' => 'english grammar, literature and writing',
                'duration_type' => 'month',
                'duration_amount' => '2'
            ],
            [
                'name' => 'etiquette',
                'amount' => 20000,
                'group' => 'english grammar, literature and writing',
                'duration_type' => 'month',
                'duration_amount' => '1'
            ],
            [
                'name' => 'reading & debating',
                'amount' => 30000,
                'group' => 'english grammar, literature and writing',
                'duration_type' => 'month',
                'duration_amount' => '3'
            ],
            [
                'name' => 'critical reading',
                'amount' => 30000,
                'group' => 'english grammar, literature and writing',
                'duration_type' => 'month',
                'duration_amount' => '2'
            ],
        ]);
        DB::commit();
    }
}
