<?php

use Illuminate\Database\Seeder;
use App\Models\Event\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event1 = Event::create([
        	'name' => 'Event Number 1',
        	'text' => 'Text for event number 1.',
        	'main_image_id' => '3',
        	'user_id' => '1'
        ]);

        $event2 = Event::create([
        	'name' => 'Event Number 2',
        	'text' => 'Text for event number 2.',
        	'main_image_id' => '4',
        	'user_id' => '1'
        ]);

        $event3 = Event::create([
        	'name' => 'Event Number 3',
        	'text' => 'Text for event number 3.',
        	'main_image_id' => '6',
        	'user_id' => '3'
        ]);
    }
}
