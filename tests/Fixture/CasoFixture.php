<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CasoFixture
 */
class CasoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'caso';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idCaso' => 1,
                'codigo' => '',
                'estado' => '',
                'fechaInicio' => '2022-06-18 00:57:53',
                'fechaCierre' => '2022-06-18 00:57:53',
                'idEquipo' => 1,
                'idEspecialidad' => 1,
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 00:57:53',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 00:57:53',
            ],
        ];
        parent::init();
    }
}
