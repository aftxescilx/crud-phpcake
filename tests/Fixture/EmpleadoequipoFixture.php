<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmpleadoequipoFixture
 */
class EmpleadoequipoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'empleadoequipo';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idEmpleadoEquipo' => 1,
                'idEmpleado' => 1,
                'idEquipo' => 1,
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:13:08',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:13:08',
            ],
        ];
        parent::init();
    }
}
