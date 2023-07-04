<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Organization extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = ['id'];
    protected $hidden = ['password'];
}
