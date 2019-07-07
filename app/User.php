<?php

namespace MKProject;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
        /*
            ,'nino_adult',
            'grado_actual',
            'grado_subir',
            'fecha_nacimiento',
            'edad',
            'direccion',
            'telefono',
            'edo_civil',
            'ocupacion_prof',
            'fecha_examen_anterior',
            'fecha_ingreso',
            'practicando',
            'doyang_que_pertenece',
            'nombre_profesor'
        */
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
