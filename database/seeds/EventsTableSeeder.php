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
        		'user_id' => 1,
        		'created_at' => Carbon::now(),
        	],
        	[
        		'nama' => 'Kajian Kepemudaan Zaman Now',
        		'alamat' => 'Masjid UI',
        		'deskripsi' => 'Kajian Kepemudaan Zaman Now di Masjid UI',
        		'user_id' => 1,
        		'created_at' => Carbon::now(),
        	],
        	[
        		'nama' => 'Mabit 10 Hari Terakhir Ramadhan',
        		'alamat' => 'Masjid Nurul Fikri',
        		'deskripsi' => 'Mabit 10 Hari Terakhir Ramadhan di Masjid Nurul Fikri',
        		'user_id' => 2,
        		'created_at' => Carbon::now(),
        	],
        	[
        		'nama' => 'Mabit Bulan Muharram',
        		'alamat' => 'Masjid Nurul Fikri',
        		'deskripsi' => 'Mabit Bulan Muharram di Masjid Nurul Fikri',
        		'user_id' => 2,
        		'created_at' => Carbon::now(),
        	],
        ]);
    }
}
