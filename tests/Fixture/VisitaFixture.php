<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VisitaFixture
 */
class VisitaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'visita';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idVisita' => 1,
                'codigo' => '',
                'fecha' => '2022-06-18 01:12:15',
                'idTipoVisita' => 1,
                'idVisitante' => 1,
                'idPase' => 1,
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:12:15',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:12:15',
            ],
        ];
        parent::init();
    }
}
