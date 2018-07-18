<?php

use Illuminate\Database\Seeder;
use App\Models\User\User;
use App\Models\UserHasRole\UserHasRole;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
        	'name' => 'Slavko',
        	'email' => 'slavko.kazakov@itcrowd.me',
        	'password' => '123Slavko123'
        ]);

        $user2 = User::create([
            'name' => 'Harry',
            'email' => 'harry.kane@itcrowd.me',
            'password' => '123Harry'
        ]);

        $user3 = User::create([
            'name' => 'Ana',
            'email' => 'ana@itcrowd.me',
            'password' => '123Ana456'
        ]);

        $user4 = User::create([
            'name' => 'Bob',
            'email' => 'bob@itcrowd.me',
            'password' => '123Bob123'
        ]);

        $user5 = User::create([
            'name' => 'Maggy',
            'email' => 'maggy@itcrowd.me',
            'password' => '123Maggy'
        ]);

        $user6 = User::create([
            'name' => 'Filip',
            'email' => 'filip@itcrowd.me',
            'password' => '123Filip789'
        ]);

        $UserHasRole = UserHasRole::create([
            'user_id' => $user6->id,
            'user_role_id' => '1'
        ]);

        $UserHasRole = UserHasRole::create([
            'user_id' => $user5->id,
            'user_role_id' => '1'
        ]);

        $UserHasRole = UserHasRole::create([
            'user_id' => $user4->id,
            'user_role_id' => '1'
        ]);

        $UserHasRole = UserHasRole::create([
            'user_id' => $user2->id,
            'user_role_id' => '1'
        ]);

        $UserHasRole = UserHasRole::create([
            'user_id' => $user3->id,
            'user_role_id' => '2'
        ]);

        $UserHasRole = UserHasRole::create([
            'user_id' => $user1->id,
            'user_role_id' => '2'
        ]);

        $UserHasRole = UserHasRole::create([
            'user_id' => $user1->id,
            'user_role_id' => '1'
        ]);
    }
}
