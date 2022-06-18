<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReactivoFixture
 */
class ReactivoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'reactivo';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idReactivo' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'formula' => 'Lorem ipsum dolor sit amet',
                'tipo' => '',
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:10:23',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:10:23',
            ],
        ];
        parent::init();
    }
}
