<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PaseFixture
 */
class PaseFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pase';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idPase' => 1,
                'codigo' => '',
                'fechaInicio' => '2022-06-18 01:10:10',
                'fechaFinal' => '2022-06-18 01:10:10',
                'idTipoPase' => 1,
                'idInstitucion' => 1,
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:10:10',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:10:10',
            ],
        ];
        parent::init();
    }
}
