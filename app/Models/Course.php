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
        'turno',
        'asesor_id_1',
        'asesor_id_2'
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
        return $this->hasMany(Report::class, 'course_id');
    }

    //relacion uno a muchos
    public function asesor1(){
        return $this->belongsTo(Teacher::class, 'asesor_id_1');
    }

    public function asesor2(){
        return $this->belongsTo(Teacher::class, 'asesor_id_2');
    }
}
