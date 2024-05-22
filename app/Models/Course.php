<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_curso', 
        'gestion_academica', 
        'paralelo',
        'nivel',
        'turno',
        'asesor_id'
    ];

    //relacion muchos a muchos
    public function teachers(){
        return $this->belongsToMany(Teacher::class, 'course_teacher');
    }
    //relacion uno a muchos
    public function students() {
        return $this->hasMany(Student::class, 'course_id');
    }
    //relacion uno a muchos
    public function reports(){
        return $this->hasMany(Report::class);
    }
}
