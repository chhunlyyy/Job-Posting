<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmissionModel extends Model
{
    use HasFactory;
    protected $table ='submission_tb';
    protected $fillable=[
        'user_id',
        'job_id',
        'created_date',
        'cv_attachment',
    ];
}
