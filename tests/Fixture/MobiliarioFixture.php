<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MobiliarioFixture
 */
class MobiliarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'mobiliario';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idMobiliario' => 1,
                'codigo' => '',
                'idTipoMobiliario' => 1,
                'idDepartamento' => 1,
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:10:00',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:10:00',
            ],
        ];
        parent::init();
    }
}
