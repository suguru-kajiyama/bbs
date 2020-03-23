<?php

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
              ['name'=>'user',
               'email'=>'aa@a.a',
               'password'=>password_hash('pass',PASSWORD_DEFAULT)
              ],
              ['name'=>'user2',
               'email'=>'aa@a.a1',
               'password'=>password_hash('pass2',PASSWORD_DEFAULT)
              ]
        ];
        DB::table('users')->insert($arr[0]);
        DB::table('users')->insert($arr[1]);
    }
}
