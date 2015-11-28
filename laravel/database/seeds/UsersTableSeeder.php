<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->delete();

        $users = array(
            ['id' => '1', 'name' => 'Laurent', 'email' => 'laurentt96@outlook.fr', 'password' => bcrypt('test'), 'admin' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '2', 'name' => 'Prout', 'email' => 'prout@gmail.com', 'password' => bcrypt('test'), 'admin' => '0', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            );

        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
}
