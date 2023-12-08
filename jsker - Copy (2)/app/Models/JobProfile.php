<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'jobId',
        'profileId',
        'nama',
        'CV',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(Job::class, 'jobId');
        return $this->belongsTo(Profile::class, 'profileId');
    }
}
