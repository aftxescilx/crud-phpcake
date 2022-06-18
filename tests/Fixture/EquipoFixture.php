<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EquipoFixture
 */
class EquipoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'equipo';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idEquipo' => 1,
                'codigo' => '',
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:08:45',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:08:45',
            ],
        ];
        parent::init();
    }
}
