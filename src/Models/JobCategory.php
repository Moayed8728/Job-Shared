<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class JobCategory extends Model
{

    Use hasFactory, HasUuids, SoftDeletes ;

    protected $table = 'job_categories';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function casts(): array
    {
        return [
            'deleted_at' => 'datetime',
        ];
    }
    public function jobVacancy(){
        return $this->hasMany(JobVacancy::class, 'categoryId','id');
    }

}
