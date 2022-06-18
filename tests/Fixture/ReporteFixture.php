<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReporteFixture
 */
class ReporteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'reporte';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idReporte' => 1,
                'codigo' => '',
                'idCaso' => 1,
                'fechaEntrega' => '2022-06-18 01:10:37',
                'idEmpleadoEntrega' => 1,
                'idEmpleadoRecibe' => 1,
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:10:37',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:10:37',
            ],
        ];
        parent::init();
    }
}
