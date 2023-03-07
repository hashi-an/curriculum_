<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'たきじい',
            'email'=>'takiji@test.com',
            'password'=>bcrypt('takiji'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name'=>'そうしのまくら',
            'email'=>'makura@test.com',
            'password'=>bcrypt('makura'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name'=>'あくたの龍ちゃん',
            'email'=>'akuta@test.com',
            'password'=>bcrypt('akuta'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
    }
}
