<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'date',
        'activity',
        'week_number',
        
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function weeklyActivity()
{
    return $this->belongsTo(WeeklyActivity::class);
}

}
