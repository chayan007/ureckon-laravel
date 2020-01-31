<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Event extends Model
{
    use Notifiable;

    protected $fillable = [
        'event', 'user1', 'user2', 'user3', 'user4', 'user5',
    ];
}
