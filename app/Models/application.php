<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    use HasFactory;
    protected $fillable = ['department', 'course','region', 'year', 'college','number_students', 'company_name'];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
