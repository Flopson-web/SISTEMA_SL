<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'apellido', 
        'especialidad', 
        'edad', 
        'celular', 
        'user_id'
    ];
    //relacion uno a uno inversa
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    //relacion muchos a muchos
    public function courses(){
        return $this->belongsToMany(Course::class, 'course_teacher');
    }

    // Relación uno a muchos como asesor1
    public function coursesAsAsesor1(){
        return $this->hasMany(Course::class, 'asesor_id_1');
    }

    // Relación uno a muchos como asesor2
    public function coursesAsAsesor2(){
        return $this->hasMany(Course::class, 'asesor_id_2');
    }
    public function reports(){
        return $this->hasMany(Report::class, 'teacher_id');

    }


}
