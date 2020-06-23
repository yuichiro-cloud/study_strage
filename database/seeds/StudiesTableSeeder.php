<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Hash;
class StudiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('studies')->insert([
        //     'name' => Str::random(10),
        //     'created_at'=>'2020/1/1',
        //     'updated_at'=>'2020/1/2',
        // ]);
        // factory(App\Study::class, 50)->create()->each(function ($study) {
        //     $study->posts()->save(factory(App\Post::class)->make());
        // });
        factory(\App\Study::class, 50)->create();

    }
}
