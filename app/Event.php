<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {
    public function user() {
    	return $this->belongsTo('App\User');
    }

    protected $fillable = [
    	'nama', 'alamat', 'deskripsi', 'gambar', 'user_id', 'tanggal_mulai', 'tanggal_selesai'
    ];
}
