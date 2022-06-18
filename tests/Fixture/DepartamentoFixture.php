<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DepartamentoFixture
 */
class DepartamentoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'departamento';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idDepartamento' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:05:10',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:05:10',
            ],
        ];
        parent::init();
    }
}
