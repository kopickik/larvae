<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users2')->delete();

        User::create(array(
            'email' => 'kyle.kopicki@gmail.com',
            'password' => Hash::make('asdf1234')
            )
        );
    }
}