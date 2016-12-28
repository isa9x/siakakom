<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	//role Admin
     	$adminRole= new Role();
     	$adminRole->name="admin";
     	$adminRole->display_name="Admin";
     	$adminRole->save();

     	//sample admin
     	$admin = new User();
     	$admin->name = 'Muhammad Isa';
     	$admin->email ='muhammad.isa9x@gmail.com';
     	$admin->password = bcrypt('admin');
     	$admin->no_hp = '089627238069';
     	$admin->save();
     	$admin->attachRole($adminRole);
    }
}
