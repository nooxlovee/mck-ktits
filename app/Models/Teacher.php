<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Teacher extends Model
{
    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'job_title',
        'cabinet',
        'phone',
        'extension_phone',
        'email',
        'image'
    ];

    public function headOfDepartment()
    {
        return $this->hasOne(Department::class, 'head_id');
    }
}
