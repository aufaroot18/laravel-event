<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model {
    protected $fillable = ['user_id', 'event_id'];
    protected $table = 'users_events';
}
