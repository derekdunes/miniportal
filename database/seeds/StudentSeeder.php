<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(['first_name' => "Derek", 'last_name' => "Mbah", 'email' => "mbahderek@gmail.com", 'birth_day' => "1993-11-15T00:00:00", 'level_id' => 1, 'reg_no' => "ESUT/2011/110473"], ['first_name' => "Dunes", 'last_name' => "Fisher", 'email' => "dunesfisher@gmail.com", 'birth_day' => "1993-11-15T00:00:00", 'level_id' => 2, 'reg_no' => "ESUT/2011/110473"]);
    }
}
