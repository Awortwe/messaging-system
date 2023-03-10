<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function userFrom()
    {
        return $this->belongsTo(User::class, 'user_id_from');
    }
}
