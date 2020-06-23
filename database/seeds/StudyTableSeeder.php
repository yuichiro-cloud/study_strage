<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('study')->insert([
            [
                'name'=>'python'
            ],
            [
                'name'=>'ruby'
            ],
            [
                'name'=>'php'
            ],

        ]);
    }
}
