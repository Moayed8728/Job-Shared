<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Company extends Model
{
 Use hasFactory, HasUuids, SoftDeletes ;

    protected $table = 'companies';
    protected $keyType = 'string';
    public $incrementing = false;
   
    protected $fillable = [
        'name',
        'address',
        'website',
        'industry',
        'ownerId',
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

    public function owner()
    {
        return $this->belongsTo(User::class, 'ownerId');
    }
    public function jobVacancies(){
        return $this->hasMany(JobVacancy::class,'companyId','id');
    }

    public function jobApplications(){
        return $this->hasManyThrough(JobApplication::class,JobVacancy::class,'companyId','jobVacancyId','id','id');

    }
    }

