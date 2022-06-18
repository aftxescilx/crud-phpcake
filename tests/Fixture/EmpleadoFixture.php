<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmpleadoFixture
 */
class EmpleadoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'empleado';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idEmpleado' => 1,
                'numero' => '',
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellidoPaterno' => 'Lorem ipsum dolor sit amet',
                'apellidoMaterno' => 'Lorem ipsum dolor sit amet',
                'genero' => '',
                'ciudad' => 'Lorem ipsum dolor sit amet',
                'pais' => 'Lorem ipsum dolor sit amet',
                'fechaNacimiento' => '2022-06-18 01:08:29',
                'rfc' => '',
                'dni' => '',
                'idTipoEmpleado' => 1,
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:08:29',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:08:29',
            ],
        ];
        parent::init();
    }
}
