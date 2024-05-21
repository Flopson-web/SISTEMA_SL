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
        return $this->belongsTo(User::class);
    }
    //relacion muchos a muchos
    public function courses(){
        return $this->belongsToMany(Course::class, 'course_assignments');
    }
}
