<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(STD\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(STD\Widget::class, function ($faker) {

    $name = $faker->unique()->word . ' ' . $faker->unique()->word;
    $slug = str_slug($name, "-");
    $user_id = rand(1,4);

    return [
        'name' => $name,
        'slug' => $slug,
        'user_id' => $user_id,


    ];
});

$factory->define(STD\Cliente::class, function (Faker\Generator $faker) {
    $provinciasIds = STD\Provincia::pluck('id')->all();
    $provincia = $faker->randomElement($provinciasIds);

    $cantonesIds= STD\Canton::where('provincia_id', $provincia)->pluck('id')->all();
    $canton = $faker->randomElement($cantonesIds);

    $parroquiasIds = STD\Parroquia::where('canton_id', $canton)->pluck('id')->all();

    return [
        'NumeroDocumento' => $faker->text(15),
        'Nombre'          => $faker->text(20),
        'Apellido'        => $faker->text(20),
        'provincia_id'    => $provincia,
        'canton_id'       => $canton,
        'parroquia_id'    => $faker->randomElement($parroquiasIds),
    ];
});

$factory->define(STD\SolicitudEstudio::class, function (Faker\Generator $faker) {
    $clientesIds = STD\Cliente::pluck('id')->all();
    $parroquiasIds = STD\Parroquia::pluck('id')->all();
    $estados =  ['En Desarrollo', 'Finalizado', 'Anulado'];

    return[
        'Descripcion'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'cliente_id'   => $faker->randomElement($clientesIds),
        'Obra'         => $faker->text(20),
        'parroquia_id' => $faker->randomElement($parroquiasIds),
        'Direccion'    => $faker->text(30),
        'Referencia'   => $faker->text(50),
        'Coordenadas'  => $faker->text(10),
        'Contacto'     => $faker->firstNameMale,
        'CostoObra'    => $faker->numberBetween($min = 1000, $max = 9000),
        'Estado'      => $faker->randomElement($estados),
        'Progreso'     => $faker->numberBetween($min = 0, $max = 100)
    ];

});

$factory->define(STD\OrdenTrabajo::class, function (Faker\Generator $faker) {

    $solicitudEstudioId = STD\SolicitudEstudio::pluck('id')->all();
    $usuariosId = STD\User::pluck('id')->all();

    $estados =  ['En Espera', 'En Proceso', 'En Ejecución', 'En Laboratorio'];

    return[
        'solicitud_estudio_id' => $faker->randomElement($solicitudEstudioId),
        'UsuarioIdAutorizado'    => $faker->randomElement($usuariosId),
        'UsuarioIdResponsable'   => $faker->randomElement($usuariosId),
        'Descripcion'          => $faker->text(30),
        'Fecha'                => $faker->date($format = 'Y-m-d', $max = 'now'),
        'RecibidoPor'          => $faker->name,
        'Estado'               =>  $faker->randomElement($estados),
        'Observacion'          => $faker->text(30),
        'Extras'    => $faker->numberBetween($min = 1000, $max = 9000),
    ];
});

$factory->define(STD\TrabajoCampo::class, function (Faker\Generator $faker) {
      $usuariosId = STD\User::pluck('id')->all();
    $OrdenTrabajoId = STD\OrdenTrabajo::pluck('id')->all();

    return[
        'orden_trabajo_id'     =>  $faker->unique()->randomElement($OrdenTrabajoId),
        'UsuarioIdResponsable'   => $faker->randomElement($usuariosId),
        'EquiposUtilizados'    => $faker->text(5),
        'Operadores'           => $faker->text(5),
        'Observacion'          => $faker->text(30),
    ];
});


$factory->define(STD\TrabajoLaboratorio::class, function (Faker\Generator $faker) {

    $trabajosCampoId = STD\OrdenTrabajo::pluck('id')->all();
   
    return[
        'ObservacionesTrabajo' => $faker->text(30),
        'DescripcionMuestra'   => $faker->text(10),
        'Estado'               => $faker->text(10),
        'trabajo_campo_id'     => $faker->randomElement($trabajosCampoId),
    ];
});



//https://github.com/fzaninotto/Faker