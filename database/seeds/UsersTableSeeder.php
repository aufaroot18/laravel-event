<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            [
            	'name' => 'Admin',
            	'email' => 'admin@gmail.com',
            	'password' => bcrypt('AdminAdmin'),
            ],
            [
            	'name' => 'Aufa',
            	'email' => 'aufa@gmail.com',
            	'password' => bcrypt('AufaAufa'),
            ],
            [
                'name' => 'Billah',
                'email' => 'billah@gmail.com',
                'password' => bcrypt('BillahBillah'),
            ],
        ]);
    }
}