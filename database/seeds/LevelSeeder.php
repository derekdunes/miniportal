<?php

use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
               DB::table('levels')->insert(['level_name' => "1st Year"]);
        DB::table('levels')->insert(['level_name' => "2nd Year"]);
        DB::table('levels')->insert(['level_name' => "3rd Year"]);
        DB::table('levels')->insert(['level_name' => "4th Year"]);
        DB::table('levels')->insert(['level_name' => "5th Year"]);
    }
}
