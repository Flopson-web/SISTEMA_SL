<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha', 
        'item', 
        'area', 
        'trimestre', 
        'detalle_observaciones', 
        'student_id', 
        'course_id'
    ];


    public function students(){
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function courses(){
        return $this->belongsTo(Course::class, 'course_id');
    }
}
