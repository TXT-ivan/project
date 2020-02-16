<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PastaSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pasta')->insert([
            'pasta_name' => 'pasta1',
            'text' => 'Hallow this is my pasta.',
            'access_type' => '0',
            'active_time' => date("Y.m.d H:i:s", strtotime('+1 hours', strtotime(date('Y-m-d H:i:s')))),
            'hash' => 'goodlinepasta1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('pasta')->insert([
            'pasta_name' => 'pasta2',
            'text' => 'Hallow this is my pasta to.',
            'access_type' => '1',
            'active_time' => date("Y.m.d H:i:s", strtotime('+10 minutes', strtotime(date('Y-m-d H:i:s')))),
            'hash' => 'goodlinepasta2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('pasta')->insert([
            'pasta_name' => 'pasta3',
            'text' => 'Hallow this fresh pasta.',
            'access_type' => '0',
            'active_time' => date("Y.m.d H:i:s", strtotime('+7 days', strtotime(date('Y-m-d H:i:s')))),
            'hash' => 'goodlinepasta3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
