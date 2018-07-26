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
        	'text' => 'Notes from the first Class.',
            'post_date' => '1944'
        ]);

        $classNote2 = ClassNote::create([
        	'user_id' => '6',
        	'name' => 'Class #3',
        	'text' => 'Notes from the third Class.',
            'post_date' => '1959'
        ]);

        $classNote3 = ClassNote::create([
        	'user_id' => '4',
        	'name' => 'Class #2',
        	'text' => 'Notes from the second Class.',
            'post_date' => '1960'
        ]);

        $classNote4 = ClassNote::create([
        	'user_id' => '4',
        	'name' => 'Class #1',
        	'text' => 'Notes from the first Class.',
            'post_date' => '1977'
        ]);

        $classNote5 = ClassNote::create([
        	'user_id' => '1',
        	'name' => 'Class #1',
        	'text' => 'Notes from the first Class.',
            'post_date' => '1980'
        ]);

        $classNote6 = ClassNote::create([
        	'user_id' => '1',
        	'name' => 'Class #2',
        	'text' => 'Notes from the second Class.',
            'post_date' => '1999'
        ]);

        $classNote7 = ClassNote::create([
        	'user_id' => '1',
        	'name' => 'Class #3',
        	'text' => 'Notes from the third Class.',
            'post_date' => '2003'
        ]);

        $classNote8 = ClassNote::create([
        	'user_id' => '1',
        	'name' => 'Class #4',
        	'text' => 'Notes from the fourth Class.',
            'post_date' => '2010'
        ]);
    }
}
