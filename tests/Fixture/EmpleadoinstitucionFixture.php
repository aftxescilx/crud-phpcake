<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmpleadoinstitucionFixture
 */
class EmpleadoinstitucionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'empleadoinstitucion';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idEmpleadoInstitucion' => 1,
                'idEmpleado' => 1,
                'idInstitucion' => 1,
                'fechaInicio' => '2022-06-18 01:13:40',
                'fechaFinal' => '2022-06-18 01:13:40',
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:13:40',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:13:40',
            ],
        ];
        parent::init();
    }
}
