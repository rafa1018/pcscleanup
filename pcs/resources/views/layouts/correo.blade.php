<?php $fechaToday = \Carbon\Carbon::now(); ?>

<div class="about-list-author mt-40">
    <p> Hemos recibido una visita de un nuevo usuario a las {{$fechaToday}}
        y requiere información sobre los servicios de PCS.</p> <br>

    <h3>Datos de contacto </h3>
    <p>Nombre: {{$name}} </p>
    <p>Correo: {{$correo}}</p>
    <p>Telefono: {{$phone}} </p>
    <p>Asunto: <br>
        {{$subject}}
    </p>


</div>
