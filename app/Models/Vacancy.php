<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $table = 'vacancies';

    protected $fillable = [
        'title',
        'from_date',
        'to_date',
        'content',
        'image',
        'vacancy_name',
        'number_of_people_required',
    ];
}
