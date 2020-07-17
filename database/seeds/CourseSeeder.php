<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert(['course_name' => "FEG 101", 'credit_load' => 3]);
        DB::table('courses')->insert(['course_name' => "MME 253", 'credit_load' => 2]);
        DB::table('courses')->insert(['course_name' => "MATH 101", 'credit_load' => 4]);
        DB::table('courses')->insert(['course_name' => "GST 101", 'credit_load' => 6]);
        DB::table('courses')->insert(['course_name' => "PHY 101", 'credit_load' => 2]);
        DB::table('courses')->insert(['course_name' => "FEG 203", 'credit_load' => 1]);
        DB::table('courses')->insert(['course_name' => "CHEM 111", 'credit_load' => 6]);
        DB::table('courses')->insert(['course_name' => "COMP 211", 'credit_load' => 3]);
        DB::table('courses')->insert(['course_name' => "COMP 111", 'credit_load' => 3]);
        DB::table('courses')->insert(['course_name' => "EEE 311", 'credit_load' => 2]);
        DB::table('courses')->insert(['course_name' => "EEE 151", 'credit_load' => 2]);
        DB::table('courses')->insert(['course_name' => "EEE 251", 'credit_load' => 4]);
        DB::table('courses')->insert(['course_name' => "MME 251", 'credit_load' => 5]);
        DB::table('courses')->insert(['course_name' => "COMP 351", 'credit_load' => 1]);
        DB::table('courses')->insert(['course_name' => "PHY 211", 'credit_load' => 6]);
        DB::table('courses')->insert(['course_name' => "CVE 213", 'credit_load' => 1]);
        DB::table('courses')->insert(['course_name' => "CVE 112", 'credit_load' => 2]);
        DB::table('courses')->insert(['course_name' => "GST 203", 'credit_load' => 3]);
        DB::table('courses')->insert(['course_name' => "PES 203", 'credit_load' => 4]);
    }
}
