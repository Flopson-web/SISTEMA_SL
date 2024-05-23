<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'foto',
        'edad',
        'nro_de_lista',
        'nombre_padre',
        'trabajo_padre',
        'celular_padre',
        'nombre_madre',
        'trabajo_madre',
        'celular_madre',
        'nro_total_hermanos',
        'lugar_que_ocupa',
        'hermanos_en_colegio',
        'direccion_actual',
        'telefono_casa',
        'celular_estudiante',
        'trabaja',
        'lugar_trabajo',
        'nro_dosis_covid',
        'vive_con',
        'religion',
        'course_id',
        'user_id'
    ];

    //relacion uno a uno inversa
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    //relacion uno a muchos inversa
    public function courses(){
        return $this->belongsTo(Course::class, 'course_id');
    }
    //relacion uno a muchos
    public function reports(){
        return $this->hasMany(Report::class, 'report_id');
    }
}
