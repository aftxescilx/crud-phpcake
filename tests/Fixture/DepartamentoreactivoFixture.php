<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DepartamentoreactivoFixture
 */
class DepartamentoreactivoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'departamentoreactivo';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idDepartamentoReactivo' => 1,
                'idDepartamento' => 1,
                'idReactivo' => 1,
                'lote' => '',
                'codigo' => 'Lorem ip',
                'fechaEmpaque' => '2022-06-18 01:12:36',
                'fechaCaducidad' => '2022-06-18 01:12:36',
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:12:36',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:12:36',
            ],
        ];
        parent::init();
    }
}
