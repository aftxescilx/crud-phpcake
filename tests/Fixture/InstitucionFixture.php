<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InstitucionFixture
 */
class InstitucionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'institucion';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idInstitucion' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'codigo' => '',
                'ciudad' => 'Lorem ipsum dolor sit amet',
                'pais' => 'Lorem ipsum dolor sit amet',
                'idTipoInstitucion' => 1,
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:09:14',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:09:14',
            ],
        ];
        parent::init();
    }
}
