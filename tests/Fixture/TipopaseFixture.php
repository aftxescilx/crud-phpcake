<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipopaseFixture
 */
class TipopaseFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tipopase';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idTipoPase' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:11:42',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:11:42',
            ],
        ];
        parent::init();
    }
}
