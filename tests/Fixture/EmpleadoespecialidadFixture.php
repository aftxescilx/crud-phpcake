<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmpleadoespecialidadFixture
 */
class EmpleadoespecialidadFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'empleadoespecialidad';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idEmpleadoEspecialidad' => 1,
                'idEmpleado' => 1,
                'idEspecialidad' => 1,
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:13:01',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:13:01',
            ],
        ];
        parent::init();
    }
}
