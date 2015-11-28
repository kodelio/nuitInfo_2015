<?php

use Illuminate\Database\Seeder;

class ListesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('listes')->delete();

        $listes = array(
            ['id' => '1', 'name' => 'Liste 1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '2', 'name' => 'Liste 2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            );

        // Uncomment the below to run the seeder
        DB::table('listes')->insert($listes);
    }
}
