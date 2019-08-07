<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('events')->insert([
        	[
        		'nama' => 'Kajian Fiqh Kontemporer',
        		'alamat' => 'Masjid UI',
        		'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'action.jpg',
        		'user_id' => 1,
                'tanggal_mulai' => Carbon::create('2019', '04', '30'),
                'tanggal_selesai' => Carbon::create('2019', '04', '30'),
        		'created_at' => Carbon::now(),
        	],
        	[
        		'nama' => 'Kajian Kepemudaan Zaman Now',
        		'alamat' => 'Masjid UI',
        		'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'band.jpg',
                'tanggal_mulai' => Carbon::create('2019', '05', '5'),
                'tanggal_selesai' => Carbon::create('2019', '05', '5'),
        		'user_id' => 1,
        		'created_at' => Carbon::now(),
        	],
        	[
        		'nama' => 'Mabit 10 Hari Terakhir Ramadhan',
        		'alamat' => 'Masjid Nurul Fikri',
        		'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'concert.jpg',
                'tanggal_mulai' => Carbon::create('2019', '05', '10'),
                'tanggal_selesai' => Carbon::create('2019', '05', '10'),
        		'user_id' => 2,
        		'created_at' => Carbon::now(),
        	],
        	[
        		'nama' => 'Mabit Bulan Muharram',
        		'alamat' => 'Masjid Nurul Fikri',
        		'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'way.png',
                'tanggal_mulai' => Carbon::create('2019', '05', '15'),
                'tanggal_selesai' => Carbon::create('2019', '05', '15'),
        		'user_id' => 2,
        		'created_at' => Carbon::now(),
        	],
        ]);
    }
}
