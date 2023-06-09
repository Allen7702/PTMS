<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyActivity extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'weekly_description', 'tools_used', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function activities()
{
    return $this->hasMany(Activity::class);
}

}
