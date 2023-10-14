<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'day',
        'start_time',
        'end_time',
        'room',
        'scan_qrcode',
        'academic_year',
        'semester',
        'created_by',
        'updated_by',
    ];

    public function subject ()
    {
        return $this->belongsTo(Subject::class);
    }

    public function student ()
    {
        return $this->belongsTo(User::class);
    }
}
