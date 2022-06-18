<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InstrumentoFixture
 */
class InstrumentoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'instrumento';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idInstrumento' => 1,
                'codigo' => '',
                'idTipoInstrumento' => 1,
                'idDepartamento' => 1,
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:09:49',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:09:49',
            ],
        ];
        parent::init();
    }
}
