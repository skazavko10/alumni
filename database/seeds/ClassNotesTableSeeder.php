<?php

use Illuminate\Database\Seeder;
use App\Models\ClassNote\ClassNote;

class ClassNotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classNote1 = ClassNote::create([
        	'user_id' => '6',
        	'name' => 'Class #1',
        	'text' => 'Notes from the first Class.'
        ]);

        $classNote2 = ClassNote::create([
        	'user_id' => '6',
        	'name' => 'Class #3',
        	'text' => 'Notes from the third Class.'
        ]);

        $classNote3 = ClassNote::create([
        	'user_id' => '4',
        	'name' => 'Class #2',
        	'text' => 'Notes from the second Class.'
        ]);

        $classNote4 = ClassNote::create([
        	'user_id' => '4',
        	'name' => 'Class #1',
        	'text' => 'Notes from the first Class.'
        ]);

        $classNote5 = ClassNote::create([
        	'user_id' => '1',
        	'name' => 'Class #1',
        	'text' => 'Notes from the first Class.'
        ]);

        $classNote6 = ClassNote::create([
        	'user_id' => '1',
        	'name' => 'Class #2',
        	'text' => 'Notes from the second Class.'
        ]);

        $classNote7 = ClassNote::create([
        	'user_id' => '1',
        	'name' => 'Class #3',
        	'text' => 'Notes from the third Class.'
        ]);

        $classNote8 = ClassNote::create([
        	'user_id' => '1',
        	'name' => 'Class #4',
        	'text' => 'Notes from the fourth Class.'
        ]);
    }
}
