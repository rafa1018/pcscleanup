<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variables extends Model
{

    public static function getAll(){

        $data = [
            'ubicacion' => '',
            //'ubicacion_principal' => '5800 S. Sable Cir Margate, FL 33063, United States',
            'ubicacion_principal' => '',
            'telefono_principal' => '954-297-5142',
            'telefono_segundo' => '',
            'telefono_tercero' => '',
            'correo_principal' => 'mpedraza@pcscleanup.com',
            'facebook' => 'https://www.facebook.com/pcscleanupcorp',
            'twitter' => 'https://twitter.com/pcscleanup',
            'linkedin' => '#',
            'instagram' => 'https://www.instagram.com/pcscleanup/',
            'correo_secundario' => 'rwicks@pcscleanup.com',
            'correo_tercero' => 'cmparrado@pcscleanup.com',
            'experiencia' => '25'

        ];

        return $data;
    }


}



