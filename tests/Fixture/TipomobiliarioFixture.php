<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipomobiliarioFixture
 */
class TipomobiliarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tipomobiliario';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idTipoMobiliario' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:11:30',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:11:30',
            ],
        ];
        parent::init();
    }
}
