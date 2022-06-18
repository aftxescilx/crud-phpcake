<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipoempleadoFixture
 */
class TipoempleadoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tipoempleado';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idTipoEmpleado' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'sueldoBase' => 1.5,
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:10:59',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:10:59',
            ],
        ];
        parent::init();
    }
}
