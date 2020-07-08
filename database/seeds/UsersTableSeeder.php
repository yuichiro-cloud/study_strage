<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        DB::table('users')->insert([
            'name' => 'テストユーザー',
            'email'=>'test@test.com',
            // 'email_verified_at'=>'null',
            'password'=>$faker->password,
            'created_at'=>'2020/1/1',
        ]);

    }
}
