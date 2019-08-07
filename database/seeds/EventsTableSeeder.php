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
        		'nama' => 'Berbakti Kepada Orang Tua',
        		'alamat' => 'Masjid UI',
        		'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'action.jpg',
        		'user_id' => 1,
                'tanggal_mulai' => Carbon::create('2019', '04', '30', '09', '00'),
                'tanggal_selesai' => Carbon::create('2019', '04', '30', '12', '00'),
        		'created_at' => Carbon::now(),
        	],
        	[
        		'nama' => 'Dua Waktu Singkat',
        		'alamat' => 'Masjid An-Nur',
        		'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'band.jpg',
                'tanggal_mulai' => Carbon::create('2019', '05', '5', '13', '00'),
                'tanggal_selesai' => Carbon::create('2019', '05', '5', '16', '00'),
        		'user_id' => 1,
        		'created_at' => Carbon::now(),
        	],
            [
                'nama' => '100 Amalan Sunnah',
                'alamat' => 'Masjid Al-Falah',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'band.jpg',
                'tanggal_mulai' => Carbon::create('2019', '05', '5', '18', '00'),
                'tanggal_selesai' => Carbon::create('2019', '05', '5', '21', '00'),
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Peringatan Terhadap Dosa',
                'alamat' => 'Masjid Al-Hikmah',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'band.jpg',
                'tanggal_mulai' => Carbon::create('2019', '05', '5', '20', '00'),
                'tanggal_selesai' => Carbon::create('2019', '05', '5', '22', '00'),
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
        	[
        		'nama' => 'Adab Penuntut Ilmu',
        		'alamat' => 'Masjid Nurul Fikri',
        		'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'concert.jpg',
                'tanggal_mulai' => Carbon::create('2019', '05', '10', '09', '00'),
                'tanggal_selesai' => Carbon::create('2019', '05', '10', '12', '00'),
        		'user_id' => 2,
        		'created_at' => Carbon::now(),
        	],
        	[
        		'nama' => 'Pahala Puasa Arafah',
        		'alamat' => 'Masjid Nurul Huda',
        		'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'way.png',
                'tanggal_mulai' => Carbon::create('2019', '05', '15', '13', '00'),
                'tanggal_selesai' => Carbon::create('2019', '05', '15', '16', '00'),
        		'user_id' => 2,
        		'created_at' => Carbon::now(),
        	],
            [
                'nama' => 'Doa Orang Shaleh',
                'alamat' => 'Masjid Al-Ikhlas',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'way.png',
                'tanggal_mulai' => Carbon::create('2019', '05', '15', '18', '00'),
                'tanggal_selesai' => Carbon::create('2019', '05', '15', '21', '00'),
                'user_id' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Fiqh Tawakkal',
                'alamat' => 'Masjid Al-Umm',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'way.png',
                'tanggal_mulai' => Carbon::create('2019', '05', '15', '20', '00'),
                'tanggal_selesai' => Carbon::create('2019', '05', '15', '22', '00'),
                'user_id' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Macam-Macam Riya',
                'alamat' => 'Masjid Al-Ikhwan',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'way.png',
                'tanggal_mulai' => Carbon::create('2019', '05', '15', '09', '00'),
                'tanggal_selesai' => Carbon::create('2019', '05', '15', '12', '00'),
                'user_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Khusyuk Dalam Shalat',
                'alamat' => 'Masjid Al-Ikhwan',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'way.png',
                'tanggal_mulai' => Carbon::create('2019', '05', '15', '13', '00'),
                'tanggal_selesai' => Carbon::create('2019', '05', '15', '16', '00'),
                'user_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Fiqh Muamalah',
                'alamat' => 'Masjid An-Nur',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'way.png',
                'tanggal_mulai' => Carbon::create('2019', '05', '15', '18', '00'),
                'tanggal_selesai' => Carbon::create('2019', '05', '15', '21', '00'),
                'user_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Tanda-Tanda Kiamat',
                'alamat' => 'Masjid Al-Falah',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'way.png',
                'tanggal_mulai' => Carbon::create('2019', '05', '15', '20', '00'),
                'tanggal_selesai' => Carbon::create('2019', '05', '15', '22', '00'),
                'user_id' => 3,
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
