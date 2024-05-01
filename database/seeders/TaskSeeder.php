<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    
    {
        //
        DB::table('tasks')->insert([
            'task_name' => 'Task 1',
            'task_description' => 'This is task 1',
            'created_at' => now(),
            'updated_at' => now()
        ]); // this way called the query builder way
    
        
        
    }
}