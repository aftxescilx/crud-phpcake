<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipovisitaFixture
 */
class TipovisitaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tipovisita';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idTipoVisita' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:11:50',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:11:50',
            ],
        ];
        parent::init();
    }
}
