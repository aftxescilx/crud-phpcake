<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InstitucioneducativaFixture
 */
class InstitucioneducativaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'institucioneducativa';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idInstitucionEducativa' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'ciudad' => 'Lorem ipsum dolor sit amet',
                'estado' => 'Lorem ipsum dolor sit amet',
                'pais' => 'Lorem ipsum dolor sit amet',
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:09:38',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:09:38',
            ],
        ];
        parent::init();
    }
}
