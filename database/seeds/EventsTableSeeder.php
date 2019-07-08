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
        		'deskripsi' => 'Kajian Fiqh Kontemporer di Masjid UI',
                'gambar' => 'belajar.jpg',
        		'user_id' => 1,
                'tanggal_mulai' => Carbon::create('2019', '04', '30'),
                'tanggal_selesai' => Carbon::create('2019', '04', '30'),
        		'created_at' => Carbon::now(),
        	],
        	[
        		'nama' => 'Kajian Kepemudaan Zaman Now',
        		'alamat' => 'Masjid UI',
        		'deskripsi' => 'Kajian Kepemudaan Zaman Now di Masjid UI',
                'gambar' => 'belajar.jpg',
                'tanggal_mulai' => Carbon::create('2019', '05', '5'),
                'tanggal_selesai' => Carbon::create('2019', '05', '5'),
        		'user_id' => 1,
        		'created_at' => Carbon::now(),
        	],
        	[
        		'nama' => 'Mabit 10 Hari Terakhir Ramadhan',
        		'alamat' => 'Masjid Nurul Fikri',
        		'deskripsi' => 'Mabit 10 Hari Terakhir Ramadhan di Masjid Nurul Fikri',
                'gambar' => 'belajar.jpg',
                'tanggal_mulai' => Carbon::create('2019', '05', '10'),
                'tanggal_selesai' => Carbon::create('2019', '05', '10'),
        		'user_id' => 2,
        		'created_at' => Carbon::now(),
        	],
        	[
        		'nama' => 'Mabit Bulan Muharram',
        		'alamat' => 'Masjid Nurul Fikri',
        		'deskripsi' => 'Mabit Bulan Muharram di Masjid Nurul Fikri',
                'gambar' => 'belajar.jpg',
                'tanggal_mulai' => Carbon::create('2019', '05', '15'),
                'tanggal_selesai' => Carbon::create('2019', '05', '15'),
        		'user_id' => 2,
        		'created_at' => Carbon::now(),
        	],
        ]);
    }
}
