<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'email' => 'spoonfedweb@gmail.com',
            'password' => Hash::make('asdf1234')
            )
        );
    }
}