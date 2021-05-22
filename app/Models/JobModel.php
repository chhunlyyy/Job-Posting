<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobModel extends Model
{
    use HasFactory;
    protected $table = 'job_tb';
    protected $fillable = [
        'job_title',
        'num_position',
        'location',
        'schedule',
        'salary',
        'duties',
        'requirements',
        'application_info',
        'company_name',
        'user_created_id',
    ];
}
