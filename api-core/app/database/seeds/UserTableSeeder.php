<?php

class UserTableSeeder extends Seeder{
    public function run(){
        DB::table('users')->delete();
        
        User::create(array(
            'username' => 'usuario1',
            'password' => Hash::make('password1')
        ));
        
        User::create(array(
            'username' => 'usuario2',
            'password' => Hash::make('password2')
        ));
    }
}