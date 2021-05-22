<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListingModel extends Model
{
    use HasFactory;
    protected $table = 'job_tb';
    protected $fillable = [
        'pageSize',
        'pageIndex',
        'userStatus',
        'userId',
        'job_title',
        'num_position',
        'location',
        'schedule',
        'salary',
        'duties',
        'Requirements',
        'application_info',
        'company_name',
    ];
}
