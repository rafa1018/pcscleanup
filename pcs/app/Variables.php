<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variables extends Model
{

    public static function getAll(){

        $data = [
            'ubicacion' => '5800 S. Sable Cir Margate, FL 33063',
            'ubicacion_principal' => '5800 S. Sable Cir Margate, FL 33063, United States',
            'telefono_principal' => '954-297-5142',
            'correo_principal' => 'mpedraza@pcscleanup.com',
            'facebook' => 'https://www.facebook.com/pcscleanupcorp',
            'twitter' => 'https://twitter.com/pcscleanup',
            'linkedin' => '#',
            'instagram' => 'https://www.instagram.com/pcscleanup/',           
        ]; 

        return $data;
    }
   

}



